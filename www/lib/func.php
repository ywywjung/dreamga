<?php

function debug($msg, $options = null, $return = false) {
    return \Common\Util::debug($msg, $options, $return);
}

function plog($msg, $return = false) {
    return \Common\Util::debug($msg, array('dismiss' => false), $return);
}

function clog($msg, $newline = true, $return = false) {
    return \Common\Util::debug($msg, array('newline' => $newline, 'dismiss' => false), $return);
}

function get($field, $data = null, $default = null) {
    return \Common\Util::get($field, $data, $default);
}

function br2nl($text) {
    return \Common\Util::br2nl($text);
}

function array_delete($array, $items) {
    return array_diff($array, is_array($items) ? $items : array($items));
}

// 변수 또는 배열의 이름과 값을 얻어냄. print_r() 함수의 변형
function print_pre($value) { 
    echo "<pre style='font-family:돋움; font-size:9pt;'>",print_r($value, true),"</pre>";
}

@include_once 'Log.php';	

class MysqlClass {
	private $conn;
	
	private $host = "175.126.38.176"; 
	private $user = "kiosk";
	private $password = "kim515900";
	private $database = "kiosk";	
	
	private $mongo = false;
	
	public $result;
	private $charset = "utf-8"; 
	
	private $logFlag = 0; 
	private $log = false; 
	
	public $mysql_function = array('now()','CURRENT_DATE()', 'NULL');	

	public $dbSuccess = false;
	
	/**
	 * MysqlClass
	 * 
	 * @param string $charset
	 * @param string $host
	 * @param string $user
	 * @param string $password
	 * @param string $database
	 * @param string $mongo
	 */
	public function MysqlClass($charset = "utf8", $host = false, $user = false, $password = false, $database = false, $mongo = false){
		
		if($logFlag == 1){
			$this->log = &Log::factory('file', $_SERVER[DOCUMENT_ROOT].'/temp/log/dbQuery.log', 'DbQuery'); 
		}
		$this->logFlag = $logFlag;
		
		$this->dbSuccess = $this->connect_db($charset, $host, $user, $password, $database);
		$this->mongo = $mongo;
	}
	
	/**
	 * DB connect
	 * @param unknown $charset
	 * @param string $host
	 * @param string $user
	 * @param string $password
	 * @param string $database
	 * @return boolean
	 */
	public function connect_db($charset, $host = false, $user = false, $password = false, $database = false)
	{	
		if($host != false){
			$this->host = $host;
		}

		if($user != false){
			$this->user =	$user;
		}
		
		if($password != false){
			$this->password = $password;
		}
		
		if($database != false){
			$this->database = $database;
		}
		
		$this->conn = mysql_connect($this->host, $this->user, $this->password);
		$result = $this->select_db($this->database);
		$this->execute_query("set names ".$charset);
		
		if($this->conn == false || $result == false){
			return false;
		}else{
			return true;
		}		
	}
	
	/**
	 * 
	 * @param unknown $database
	 */
	public function select_db($database)
	{
		return mysql_select_db($database, $this->conn);
	}
	
	/**
	 * @param String $query
	 * @return resource $result 
	 */
	public function execute_query($query)
	{
		$result = mysql_query($query, $this->conn) or die( $this->mysql_error($query) );
		$this->result = $result;
		return $result;
	} 
	
	/**
	 *  셀렉트 쿼리
	 * @param unknown $query
	 * @param string $array
	 * @return unknown
	 */
	public function select_obj($query, $array = false)
	{
		$result = $this->execute_query($query);		
		if($array == false) {
				$return = mysql_fetch_object($result);
		} else {
			while($row = mysql_fetch_object($result)){
				$return[] = $row;
			}
		}
		
		return $return;
	}
	
	/**
	 * 셀렉트 쿼리
	 * @param String $query
	 * @return Array[][]
	 */
	public function select($query)
	{
		$result = $this->execute_query($query);
		while($row = mysql_fetch_assoc($result)){
			$return[] = $row;
		}
		return $return;
	}
	
