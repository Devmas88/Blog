<?php 
ob_start();
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="fragment" content="!">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
        <link href="/favicon.ico" rel="shortcut icon">
        <link href="../public/css/bootstrap.css" rel="stylesheet">
        <link href="../public/css/style.css" rel="stylesheet">
        <title>Devmas - Blog</title>
    </head>
    <body>
    <?php 
    # count
    $fp = fopen("count.txt", "r");

    $count = fgets($fp, 4096);

    fclose($fp);

    if (!$_COOKIE["ip"]) {
      
      echo $count++;

      $fw = fopen("count.txt", "w");

      fwrite($fw, $count);

      fclose($fw);

      setcookie("ip", $_SERVER["REMOTE_ADDR"], time() + 3600, "/");
    }
     ?>
    <div id="header">
        <div id="layers">
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
          <div class="layer"></div>
        </div>
    	<div id="nav_top" class="navbar">
		  <div>
		    <a class="brand" href="/Blog/main/"><img src="../public/img/brand.png" id="brand_img" alt="brand"></a>
		    <ul class="nav" id="top_nav">
		      <li <? if($_SERVER['REQUEST_URI'] == '/Blog/main/') { ?> class="active"<? } ?>><a href="/Blog/main/">소개</a></li>
		      <li <? if($_SERVER['REQUEST_URI'] == '/Blog/main/blog') { ?> class="active"<? } ?>><a href="/Blog/main/blog">블로그</a></li>
              <li <? if($_SERVER['REQUEST_URI'] == '/Blog/main/visitor') { ?> class="active"<? } ?>><a href="/Blog/main/visitor">방명록</a></li>
              <li <? if($_SERVER['REQUEST_URI'] == '/Blog/main/setting') { ?> class="active"<? } ?>><a href="/Blog/main/setting">설정</a></li>
		    </ul>
		  </div>
		</div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
<!-- START CONTENT -->