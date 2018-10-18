<?php

//initilize the page
require_once '../../init.web.php';

/*---------------- PHP Custom Scripts ---------

 YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
 E.G. $page_title = "Custom Title" */

$page_title = "회원정보";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include ("../../inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["member"]["sub"]["member-list"]["active"] = true;
include ("../../inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["회원관리"] = "";
		include("../../inc/ribbon.php");
    ?>
    
	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-user fa-fw "></i>
						회원관리
					<span>>
						&nbsp;회원정보
					</span>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
					<li class="sparks-info">
						 <i class="fa fa-user fa-2x txt-color-blue padding-5"></i>
                          <h5> 회원수 <span class="txt-color-blue">200명</span></h5>
					</li>
					<li class="sparks-info">
						<i class="fa fa-arrow-up fa-2x txt-color-purple padding-5"></i>
						<h5> 예약건수 <span class="txt-color-purple">&nbsp;200건</span></h5>
					</li>
					<li class="sparks-info">
						<i class="fa fa-male fa-2x txt-color-greenDark padding-5"></i>
						<h5>관리사수 <span class="txt-color-greenDark">&nbsp;200명</span></h5>
					</li>
				</ul>
			</div>
		</div>
		<!-- 검색,등록버튼  -->
		<div class="widget-body margin-bottom-5">
			<div class="well padding-10">
				<form class="form-inline" role="form">
					<fieldset>
						<div class="form-group" id="div_mach_cd">
							<select name="s_mach_cd" class="smart-form form-control input-sm">
								<option value="all">전체</option>
								<option value="K002" >가입</option>
								<option value="K001" >탈퇴</option>
							  </select>
						</div>
						<!-- <div class="smart-form form-group">
							<label class="input"> <i class="icon-append fa fa-calendar"></i>
								<input name="startDate" class="datepicker" id="startDate" type="text" placeholder="시작일" data-dateformat="yymmdd" value="20181001">
							</label>
						</div>
						<div class="smart-form form-group">
							<label class="input"> <i class="icon-append fa fa-calendar"></i>
								<input name="endDate" class="datepicker" id="endDate" type="text" placeholder="종료일" data-dateformat="yymmdd" value="20181031">
							</label>
						</div>
						 -->
						<button type="submit" class="btn btn-primary btn-sm">
							<i class="glyphicon glyphicon-search"></i> 검색
						</button>
                        <div class="form-group" id="div_mach_cd">
                            <i class="fa fa-chevron-right padding-5"></i><span>회원수 :&nbsp;200명</span>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm pull-right" id="memberRegBtn" data-toggle="modal" data-target="#memberRegModal" data-mode="4243" data-title="회원정보 등록" data-code="8">
                            <i class="glyphicon glyphicon-plus"></i> 등록
                        </button>
					</fieldset>
				</form>
			</div>
		</div>

		<!-- widget grid -->
		<section id="widget-grid" class="">

			<!-- row -->
			<div class="row">

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false">
						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->
						<header>
							<span class="widget-icon"> <i class="fa fa-user"></i> </span>
							<h2>회원정보</h2>
		
						</header>
				
								<!-- widget div-->
								<div>
                                    <!-- widget edit box -->
							        <div class="jarviswidget-editbox">
                                    <!-- This area used as dropdown edit box -->
            
                                </div>
                                <!-- end widget edit box -->
            
    
									<!-- widget content -->
									<div class="widget-body no-padding">
				
										<table id="datatable_tabletools" class="table table-striped table-bordered table-hover" width="100%">
											<thead>
												<tr>
													<th data-hide="phone">NO</th>
													<th data-class="expand">구분</th>
													<th>아이디</th>
													<th data-hide="phone">회원명</th>
													<th data-hide="phone,tablet">생년월일</th>
													<th data-hide="phone,tablet">전화번호</th>
													<th data-hide="phone,tablet">휴대폰</th>
													<th data-hide="phone,tablet">주소</th>
													<th data-hide="phone,tablet">가입일</th>						
                                                    <th data-hide="phone,tablet">상태</th>
													<th data-hide="phone,tablet">수정</th>
                                                </tr>
											</thead>
											<tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="label label-red">관리자</a></td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="label label-gray">&nbsp;&nbsp;일반&nbsp;&nbsp;</a></td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td style="color:red">탈퇴</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><span class="label label-blue">&nbsp;&nbsp;직원&nbsp;&nbsp;</a></td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td><span class="label label-green">지사장</a></td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>일반</td>
                                                    <td>aaa</td>
                                                    <td>오순자</td>
                                                    <td>2000.10.04</td>
                                                    <td>031.5500.3239</td>
                                                    <td>010.5500.3239</td>
                                                    <td>서울 구로구 신도림로 87</td>
													<td>2000.10.04</td>
                                                    <td>가입</td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="memberModiBtn" data-title="회원정보 수정" data-mode="edit" data-code="" data-toggle="modal" data-target="#memberRegModal">수정</span></a></td>
                                                </tr>
											</tbody>
										</table>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				

				</article>
				<!-- WIDGET END -->

			</div>

			<!-- end row -->

			<!-- end row -->

		</section>
		<!-- end widget grid -->


	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- modal 등록/수정 -->
<div class="modal fade" id="memberRegModal" tabindex="-1" role="dialog" aria-labelledby="memberRegModalLabel" aria-hidden="true">
	
</div><!-- /.modal 등록/수정-->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php // include page footer
include ("../../inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php //include required scripts
include ("../../inc/scripts.php");
?>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.colVis.min.js"></script>
<!-- <script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.tableTools.min.js"></script> -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<!-- 다음 우편번호 -->
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function() {
	
	//공통펑션
    runAllForms();	
	
	//데이터테이블
	/* // DOM Position key index //

	l - Length changing (dropdown)
	f - Filtering input (search)
	t - The Table! (datatable)
	i - Information (records)
	p - Pagination (paging)
	r - pRocessing
	< and > - div elements
	<"#id" and > - div with an id
	<"class" and > - div with a class
	<"#id.class" and > - div with an id and class

	Also see: http://legacy.datatables.net/usage/features
	*/

	/* BASIC ;*/
		var responsiveHelper_dt_basic = undefined;
		var responsiveHelper_datatable_fixed_column = undefined;
		var responsiveHelper_datatable_col_reorder = undefined;
		var responsiveHelper_datatable_tabletools = undefined;

		var breakpointDefinition = {
			tablet : 1024,
			phone : 480
		};

	/* END BASIC */

	/* TABLETOOLS */
	$('#datatable_tabletools').dataTable({

		// Tabletools options:
		//   https://datatables.net/extensions/tabletools/button_options
		"sDom":  "<'dt-toolbar'r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",

		"oLanguage": {
				// "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>',
				"sInfo" : "_START_ ~ _END_  / 전체 : _TOTAL_개",
				"oPaginate" : {
					"sNext" : "다음",
					"sPrevious" : "이전"
						}
				},		
		        
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
                

	});

	/* END TABLETOOLS */

    var runMain = {
        init : function(){
            this.beforeBind();
            this.bind();
        },
        // 페이지 초기화시 화면 구성 함수
        beforeBind : function(){
            //페이지 초기화시
        },
        // 페이지 초기화 시 이벤트 바인딩 함수
        bind : function(){
            // 회원정보 등록신청
            $("body").on("click","#memberRegBtn,.memberModiBtn",function(e){
                var modalTitle = $(this).attr("data-title"); //모달팝 제목
				var modalObjName = $(this).attr("data-target").replace("#",""); //모달팝 오브젝트명
				var mode = $(this).attr("data-mode");
                var code = $(this).attr("data-code");
                console.log("modalTitle=",modalTitle);
   			    console.log("modalObjName=",modalObjName);
				console.log("mode=",mode);
   			    console.log("code=",code);
                runMain.fn.memberRegIssue(modalObjName,modalTitle,mode,code);
            });
			
			// 달력
			$("body").on("click", "#birthDate", function(e) {
				//console.log('달력');
				$(this).removeClass("hasDatepicker").datepicker({
					dateFormat: 'yymmdd',
					prevText: '<i class="fa fa-chevron-left"></i>',
                    nextText: '<i class="fa fa-chevron-right"></i>',
                    changeMonth : true,
                    changeYear : true,
                    yearRange:"1950:2018",
                    monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                    showButtonPanel: true
				});
			});

            // 우편번호
			$("body").on("click", "#daumPost", function(e) {
				console.log('우편번호');
				execDaumPostcode();
			});

		},
        // 페이지 사용자 함수
        fn : {
            // 회원정보 등록/수정
			 memberRegIssue : function(modalObjName, modalTitle, mode, code){
                var ajaxUrl="/ajax/member/ajax-member-reg.php";

                $.ajax({
                    url: ajaxUrl,
                    type: "POST",
                    data: {"mode":mode,"code":code},
                    dataType: "HTML",
                    timeout: 30000,
                    cache: false,
                    success: function(Data){
                        //console.log(Data);return false;
                        $("#"+modalObjName).html(""); //타겟 코드 초기화
                        $("#"+modalObjName).html(Data); //타겟 소스 input
						$("#"+modalObjName+"Label").text(modalTitle); // 팝업 타이틀 Set

                        // 아이디중복검사
                        $("#ovlpChk").click(function() {
                            console.log('data ajax로 유효성 체크');
                        });
                        
                        //$("#smart-form-register").submit();
                        $.validator.addMethod(
                            'mobilephone', function (value, element) {
                                return (value.substring(0, 1) == 0) ? true : false;
                            }, '휴대전화 번호는 0 으로 시작하여야 합니다.'
                        );
                        
                        $.validator.addMethod(
                            'user_idcheck', function (value, element) {
                                return this.optional(element) || /^.*(?=.*\d)(?=.*[a-zA-Z]).*$/.test(value);
                            }, 
                        );

                        // Validation
                        $("#smart-form-register").validate({

                            // Rules for form validation
                            rules : {
                                user_jobgrd : {
                                    required : true
                                },
                                user_id : {
                                    required : true,
                                    minlength : 6,
                                    user_idcheck : true    
                                },
                                user_pwd : {
                                    required : true,
                                    minlength : 6,
                                    user_idcheck : true
                                },
                                userPwChk : {
                                    required : true,
                                    minlength : 6,
                                    equalTo : "name[user_pwd]"
                                },
                                user_name : {
                                    required : true
                                },
                                user_birth_dt : {
                                    required : true
                                },
                                user_mobile : {
                                    required : true,
                                    minlength : 10,
                                    mobilephone : true
                                },
                                user_jonn_St : {
                                    required : true
                                }
                            },

                            // Messages for form validation
                            messages : {
                                user_jobgrd : {
                                    required : '회원구분을 선택해주세요.'
                                },
                                user_id : {
                                    required : '아이디를 반드시 입력해주세요.',
                                    user_idcheck : '영문자, 숫자 조합을 입력해야합니다.'
                                },
                                user_pwd : {
                                    required : '비밀번호를 반드시 입력해주세요.',
                                    user_idcheck : '영문자, 숫자 조합을 입력해야합니다.'
                                },
                                userPwChk : {
                                    required : '입력한 비밀번호를 다시 확인해주세요.'   
                                },
                                user_name : {
                                    required : '이름을 반드시 입력해주세요.'   
                                },
                                user_birth_dt : {
                                    required : '생년월일을 반드시 입력해주세요.',
                                    number: true  
                                },
                                user_mobile : {
                                    required : '휴대번호를 입력해주세요.'
                                },
                                user_jonn_St : {
                                    required : true
                                }
                            },

                            // Ajax form submition
                            submitHandler : function(form) {
                                $(form).ajaxSubmit({
                                    success : function() {
                                        $("#smart-form-register").addClass('submited');
                                    }
                                });
                            },

                            // Do not change code below
                            errorPlacement : function(error, element) {
                                error.insertAfter(element.after());
                            }

                        });

                        $('#i-agree').on('click',function(event){
                            $('#smart-form-register').submit();
                        });
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown){
                        alert('Error : ' + errorThrown);
                    }
                });
            }
        } 
    }
	runMain.init();
});

</script>

<?php
//include footer
include ("../../inc/google-analytics.php");
?>