	/**
	  * 인서트 쿼리
	 * @param String $query
	 * @return int $insert_id or boolean false
	 */
	public function insert($query){
		$resource = $this->execute_query($query);
		if($resource == false){
			return $resource;
		}else{
			$this->mongoInsert($query);
			return mysql_insert_id();	
		}
	}
	
	
	/**
	 * 인서트 쿼리
	 * @param array $arr String $query
	 * @return int $insert_id or boolean false
	 */
	public function insertArr($arr, $table, $isFunc = false){
		foreach($arr as $key => $val) {
			$_key[] = $key;
			if($isFunc==true) {
				if(in_array($val, $this->mysql_function)) {
					$_val[] = $val;
				} else {
					$_val[] = "'".mysql_escape_string($val)."'";
				}
			} else {
				$_val[] = "'".mysql_escape_string($val)."'";
			}
			
		}
		$keyQ = implode(", ", $_key);
		$valQ = implode(", ", $_val);
		$query = "insert into $table ($keyQ) value ($valQ) ";
		$resource = $this->execute_query($query);
		if($resource == false){
			return $resource;
		}else{
			$this->mongoInsert($query, $table);
			return mysql_insert_id();	
		}
	}
	
	/**
	 * 업데이트 쿼리
	 * 
	 * @param String $query
	 * @return int $affected_rows or boolean false
	 */
	public function update($query){
		$resource = $this->execute_query($query);
		if($resource == false){
			return $resource;
		}else{
			$this->mongoInsert($query);
			return mysql_affected_rows();	
		}
	} 
	
	/**
	 * 업데이트 쿼리
	 * 
	 * @param Array $arr String $query String $where 
	 * @return int $affected_rows or boolean false
	 */
	public function updateArr($arr, $table, $where, $isFunc = false){
		foreach($arr as $key => $val) {
			if($isFunc==true) {
				if(in_array($val, $this->mysql_function)) {
					$_arr[] = "$key=$val";
				} else {
					$_arr[] = "$key='$val'";
				} 
			} else {
				$_arr[] = "$key='$val'";
			}
		}
		$updQ = implode(", ", $_arr);
		$query = "update $table set $updQ where $where ";
		$resource = $this->execute_query($query);
		if($resource == false){
			return $resource;
		}else{
			$this->mongoInsert($query, $table);
			return mysql_affected_rows();	
		}
	} 
	
	/**
	 *  삭제쿼리 
	 *  
	 * @param String $query
	 * @return int $affected_rows or boolean false
	 */
	public function delete($query){
		$this->mongoInsert($query);
		return $this->update($query);
	}

	/**
	 * 에러 로그
	 * @param String $query
	 */
	public function mysql_error($query, $logFlag = false)
	{
		if($logFlag == false)$logFlag = $this->logFlag; 
		if($logFlag == 1){
			if($this->log == false) 
			{ 
				$this->log = &Log::factory('file', $_SERVER[DOCUMENT_ROOT].'/temp/log/dbQuery.log', 'DbQuery'); 
			} 
			$this->log->log("[Query] : $query \n [Error Message] : ".mysql_error()." \n");
		}else if($logFlag == 2){
			echo "Query String : ".$query."<br>";
			echo "Error Message : <b>".mysql_error()."</b>";	
		}		
	}
	
	/**
	 *
	 * @param String $query
	 * @return int
	 */
	public function getRowNum(){
		return mysql_num_rows($this->result);
	}
	
	/**
	 * sequence
	 * @param String $table String $field
	 */	
	public function getSeq($table, $field)
	{
		$selQ = "select $field from $table where seq_no=1";
		$res = $this->select($selQ);
		
		$updQ = "update $table set $field = $field + 1  where seq_no=1";
		$res2 = $this->execute_query($updQ);

		return $res[0][$field];
	}
	
	/**
	 * 
	 * @param unknown $logFlag
	 */
	public function setErrorLog($logFlag){
		$this->logFlag = $logFlag;
	}
	
