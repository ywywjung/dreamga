<?php

//initilize the page
require_once '../../init.web.php';

/*---------------- PHP Custom Scripts ---------

 YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
 E.G. $page_title = "Custom Title" */

$page_title = "코드관리";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include ("../../inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["code"]["sub"]["code-list"]["active"] = true;
include ("../../inc/nav.php");
?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["코드관리"] = "";
		include("../../inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-desktop fa-fw "></i>
						코드관리
					<span>>
						&nbsp;코드관리
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
								<option value="all">코드 전체</option>
								<option value="K002" >상위코드</option>
							</select>
                        </div>
                        <div class="form-group" id="div_mach_cd">
							<select name="s_mach_cd" class="smart-form form-control input-sm">
								<option value="all">사용여부</option>
								<option value="K002" >사용</option>
								<option value="K001" >미사용</option>
							</select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="glyphicon glyphicon-search"></i> 검색
                        </button>
                        &nbsp;
                        &nbsp;
                    <!-- input box -->
                        <div class="form-group" id="div_mach_cd">
                            <input type="text" placeholder="순번" class="smart-form form-control input-sm" size="5">
                            <input type="text" placeholder="상위코드" class="smart-form form-control input-sm" size="10">
                            <input type="text" placeholder="코드" class="smart-form form-control input-sm" size="15">
                            <input type="text" placeholder="코드명" class="smart-form form-control input-sm" size="15">
                            <input type="text" placeholder="설명" class="smart-form form-control input-sm" size="25">
                        </div>
                        <button type="submit" class="btn btn-danger btn-sm pull-right">
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
							<span class="widget-icon"> <i class="fa fa-desktop"></i> </span>
							<h2>코드관리</h2>
		
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
                                            <th>상위코드</th>
                                            <th>코드</th>
                                            <th data-hide="phone">코드명</th>
                                            <th data-hide="phone,tablet">설명</th>
                                            <th data-hide="phone,tablet">등록일</th>
                                            <th data-hide="phone,tablet">사용여부</th>
                                            <th data-hide="phone,tablet">정렬</th>
                                            <th data-hide="phone,tablet">관리</th>						
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>지사구분</td>
                                            <td>BRAN</td>
                                            <td>UNIT</td>
                                            <td>지사</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td style="color:red">미사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>지사구분</td>
                                            <td>BRAN</td>
                                            <td>MAIN</td>
                                            <td>본사</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td style="color:red">미사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>KKYN</td>
                                            <td>경기</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>지역</td>
                                            <td>AREA</td>
                                            <td>CHUN</td>
                                            <td>충청</td>
                                            <td>........</td>
                                            <td>2011.02.13</td>
                                            <td>사용</td>
                                            <td>2</td>
                                            <td><a class="btn btn-primary btn-xs" href="javascript:void(0);">수정</a></td>
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

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

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
		"sDom":  "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",

		"oLanguage": {
				"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>',
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
})

</script>

<?php
//include footer
include ("../../inc/google-analytics.php");
?>