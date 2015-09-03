<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="fragment" content="!">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">
        <link href="/favicon.ico" rel="shortcut icon">
        <link href="./public/css/bootstrap.css" rel="stylesheet">
        <link href="./public/css/style.css" rel="stylesheet">
        <title>Devmas - Blog</title>
    </head>
    <body>
    <div id="header">
    	<div id="nav_top" class="navbar affix">
		  <div class="navbar-inner">
		    <a class="brand" href="/blog/main/"><img src="./public/img/brand.png" id="brand_img" alt="brand"></a>
		    <ul class="nav" id="top_nav">
		      <li <? if($_SERVER['REQUEST_URI'] == '/blog/main/') { ?> class="active"<? } ?>><a href="/blog/main/">소개</a></li>
		      <li <? if($_SERVER['REQUEST_URI'] == '/blog/main/blog') { ?> class="active"<? } ?>><a href="/blog/main/blog">블로그</a></li>
              <li <? if($_SERVER['REQUEST_URI'] == '/blog/main/visitor') { ?> class="active"<? } ?>><a href="/blog/main/visitor">방명록</a></li>
		    </ul>
            <form action="auth" method="post">
                <? //if($_SESSION['id'] === null) { ?>
                    <div class="auth_wrapper">
                        <div class="auth_id" name="auth_id">
                            <input class="auth_set_id" type="text" placeholder="아이디" name="id">
                        </div>
                        <div class="auth_password" name="auth_password">
                            <input class="auth_set_password" type="password" placeholder="패스워드" name="password">
                        </div>
                        <button class="submit_auth btn btn-info" type="submit" name="submit_auth">로그인</button>
                    </div>
                <? //} else { ?>
                    <div class="auth_wrapper">
                        <div class="logout">
                        </div>
                    </div>
                <? //} ?>
            </form>
		  </div>
		</div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span3">
            <div id="profile" class="affix">
                <img src="./public/img/profile.png" class="img-circle" id="profile_img" alt="profile">
                <p>
                    <br>
                    <center>
                        <strong><i class="icon-user"></i> 최현섭(Devmas)</strong>
                        <br>
                        하려고 하면 방법이 생긴다.
                        <br>
                    </center>
                </p>
                <div class="today_show">
                    <div class="today">
                        <div class="today_title">Today</div>
                        <div class="today_num">1</div>
                    </div>
                    <div class="total">
                        <div class="total_title">Total</div>
                        <div class="total_num">2</div>
                    </div>
                </div>
<!-- START CONTENT -->