	public function mongoInsert($qry, $table = false) {
		if($this->mongo) {
			$log->query = iconv('EUC-KR','UTF-8',$qry);
			if($log->query == false) $log->query =$qry;
			$log->sess_id = $_SESSION["sess_id"];
			$log->remote_ip = $_SERVER['REMOTE_ADDR'];
			$log->table = $table;
			$log->reg_date = date("Y-m-d H:i:s");
			switch (strtoupper(substr($qry, 0, 6))) {
				case "SELECT":
				$log->qry_type = "SELECT"; 
				break;
				case "INSERT":
				$log->qry_type = "INSERT"; 
				break;
				case "UPDATE":
				$log->qry_type = "UPDATE";
				break;
				case "DELETE":
				$log->qry_type = "DELETE";
				break;
			}
			try {
				$this->mongo->insert($log);
			} catch (Exception $e) {
				testP($e);
			}
		}
	}
}

    function alert_and_move($msg, $url = false)
    {
        if($url == false)
        {
            echo "<SCRIPT LANGUAGE=JavaScript>alert('".$msg."');</SCRIPT>";
        }
        else if($url == "back")
        {
            echo "<SCRIPT LANGUAGE=JavaScript>alert('".$msg."');history.back(-2);</SCRIPT>";
        }

        else if($url == "close")
        {
            echo "<SCRIPT LANGUAGE=JavaScript>alert('".$msg."');window.close();</SCRIPT>";
        }
        else
        {
            echo "<SCRIPT LANGUAGE=JavaScript>alert('".$msg."');location.href='".$url."'</SCRIPT>";
        }
        exit();
    }

        //자바스크립트 처리함수 (메세지 출력)
        function onlymsg($msg) { echo "<script language=\"javascript\"> alert(\"$msg\");</script>"; }
        function url($url) { echo "<script language=\"javascript\"> top.location.href=\"$url\"; </script>"; exit(); }
        function msg($msg) { echo "<script language=\"javascript\"> alert(\"$msg\");</script>"; exit(); }
        //자바스크립트 처리함수 (이전페이지 이동)
        function historyBackMsg($msg) { echo "<script language=\"javascript\"> alert(\"$msg\"); history.back(); </script>"; exit(); }
        //자바스크립트 처리함수 (페이지 이동)
        function msgUrl($msg,$url) { echo "<script language=\"javascript\"> alert(\"$msg\");location.href=\"$url\"; </script>"; exit(); }
        //자바스크립트 처리 함수 ( 창닫기 )
        function winCloseMsg($msg) { echo "<script language=\"javascript\"> alert(\"$msg\"); window.close(); </script>"; exit(); }
        //자바스크립트 처리 함수 ( 처리후 리로드 )
        function openCloseReload($msg) { echo "<script language=\"javascript\"> alert(\"$msg\"); opener.location.reload(); window.close(); </script>"; exit(); }
        //자바스크립트 처리 함수 ( 물어보고 페이지 이동 )
        function openCloseUrl($url) { echo "<script language=\"javascript\"> opener.location.href=\"$url\"; window.close(); </script>"; exit(); }

    /*
    * Quot를 디비에 넣을수 있게 교체한다.
    */
    function replcaeQuot($str, $type = 1){
        if($type == 1){
            return str_replace("'","\\'", $str);
        }else{
            return str_replace('"','\\"', $str);
        }
    }

    /**
     * form을 만들어 전송한다.
     * @return void
     * @param $sendInfo Object 전송할 파라미터
     * @param $formInfo Object form 정보
     * @param $submit Object[optional] form생성후 submit여부
     */
    function formCreate($sendInfo, $formInfo, $submit = false){

        if($formInfo[method] == "" || isset($formInfo[method]) == false ){
            $formInfo[method] = "post";
        }
        echo "
        <form name='$formInfo[name]' method='$formInfo[method]' action='$formInfo[action]'>";
        foreach($sendInfo as $sendName=>$sendValue){
            echo "<input type='hidden' name='$sendName' value='$sendValue'>";
        }
        echo "
        </form>";

        if($submit == true){
            echo "<script>document.$formInfo[name].submit();</script>";
        }
    }

    /**
     * test �� �Լ�
     **/
    function testP($var) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }


    /**
     * test 용 함수
     **/
    function testC($data) {
        if(is_array($data) || is_object($data))
        {
            echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
        } else {
            echo("<script>console.log('PHP: ".$data."');</script>");
        }
    }

    function debug($val, $exit = false) {
        if(DEBUG_MODE){
            echo"<pre>";
            print_r($val);
            echo"</pre>";
            
            if($exit){
                exit;
            }
        }
    }

    /**
     * json_encode 
     **/
    function json_encode2($data) { 
    switch (gettype($data)) { 
        case 'boolean': 
        return $data?'true':'false'; 
        case 'integer': 
        case 'double': 
        return $data; 
        case 'string': 
        return '"'.strtr($data, array('\\'=>'\\\\','"'=>'\\"',"\r\n"=>'\\r\\n')).'"'; 
        case 'array': 
        $rel = false; // relative array? 
        $key = array_keys($data); 
        foreach ($key as $v) { 
            if (!is_int($v)) { 
            $rel = true; 
            break; 
            } 
        } 
    
        $arr = array(); 
        foreach ($data as $k=>$v) { 
            $arr[] = ($rel?'"'.strtr($k, array('\\'=>'\\\\','"'=>'\\"')).'":':'').json_encode2($v); 
        } 
    
        return $rel?'{'.join(',', $arr).'}':'['.join(',', $arr).']'; 
        default: 
        return '""'; 
    } 
    } 

    /**
     * 업로드 폴더 생성
     * @param String $type
     * @param String $category
     * @param String $folder_name
     * @return String $upload_dir
     */
    function make_folder($type, $category, $folder_name){
        $uploadDir = "/upload/";
        if(!file_exists($_SERVER[DOCUMENT_ROOT].$uploadDir))mkdir($_SERVER[DOCUMENT_ROOT].$uploadDir);
        
        $uploadDir = "/upload/$type/";
        if(!file_exists($_SERVER[DOCUMENT_ROOT].$uploadDir))mkdir($_SERVER[DOCUMENT_ROOT].$uploadDir);
        
        $uploadDir = "/upload/$type/$category/";
        if(!file_exists($_SERVER[DOCUMENT_ROOT].$uploadDir))mkdir($_SERVER[DOCUMENT_ROOT].$uploadDir);
        
        $uploadDir = "/upload/$type/$category/$folder_name/";
        if(!file_exists($_SERVER[DOCUMENT_ROOT].$uploadDir))mkdir($_SERVER[DOCUMENT_ROOT].$uploadDir);

        return $uploadDir;
    }

    /**
     * 실제적인 업로드 처리
     * @param String $file_name
     * @param String $type
     * @param String $uploadDir
     * @param String $seq_name
     * @return String $uploadDir
     */
    function upload($file_name, $type, $uploadDir, $seq_name = false){	
        $sizeLimit = intval(substr(ini_get(upload_max_filesize),0,-1)) * 1024 * 1024;//제한크기

        if(is_uploaded_file($_FILES[$file_name][tmp_name]) && filesize($_FILES[$file_name][tmp_name]) <= $sizeLimit){
            if($type == "img")
                if(strpos($_FILES[$file_name][type],"image/") === false)
                    alert_and_move("이미지만 등록 가능합니다.","back");
            
            $fileName = $_FILES[$file_name][name];
            $type = substr($fileName, strrpos($fileName, "."));	//확장자 생성
            
            if($seq_name)$uploadDir .= time().$seq_name.$type;	
            else $uploadDir .= time().$type;
            
            if(!move_uploaded_file($_FILES[$file_name][tmp_name], $_SERVER[DOCUMENT_ROOT].$uploadDir)){
                alert_and_move("파일 업로드에 실패하였습니다. 다시 시도해 주십시오.", "back");
            }else{
                chmod($_SERVER[DOCUMENT_ROOT].$uploadDir, 0777);		
            }
        }else{
            alert_and_move("파일 업로드에 실패하였습니다. 다시 시도해 주십시오.", "back");
        }
        
        return $uploadDir;
    }

    /**
     * 실제적인 업로드 처리
     * @param String $file_name
     * @param String $type
     * @param String $uploadDir
     * @return Array $uploadDirArray
     */
    function upload_array($file_name, $type, $uploadDir){	
        $sizeLimit = intval(substr(ini_get(upload_max_filesize),0,-1)) * 1024 * 1024;//제한크기
        
        if(is_array($_FILES[$file_name][tmp_name])){
        
            for($idx = 0; $idx < sizeof($_FILES[$file_name][tmp_name]); $idx++){
                if($_FILES[$file_name][name][$idx] != ""){			
                    if($type == "img"){
                        if(strpos($_FILES[$file_name][type][$idx],"image/") === false)
                            alert_and_move("이미지만 등록 가능합니다.","back");				
                    }			
                    
                    $tempUploadDir = $uploadDir;
                    if(is_uploaded_file($_FILES[$file_name][tmp_name][$idx]) && filesize($_FILES[$file_name][tmp_name][$idx]) <= $sizeLimit){
                        
                        $fileName = $_FILES[$file_name][name][$idx];
                        $type = substr($fileName, strrpos($fileName, "."));	//확장자 생성	
                        $tempUploadDir .= time().$idx.$type;
                        
                        if(!move_uploaded_file($_FILES[$file_name][tmp_name][$idx], $_SERVER[DOCUMENT_ROOT].$tempUploadDir))
                        {
                            alert_and_move("파일 업로드에 실패하였습니다. 다시 시도해 주십시오.", "back");
                        }else{
                            $uploadDirArray[] = $tempUploadDir;
                            chmod($_SERVER[DOCUMENT_ROOT].$tempUploadDir, 0777);		
                        }				
                    }else{
                        alert_and_move("파일 업로드에 실패하였습니다. 다시 시도해 주십시오.", "back");
                    }
                }else{
                    $uploadDirArray[] = false;
                }
            }
        }else{
            $uploadDirArray = false;
        }
        
        return $uploadDirArray;
    }

    /**
    * 만년달력 보조함수
    **/


    function is_leap_year($year) { // year가 윤년이면 1을 아니면 0을 리턴한다.
        if($year % 400 == 0) return 1;
        else if($year % 100 == 0) return 0;
        else if($year % 4 == 0) return 1;
        else return 0;
    }

    function get_last_day($year, $month) { // year년 month월의 마지막 날을 숫자로 리턴한다.
        if($month == 2) {
            if(is_leap_year($year)) return 29;
            else return 28;
        } else if($month == 4 || $month == 6 || $month == 9 || $month == 11) {
            return 30;
        } else {
            return 31;
        }
    }

    function zeller($year, $month, $day) { // year년 month월 day일의 요일을 계산한다. (일=0, 월=1, ...)
        // zeller 함수에 이용할 수 있도록 year와 month를 보정
        if($month == 1 || $month == 2) $year--;

        $month = ($month + 9) % 12 + 1; // Jan=11, Feb=12, Mar=1, ...
        $year_of_century = $year % 100; // 예 : 91 of 1991
        $century = $year / 100;         // 예 : 19 of 1991
        $day_of_week = ((13*$month-1)/5 + $day + $year_of_century + $year_of_century/4 + $century/4 - 2*$century) % 7;

        if($day_of_week < 0) $day_of_week = ($day_of_week + 7) % 7;
        return $day_of_week;
    }

    /**
     * 임시비밀번호 생성(6자리) 
     */
    function randomPw(){
        $ipwd="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $pwd="";
        for($i=0;$i<6;$i++){
            $pwd.=$ipwd[rand(0,35)];
        }
        return $pwd;
    }


    /**
     * $EMAIL : 답장받을 메일주소
     * $NAME : 보낸이
     * $mailto : 보낼 메일주소
     * $SUBJECT : 메일 제목
     * $CONTENT : 메일 내용
     * 
     */
    function sendMail($EMAIL, $NAME, $mailto, $SUBJECT, $CONTENT){
        
        $admin_email = $EMAIL;
        $admin_name = $NAME;

        $header = "Return-Path: ".$admin_email."\n";
        $header .= "From: =?UTF-8?B?".base64_encode($admin_name)."?= <".$admin_email.">\n";
        $header .= "MIME-Version: 1.0\n";
        $header .= "X-Priority: 3\n";
        $header .= "X-MSMail-Priority: Normal\n";
        $header .= "X-Mailer: FormMailer\n";
        $header .= "Content-Transfer-Encoding: base64\n";
        $header .= "Content-Type: text/html;\n \tcharset=UTF-8\n";

        $subject = "=?UTF-8?B?".base64_encode($SUBJECT)."?=\n";
        $contents = $CONTENT;

        $message = base64_encode($contents);
        flush();
        return mail($mailto, $subject, $message, $header);
    }

    // 문자열 자르는 부분
    function strCut($String, $MaxLen, $ShortenStr) { 

    $StringLen = strlen($String); // 원래 문자열의 길이를 구함 
    $EffectLen = $MaxLen - strlen($ShortenStr); 
    // 최대문자열의 길이에서 말줄임표문자열의 길이를 뺀다 
    if ( $StringLen < $MaxLen )return $String; 
    // 원래문자열의 길이가 최대문자열의 길이보다 작으면 그냥 리턴한다. 

    for ($i = 0; $i <= $EffectLen; $i++) { 
    $LastStr = substr($String, $i, 1); 
    if ( ord($LastStr) > 127 ) $i++; 
    // 2바이트문자라고 생각되면 $i를 1을 더 증가시켜 
    // 결국은 2가 증가하게 된다. 
    // 다음에 오는 1바이트는 당연 지금 바이트의 문자에 귀속되는 문자이다. 
    } 
    $RetStr = substr($String, 0, $i); 
    // 위에서 구한 문자열의 길이만큼으로 자른다. 
    return $RetStr .= $ShortenStr; 
    // 여기에 말줄임문자를 붙여서 리턴해준다. 
    } 


    /* 함수 정의 */
    //문자열 자르는 부분
    function subString($string,$start,$length,$charset=NULL) {     
        if($charset==NULL) {
            $charset='UTF-8';
        }
        /* 정확한 문자열의 길이를 계산하기 위해, mb_strlen 함수를 이용 */
        $str_len=mb_strlen($string,'UTF-8'); 
        if($str_len>$length) {   
        /* mb_substr  PHP 4.0 이상, iconv_substr PHP 5.0 이상 */
            $string=mb_substr($string,$start,$length,'UTF-8');   
            $string.="..";
        }         
        return $string;             
    }

    //커스텀 에러 핸들러 함수
    function customError($errno, $errstr){ 
        echo "<p><strong>Error:</strong> [$errno] $errstr</p>";
    }

    function myErrorHandler($errno, $errstr, $errfile, $errline){ 
        if (!(error_reporting() & $errno)) { 
        // This error code is not included in error_reporting
        return; 
        } 
    
        switch ($errno) { 
        case E_USER_ERROR: 
            echo "<b>My ERROR</b> [$errno] $errstr<br />\n"; 
            echo "  Fatal error on line $errline in file $errfile"; 
            echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n"; 
            echo "Aborting...<br />\n"; 
            exit(1); 
            break; 
    
        case E_USER_WARNING: 
            echo "<b>My WARNING</b> [$errno] $errstr<br />\n"; 
            break; 
    
        case E_USER_NOTICE: 
            echo "<b>My NOTICE</b> [$errno] $errstr<br />\n"; 
            break; 
    
        default: 
            echo "Unknown error type: [$errno] $errstr<br />\n"; 
            break; 
        } 
    
        /* Don't execute PHP internal error handler */
        return true;
    }

    // 엑셀 TIMESTAMP 를 PHP TIME STAMP로 변환
    function time_convert_EXCEL_to_PHP($time){
    $t=( $time- 25569) * 86400-60*60*9;
    $t=round($t*10)/10;
    return $t;
    }

?>