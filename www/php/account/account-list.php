<?php

//initilize the page
require_once '../../init.web.php';

/*---------------- PHP Custom Scripts ---------

 YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
 E.G. $page_title = "Custom Title" */

$page_title = "정산관리";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include ("../../inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["account"]["sub"]["account-list"]["active"] = true;
include ("../../inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["정산관리"] = "";
		include("../../inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-database fa-fw "></i>
						정산관리
					<span>>
						&nbsp;정산관리
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
								<option value="all">지사 전체</option>
								<option value="K002" >서울지사</option>
								<option value="K001" >경기지사</option>
								<option value="K001" >강원지사</option>
							  </select>
                        </div>
						<div class="form-group" id="div_mach_cd">
							<select name="s_mach_cd" class="smart-form form-control input-sm">
								<option value="all">서비스 전체</option>
								<option value="K002" >산후조리</option>
								<option value="K001" >베이비시터</option>
								<option value="K001" >출장반찬</option>
								<option value="K001" >기타</option>
							  </select>
                        </div>
                        &nbsp;
                        &nbsp;
                        <!-- 캘린더 -->
                        <div class="smart-form form-group">
                            <span> 기간&nbsp;</span>
                        </div>
                        <div class="smart-form form-group">
                            <label class="input"><i class="icon-append fa fa-calendar"></i>
								<input name="startDate" class="datepicker" id="startDate" type="text" placeholder="시작일" data-dateformat="yy-mm-dd" value="2018-10-01">
							</label>
                        </div>
                        &nbsp; - &nbsp;
						<div class="smart-form form-group">
							<label class="input"> <i class="icon-append fa fa-calendar"></i>
								<input name="endDate" class="datepicker" id="endDate" type="text" placeholder="종료일" data-dateformat="yy-mm-dd" value="2018-10-31">
							</label>
                        </div>
                        <div class="smart-form form-group pull-right">
							<h6>( 단위 : 원단위 )</h6>
                        </div>
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
							<span class="widget-icon"> <i class="fa fa-database"></i> </span>
							<h2>정산관리</h2>
		
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
                                                    <th data-class="expand">지사</th>
													<th>관리사</th>
                                                    <th>건수</th>
													<th data-hide="phone">이용료</th>
													<th data-hide="phone,tablet">기타수당</th>
													<th data-hide="phone,tablet">비용</th>
                                                    <th data-hide="phone,tablet">소개료</th>
													<th data-hide="phone,tablet">정산액</th>
													<th data-hide="phone,tablet">상태</th>						
                                                    <th>관리</th>
                                                </tr>
											</thead>
											<tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-green">&nbsp;&nbsp;정산중&nbsp;&nbsp;</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-red">정산완료</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>양천</td>
                                                    <td>관리사1</td>
                                                    <td>1건</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
                                                    <td>850,000</td>
													<td>850,000</td>
                                                    <td><span class="label label-gray">정산대기</span></td>
                                                    <td><a class="btn btn-primary btn-xs" href="javascript:void(0);"><span class="accountModiBtn" data-title="정산관리" data-mode="edit" data-code="" data-toggle="modal" data-target="#accountRegModal">관리</span></a></td>
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
<div class="modal fade" id="accountRegModal" tabindex="-1" role="dialog" aria-labelledby="accountRegModalLabel" aria-hidden="true">
	
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



<script type="text/javascript">

// DO NOT REMOVE : GLOBAL FUNCTIONS!

$(document).ready(function() {

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
		"sDom":  "<'dt-toolbar'>"+
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
            $("body").on("click",".accountModiBtn",function(e){
                var modalTitle = $(this).attr("data-title"); //모달팝 제목
				var modalObjName = $(this).attr("data-target").replace("#",""); //모달팝 오브젝트명
				var mode = $(this).attr("data-mode");
                var code = $(this).attr("data-code");
                console.log("modalTitle=",modalTitle);
   			    console.log("modalObjName=",modalObjName);
				console.log("mode=",mode);
   			    console.log("code=",code);
                runMain.fn.accountRegIssue(modalObjName,modalTitle,mode,code);
            });
			
		},
        // 페이지 사용자 함수
        fn : {
            // 회원정보 등록/수정
			 accountRegIssue : function(modalObjName, modalTitle, mode, code){
                var ajaxUrl="/ajax/account/ajax-account-reg.php";

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
						
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown){
                        alert('Error : ' + errorThrown);
                    }
                });
            },
           
		} 
    };
	runMain.init();
})

</script>

<?php
//include footer
include ("../../inc/google-analytics.php");
?>