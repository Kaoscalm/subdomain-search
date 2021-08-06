<?php
/**
* Search availability subdomain name Script -
*
* PHP version 7.3
*
* @category   Search check page | PHP Script
* @package    v.1.2
* @author     Alessandro Rinaldi <info@scriptnet.net>
* @copyright  Creative Commons Attribution 4.0 | 2014-2021 ® ScriptNet.net
* @link       https://scriptnet.net
* @license    https://www.php.net/license/3_01.txt  PHP License 3.01
* @version    SVN: $Id$
*/

    $status = null;
    if( isset($_POST['submit']) ) require_once('functions.php');
?>

<!doctype html>

<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>Search availability subdomain name</title>
		
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<meta name="HandheldFriendly" content="true"/> 
<meta name="MobileOptimized" content="320"/> 
<meta name="description" content=""> 
<meta name="keywords" content=""> 
<meta name="robots" content="index, follow"> 
<meta name="language" content="IT-it"> 
<meta name="author" content=""> 
<meta name="copyright" content="">
<meta http-equiv="CACHE-CONTROL" content="CACHE">
<meta http-equiv="PRAGMA" content="CACHE">
<link rel="shortcut icon" href="favicon.ico">

<meta property="og:site_name" content=""> 
<meta property="og:image" content="">

<link rel="schema.DC" href="//purl.org/dc/elements/1.1/">
	<meta name="DC.title" content="Subdomain Check">
	<meta name="DC.identifier" content="YOUR-WEBSITE.ME">
	<meta name="DC.description" content="Subdomain Check">
	<meta name="DC.subject" content="subdomain Check">
	<meta name="DC.language" scheme="ISO639-1" content="it">
	<meta name="DC.creator" content="ScriptNet Solutions">
	<meta name="DC.publisher" content="scriptnet.net">
	<meta name="DC.license" content="">
	<meta name="DC.type" scheme="DCMITYPE" content="//purl.org/dc/dcmitype/Collection">
	<meta name="DC.type" scheme="DCMITYPE" content="//purl.org/dc/dcmitype/Dataset">
	<meta name="DC.type" scheme="DCMITYPE" content="//purl.org/dc/dcmitype/Image">
	<meta name="DC.type" scheme="DCMITYPE" content="//purl.org/dc/dcmitype/Service">
	<meta name="DC.relation" content="">
	<link rel="schema.DCTERMS" href="//purl.org/dc/terms/" />
	<meta name="DCTERMS.created" scheme="ISO8601" content="2016-01-15">
	
<link rel="meta"
	type="application/rdf+xml"
	href=" " />
		
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel='stylesheet' type="text/css" href="css/landing/style.css"/>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' type="text/css" href="js/plugins/dzsscroller/scroller.css"/>
        <link rel='stylesheet' type="text/css" href="js/plugins/dzsparallaxer/dzsparallaxer.css"/>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="mwrap-wrapper">
            <!-- START MENU -->
            <section class="mcon-mainmenu" style="z-index: 5;">
                <div class="container">
                    <div class="row">
                        <div class="logo-con col-md-3">
                            <!-- LOGO IMAGE - YOU MAY WANT TO USE A TRANSPARENT PNG HERE -->
                            <div><a href="index"><img src="" alt="" title=""></a></div>
                        </div>
                        <div class="main-menu-con">
                            <ul class="main-menu">
&nbsp; &nbsp;<i class="fa fa-cc-amex"></i>  <i class="fa fa-cc-mastercard"></i>  <i class="fa fa-cc-visa"></i>  <i class="fa fa-cc-paypal"></i>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>								<div align="center" id="stylized" class="myform">
								<h3><strong>Search a new Name</strong></h3>
<form id="form" name="form" method="post" action="">

<p>Check if your Name is Available: </p>

<input type="hidden" name="submit" value="true" />
<input type="text" name="sub" id="subdomainField" placeholder="Add the Name to" />&nbsp;

   <!-- Add here your 1 level domains --> 
	<select name="domain" id="subdomainExt">
        <option value=".domain1.com" label=".domain1.com">.domain1.com</option>
        <option value=".domain2.net" label=".domain2.net">.domain2.net</option>
		<option value=".domain3.org" label=".domain3.org">.domain3.org</option>
    </select>
	
<div class="spacer"></div>
<h3><?=$status?></h3>
<div class="spacer"></div>
<button type="submit" name="searchDomains" id="searchDomains"><i class="fa fa-search"></i> Check it!</button>
<div class="spacer"></div>
<br>


</form>
</div>