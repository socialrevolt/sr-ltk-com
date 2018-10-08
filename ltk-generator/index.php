<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0050)https://tools.nastygoat.com/blogger/ltk_newsletter -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head><body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0"><div class="header-container">
    
    <title>LTK.com API Generator</title>

<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" type="image/png" href="https://tools.nastygoat.com/images/favicon.ico">
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/bootstrapv2.3.2.min.css">
<link href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/font-awesome.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/tools.css" rel="stylesheet" type="text/css">
<link type="text/css" href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/jquery-ui-1.8.18.custom.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/fileinput.min.css" rel="stylesheet" media="all" type="text/css">
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/tools.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/bootstrap-dropdown.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/bootstrap-modal.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/bootstrap-tab.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/bootstrap-typeahead.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/sorttable.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >

<script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/fileinput.min.js"></script>
    <script>
        var token = 'adeb1325f493c0059b2f574da5fc99cf';
        var username = 'Jason';
    </script>
</div>


<div id="alert-area"></div>
    
    <style type="text/css">
        #outlook a {
            padding: 0;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        body {
            margin: 0;
            padding: 0;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body,
        #bodyTable,
        #bodyCell {
            height: 100% !important;
            margin: 0;
            padding: 0;
            width: 100% !important;
        }

        #outerContainer {
            /*max-width: 732px;*/
            /*width: 732px;*/
        }

        body,
        #bodyTable {
            background-color: #FFFFFF;
            color: black;
        }

        h2 {
            color: #888888 !important;
            display: block;
            font-family: Didot, "Palatino Linotype", Palatino, "Book Antigua", serif;
            font-size: 19px;
            font-style: italic;
            font-weight: normal;
            line-height: 120%;
            margin: 0;
            text-align: center;
        }

        h3 {
            color: #000000 !important;
            display: block;
            font-family: Gotham, "Gill Sans", sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: normal;
            line-height: 100%;
            letter-spacing: normal;
            margin-top: 35px;
            margin-right: 0;
            margin-bottom: 35px;
            margin-left: 0;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        a.blog_link {
            text-decoration: none !important;
            color: #000000 !important;
            display: block;
            font-family: Gotham, "Gill Sans", sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: normal;
            line-height: 100%;
            letter-spacing: normal;
            margin-top: 35px;
            margin-right: 0;
            margin-bottom: 35px;
            margin-left: 0;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        #invisPreheader {
            background-color: #FFFFFF;
            display: none;
        }

        #invisContent {
            color: #ffffff;
            font-family: Helvetica;
            font-size: 10px;
            line-height: 125%;
            text-align: left;
        }

        #invisContent a:link,
        #invisContent a:visited,
        #invisContent a .yshortcuts {
            color: #606060;
            font-weight: normal;
            text-decoration: underline;
        }

        #header {
            border-bottom: 4px solid #000000;
        }

        #templateHeader {
            background-color: #F4F4F4;
            border-top: 1px solid #FFFFFF;
            border-bottom: 1px solid #CCCCCC;
        }

        .headerContent {
            color: #505050;
            font-family: Helvetica;
            font-size: 20px;
            font-weight: bold;
            line-height: 100%;
            padding: 0;
            text-align: left;
            vertical-align: middle;
        }
        .gallery {
            text-align: center;
        }

        .headerContent a:link,
        .headerContent a:visited,
        .headerContent a .yshortcuts {
            color: #EB4102;
            font-weight: normal;
            text-decoration: underline;
        }

        #headerImage {
            /*height: auto;*/
            /*max-width: 732px;*/
        }

        #blackLabel {
            background-color: #000000;
            color: #FFFFFF;
            font-weight: normal;
            letter-spacing: 1px;
            font-family: Gotham, "Gill Sans", sans-serif;
            text-transform: uppercase;
        }

        #templateIntro {
            border-bottom: 1px solid #E4E4E4;
        }

        .bodyContent {
            color: #505050;
            font-family: sans-serif;
            font-size: 16px;
            line-height: 150%;
            padding-top: 35px;
            padding-right: 0px;
            padding-bottom: 35px;
            padding-left: 0px;
        }

        .bodyContent h2 {
            width: 80%;
            margin-left: 10%;
        }

        .bodyContent a:link,
        .bodyContent a:visited,
        .bodyContent a .yshortcuts {
            color: #EB4102;
            font-weight: normal;
            text-decoration: underline;
        }

        .bodyContent img {
            display: inline;
            height: auto;
            max-width: 560px;
        }

        .tripleColumnEven {
            width: 33%;
        }

        .tripleColumnContainer {
            width: 224px;
        }

        .doubleColumnContainer {
            width: 260px;
        }

        .tripleColumns .products_3 {}

        .tripleColumns .products_4 {}

        .doubleColumns .products_3 {}

        .doubleColumns .products_4 {}

        .products_3.products_6 {}

        .products_3.products_8 {}

        td.prod,
        td.prodx {
            text-align: center;
            padding-top: 6px;
        }

        .wide_3 tr.products_3 td.prod.product_1,
        .wide_3 tr.products_3 td.prod.product_3 {
            padding: 6px 0px 0px 0px;
            width: 70px;
            height: 70px;
            text-align: center;
            display: table-cell;
        }

        .wide_3 tr.products_3 .prod.product_2 {
            padding: 6px 7px 0px 7px;
            width: 70px;
            height: 70px;
            text-align: center;
            display: table-cell;
        }

        .wide_3 tr.products_3 .prod.product_4 {
            display: none;
            padding: 6px 0px 0px 0px;
        }

        .wide_2 tr.products_3 td.prod.product_1,
        .wide_2 tr.products_3 td.prod.product_3 {
            padding: 6px 0px 0px 0px;
            width: 113px;
            height: 113px;
            text-align: center;
            display: table-cell;
        }

        html body .thumbstrip {
      margin-top: 16px; }
    html body .hero {
      max-width: 50%;
      margin: 0 auto; }

        .wide_2 tr.products_3 .prod.product_2 {
            padding: 6px 6px 0px 6px;
            width: 113px;
            height: 113px;
            text-align: center;
            display: table-cell;
        }

        .wide_2 tr.products_3 .prod.product_4 {
            display: none;
            padding: 6px 0px 0px 0px;
        }

        .wide_3 tr.products_4 .prod {
            padding: 6px 5px 0px 0px;
            width: 52px;
            height: 52px;
            text-align: center;
        }

        .wide_3 tr.products_4 .prod.product_4 {
            padding: 6px 0px 0px 0px;
        }

        .wide_2 tr.products_4 .prod {
            padding: 6px 5px 0px 0px;
            width: 84px;
            height: 84px;
            text-align: center;
        }

        .wide_2 tr.products_4 .prod.product_4 {
            padding: 6px 0px 0px 0px;
        }

        .left_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            text-align: left;
        }

        .left_fit_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            text-align: left;
        }

        .left_2 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            text-align: left;
        }

        .left_3 a:link,
        .left_3 a:visited,
        .left_3 a .yshortcuts,
        .left_2 a:link,
        .left_2 a:visited,
        .left_2 a .yshortcuts {
            color: #000000;
            font-weight: normal;
            text-decoration: none;
        }

        .center_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            text-align: center;
        }

        .center_fit_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            text-align: center;
        }

        .center_3 a:link,
        .center_3 a:visited,
        .center_3 a .yshortcuts {
            color: #000000;
            font-weight: normal;
            text-decoration: none;
        }

        .right_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            text-align: right;
        }

        .right_fit_3 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            text-align: right;
        }

        .right_2 {
            color: #505050;
            font-family: Helvetica;
            font-size: 14px;
            line-height: 150%;
            padding-top: 0;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            text-align: right;
        }

        .right_3 a:link,
        .right_3 a:visited,
        .right_3 a .yshortcuts,
        .right_2 a:link,
        .right_2 a:visited,
        .right_2 a .yshortcuts {
            color: #000000;
            font-weight: normal;
            text-decoration: none;
        }

        .left_3 img,
        .right_3 img {
            display: inline;
            height: auto;
            max-width: 260px;
        }

        .left_2 img,
        .right_2 img {
            display: inline;
            height: auto;
            max-width: 260px;
        }

        #row_2,
        #row_3 {
            /*border-top: 1px solid #E4E4E4;*/
            padding-top: 35px;
            margin-top: 35px;
        }

        .gram.wide_2,
        .gram.wide_2 .columnImage {
            width: 351px;
        }

        .gram.wide_3,
        .gram.wide_3 .columnImage {
            width: 224px;
        }

        .gram.wide_3.col_1 {
            /*padding-right: 30px;*/
        }

        .gram.wide_3.col_2 {
            padding-right: 0px;
            padding-left: 0px;
        }

        .gram.wide_3.col_3 {
            padding-left: 30px;
        }

        .gram.wide_2.col_1 {
            padding-right: 30px;
        }

        .gram.wide_2.col_2 {
            padding-left: 0px;
        }

        .full_column {
            text-align: center !important;
        }

        img.prods {
            height: auto !important;
        }

        .wide_3 .products_4 img.prods {
            width: 52px;
        }

        .wide_3 .products_3 img.prods {
            width: 70px;
        }

        .wide_2 .products_4 img.prods {
            width: 84px;
        }

        .wide_2 .products_3 img.prods {
            width: 113px;
        }

        a.cta {
            margin-top: 12px;
            width: 96%;
            margin-left: 2%;
            display: block;
            height: 42px;
            line-height: 42px;
            font-family: Didot, "Palatino Linotype", Palatino, serif;
            text-align: center;
            border: 1px solid #000000;
            font-size: 13px;
            background-color: #FFFFFF;
            color: #000000;
            font-style: italic;
            text-decoration: none;
        }

        #templateFooter {
            border-top: 4px solid #000000;
            margin-top: 45px;
            padding-bottom: 45px;
        }

        .footerContent,
        .footerContent2 {
            color: #999999;
            font-family: Gotham, "Gill Sans", sans-serif;
            font-size: 13px;
            line-height: 200%;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 20px;
            padding-left: 0px;
            text-align: center;
        }

        .footerContent2 {
            font-size: 12px;
            padding-top: 5px;
            padding-bottom: 5px;
            line-height: 125%;
        }

        .footerIcon {
            text-align: center;
            padding: 35px 0px 32px 0px;
        }

        #last_content {
            padding-bottom: 30px;
        }

        .footerContent2 a,
        .footerContent a,
        .footerContent a,
        .footerContent a .yshortcuts,
        .footerContent a span {
            color: #999999 !important;
            font-family: Gotham, "Gill Sans", sans-serif;
            font-weight: normal;
            text-decoration: underline;
        }

        #adUnit {
            border-top: 1px solid #E4E4E4;
            padding-top: 35px;
            margin-top: 35px;
        }

        #adContent {
            display: block;
            text-align: center;
        }

        #leaderboard_ad {
            margin-top: 35px;
        }

        #mobile_box,
        img#mobile_ad {
            display: none;
            overflow: hidden;
            width: 0px;
            height: 0px;
            line-height: 0px;
        }

        html body {
            padding-bottom: 200px;
        }

    html body .author-meta img {
      max-width: 60px;
      height: 60px;
      display: inline-block;
      border-radius: 50%;
      margin-right: 8px; }
    html body .author-meta h2 {
      display: inline-block; }

        @media only screen and (max-width: 480px) {
            body,
            table,
            td,
            p,
            a,
            li,
            blockquote {
                -webkit-text-size-adjust: none !important;
            }
            body {
                width: 100% !important;
                min-width: 100% !important;
            }
            #bodyCell {
                padding: 0px !important;
            }
            #outerContainer {
                /*max-width: 732px !important;*/
                /*width: 100% !important;*/
            }
            h2 {
                font-size: 16px !important;
                line-height: 115% !important;
            }
            h3 {
                font-size: 14px !important;
                line-height: 100% !important;
                margin-top: 30px !important;
                margin-bottom: 30px !important;
            }
            #envelope,
            #myLikes {
                display: none !important;
            }
            #logo {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }
            #logo img {
                width: 85% !important;
                height: auto !important;
            }
            .gram,
            .gram_box,
            .gram_box tbody {
                width: 100% !important;
                max-width: 320px !important;
                display: block;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .blacklabel .tripleColumnEven.right,
            .blacklabel .tripleColumnEven.left {
                width: 18% !important;
            }
            .blacklabel .tripleColumnEven.center {
                width: 64% !important;
            }
            #templateIntro,
            #adUnit,
            #templateFooter,
            .tripleColumns {
                width: 100% !important;
            }
            #bodyContent {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
                width: 90% !important;
                margin-left: 5% !important;
            }
            a.cta {
                width: 90% !important;
                margin-left: 5% !important;
            }
            .gram.no_cta {
                border-bottom: 1px solid #E4E4E4 !important;
                padding-bottom: 30px !important;
            }
            img.prods {
                max-width: 70px;
                max-height: 70px;
            }
            tr.product_row {
                display: table !important;
                width: 100% !important;
            }
            .gram tr {
                display: table !important;
                width: 100% !important;
            }
            tr.products_3 td.prodx {
                width: 33% !important;
                display: table-cell;
            }
            tr.products_4 td.prodx {
                width: 25% !important;
                display: table-cell;
            }
            #row_2,
            #row_3 {
                border-top: none !important;
                margin-top: 0px !important;
            }
            #mobile_box,
            img#mobile_ad {
                display: block !important;
                overflow: visible !important;
                width: auto !important;
                height: auto !important;
                line-height: 100% !important;
            }
            img#mobile_ad,
            img#desktop_ad {
                margin: 0 auto !important;
            }
            #leaderboard_box {
                display: none !important;
            }
            #invisPreheader {
                display: none !important;
            }
            #headerImage {
                /*height: auto !important;*/
                /*max-width: 732px !important;*/
                /*width: 100% !important;*/
            }
            .headerContent {
                font-size: 20px !important;
                line-height: 125% !important;
            }
            .bodyContent {
                font-size: 18px !important;
                line-height: 125% !important;
            }
            .tripleColumnContainer,
            .gram {
                display: block !important;
                width: 100% !important;
            }
            .columnImage {
                height: auto !important;
                max-width: 320px !important;
                width: 100% !important;
                margin-bottom: 0px;
                text-align: center;
            }
            .left_3,
            .left_2 {
                font-size: 16px !important;
                line-height: 125% !important;
            }
            .center_3 {
                font-size: 16px !important;
                line-height: 125% !important;
            }
            .right_3,
            .right_2 {
                font-size: 16px !important;
                line-height: 125% !important;
            }
            .footerContent {
                font-size: 14px !important;
                line-height: 115% !important;
            }
            .footerContent a {
                display: block !important;
            }
        }
    </style>
    <!-- <link name="admin_script" rel="stylesheet" type="text/css" media="all" href="http://ourownmaking.webfactional.com/style.css" /> -->
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/style.css">

    <!-- <script name="admin_script" src="/ltk-newsletter-content/jquery.min.js"></script> -->
    <script src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/jquery.min(1).js"></script>




    <div class="admin" id="top_admin">
        <div class="start stretch">START →</div>
        <!-- <div id="save" class="save">SAVE</div> -->
        <!-- <div id="finish" class="finish stretch">BUILD</div> -->
        <div id="export" class="finish stretch">BUILD</div>

        <!-- <div class="drafts"><a target="_blank" href="http://ourownmaking.webfactional.com/drafts">DRAFTS</a></div> -->
