<?php

// if (!session_id()) session_start();

require_once 'init.php';

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
    "메인" => APP_URL."php/reserve/reservcal-list.php"
);

/*navigation array config

ex:
"dashboard" => array(
    "title" => "Display Title",
    "url" => "http://yoururl.com",
    "url_target" => "_self",
    "icon" => "fa-home",
    "label_htm" => "<span>Add your custom label/badge html here</span>",
    "sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
    "member" => array(
        "title" => "회원관리",
        "icon" => "fa-user",
        "sub" => array(
            "member-list" => array(
                "title" => "회원정보",
                "url" => APP_URL."/php/member/member-list.php"
            ),
            "customer-list" => array(
                "title" => "고객정보",
                "url" => APP_URL."/php/member/customer-list.php"
            )
        )
    ),
	 "branch" => array(
        "title" => "지사관리",
        "icon" => "fa-institution",
        "sub" => array(
            "branch-list" => array(
                "title" => "지사정보",
                "url" => APP_URL."/php/branch/branch-list.php"
            ),
            "freelancer-list" => array(
                "title" => "관리사정보",
                "url" => APP_URL."/php/branch/freelancer-list.php"
            )
        )
    ),
	 "reserve" => array(
        "title" => "예약관리",
        "icon" => "fa-calendar",
        "sub" => array(
            "reserv-list" => array(
                "title" => "예약정보",
                "url" => APP_URL."/php/reserve/reserv-list.php"
            ),
			 "reservcal-list" => array(
                "title" => "예약일정표",
                "url" => APP_URL."/php/reserve/reservcal-list.php"
            )
        )
    ),
	 "account" => array(
        "title" => "정산관리",
        "icon" => "fa-database",
        "sub" => array(
            "account-list" => array(
                "title" => "정산관리",
                "url" => APP_URL."/php/account/account-list.php"
            )
        )
    ),
	//  "board" => array(
    //     "title" => "게시판관리",
    //     "icon" => "fa-pencil-square-o",
    //     "sub" => array(
    //         "board_notice" => array(
    //             "title" => "공지사항",
    //             "url" => APP_URL."/board_notice.php"
    //         ),
    //         "board_qna" => array(
    //             "title" => "질문과답변",
    //             "url" => APP_URL."/board_qna.php"
    //         ),
    //         "board_after" => array(
    //             "title" => "이용후기",
    //             "url" => APP_URL."/board_after.php"
    //         ),
	// 		"board_dreamga" => array(
    //             "title" => "드림가현장",
    //             "url" => APP_URL."/board_dreamga.php"
    //         )
    //     )
    // ),
	 "code" => array(
        "title" => "코드관리",
        "icon" => "fa-desktop",
        "sub" => array(
            "code-list" => array(
                "title" => "코드관리",
                "url" => APP_URL."/php/code/code-list.php"
            ),
            "popup-list" => array(
                "title" => "팝업관리",
                "url" => APP_URL."/php/code/popup-list.php"
            )
        )
    )

);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array("class"=>"smart-style-3"); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>