<!--         ROWS
        <div class="select-style large">
            <select id="layout">
                <option value="3">3x3x3</option>
                <option value="2">3x2x3</option>
            </select>
        </div>
        PRODUCTS
        <div class="select-style">
            <select id="count">
                <option value="8">8</option>
                <option value="6">6</option>
                <option value="4">4</option>
                <option value="3">3</option>
            </select>
        </div> -->
        <!-- CTA's
        <div class="select-style">
            <select id="ctas">
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
        </div>
        NAMES
        <div class="select-style">
            <select id="blog_names">
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
        </div>
        AD
        <div class="select-style">
            <select id="ads">
                <option value="false">No</option>
                <option value="true">Yes</option>
            </select>
        </div>
        TYPE
        <div class="select-style large" style="margin-right:1px;">
            <select id="newsletter_type">
                <option value="Normal">Regular</option>
                <option value="GS">Google</option>
            </select>
        </div> -->
        <div style="display:none;" id="ad_edit"></div>
    </div>
    <div id="email_content" width="100%" style="width: 100% !important;">
        <!--[if mso]><center><table width="732" border="0" align="center" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
            <div class="row top-xs center-xs">
                <div class="col-xs-12 col-md-3">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="224" id="bodyTable">
                        <tbody>
                            <tr>
                                <td align="center" valign="top" id="bodyCell" width="224">
                                    <table border="0" cellpadding="0" cellspacing="0" id="outerContainer">
                                        <tbody>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="0" id="invisPreheader">
                                                        <tbody><tr>
                                                            <td valign="top" id="invisContent" style="font-size:1px; color:#fff;">Shop from LikeToKnow.It's most popular bloggers</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="224" class="tripleColumns" id="row_2">
                                                        <tbody><tr align="center">
                                                            <td width="224" align="center" valign="top" class="undone gram wide_3 col_1">
                                                                <table class="gram_box" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                    <tbody><tr class="full_column blog_name">
                                                                        <td valign="middle" class="full_column">
                                                                            <a class="blog_link" href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/ltk_newsletter"><h3 contenteditable="true">BLOGGER NAME</h3></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="full_column">
                                                                        <td class="full_column">
                                                                            <!-- <a class="gram_link" href="#"><img width="224" height="224" src="http://ourownmaking.webfactional.com/gram.png" style="max-width:100%; width:224px;" class="columnImage" /></a> -->
                                                                            <a class="gram_link" href="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/ltk_newsletter"><img src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/gram.png" style="max-width:224px; width:224px;" class="columnImage"></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="full_column product_row">
                                                                        <td class="full_column">
                                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                                <tbody><tr class="full_column products_4 product_row">
                                                                                    <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"></td>
                                                                                </tr>
                                                                                <tr class="full_column products_4 product_row showing">
                                                                                    <td valign="top" class="prod product_1" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_2" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_3" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"> </td>
                                                                                    <td valign="top" class="prod product_4" width="52" height="52"> <img class="prods" height="52" width="52" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/white.png" style="height:auto; max-width:52px; max-height:52px;"></td>
                                                                                </tr>
                                                                            </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="full_column">
                                                                        <td valign="top" class="full_column">
                                                                            <!-- <a href="./LTK Scraper_files/ltk_newsletter" class="cta" contenteditable="true">SHOP THE LOOK</a> -->
                                                                        </td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="ltk-filmstrip">
                        <div class="row start-xs">
                            <div class="col-xs-12 col-md-8 export">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="box">
                                            <div class="author-meta">

                                            </div>
                                            <div class="gallery">
                                                <input type="hidden" class="hash" value="">
                                                <img class="hero" src="http://placehold.it/650x400" style="width: 50%;">
                                                <div class="row thumbstrip">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--[if mso]></td></tr></table></center><![endif]-->
    </div>

    <div class="code">
        <textarea id="code"></textarea>
    </div>
    <div class="admin" id="admin_content">
        <div id="reset"></div>
        <div id="close"></div>
        <div id="returned" style="display:none;"></div>
        <div id="product_container"></div>
        <div id="form">
            <input type="text" name="url" placeholder="Enter The URL (Ex: https://www.liketoknow.it/ltk/19Ryw)" class="ss-q-short no_focus" id="url" dir="auto">
            <div id="close_form">↓</div>
            <div id="submit">SUBMIT</div>
        </div>
    </div>
    <div class="admin" id="ad_admin" style="display:none;">
    <div class="ltk-newsletter-close" id="ad_close"></div>
        <h3>AD SETTINGS</h3>
        <input type="text" name="leaderboard" placeholder="Leaderboard Image URL (Ex: http://rstyle.com/728x90.jpg)" class="ss-q-short no_focus" id="leaderboard" dir="auto">
        <input type="text" name="mobile" placeholder="Mobile Image URL (Ex: http://rstyle.com/300x250.jpg)" class="ss-q-short no_focus" id="mobile" dir="auto">
        <input type="text" name="ad_link" placeholder="Ad Link (Ex: http://rstyle.com/X7rJw)" class="ss-q-short no_focus" id="ad_link" dir="auto">
        <p>
            </p><div id="insert_ads">INSERT ADS</div>
        <p></p>
    </div>
    <div id="build_admin" class="admin" style="display:none;">
        <div class="ltk-newsletter-close"></div>
        <h3>THE CODE</h3>
        <div id="build_dump" style="display:none;"></div>
        <textarea id="build_code" name="build_code">Here it is</textarea>
    </div>
    <!-- <script name="admin_script" src="http://ourownmaking.webfactional.com/scripts3.js"></script> -->
    <script name="admin_script" src="<?php echo bloginfo('template_url'); ?>/ltk-generator/LTK Scraper_files/newsletter_script.js"></script>


    <style type="text/css">
    
    </style>


	<footer>
		<!-- <p style="padding:10px 20px;">Nastygoat, Inc. 2012</p>                                                             -->
	</footer>
</div> <!-- .container -->
                               
</body></html>