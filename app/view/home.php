	<div class="span12">	
		<div id="profile">
		    <center>
				<div id="profile_img">
					<br>
			        <img src="../public/img/profile.png" class="img-circle" alt="profile">
			    </div>
		    </center>
	        <p>
	        <br>
		        <center>
		        <strong><i class="icon-user"></i> 최현섭(Devmas)</strong>
		        <br>
		        하려고 하면 방법이 생긴다.
		        <br>
		        </center>
		        <div class="today_show">
		            <center><div class="total">total : <?php echo $count; ?></div></center>
		        </div>
	        </p>
	        
		    <div>
			  <ul class="nav nav-tabs nav-stacked">
				<li><a href="#tab1" target="_self">기본</a></li>
				<?php if (isset($_SESSION['id'])) { ?>
				<li><a href="#tab2" target="_self">경력</a></li>
				<li><a href="#tab3" target="_self">이력</a></li>
				<li><a href="#tab4" target="_self">포폴</a></li>
				<?php }?>
			  </ul>
		    </div>
	    </div>
	</div>
    
    <div class="span12" id="bottom-container">
    	<h2 id="tab1">&nbsp기본</h2>
    	<table class="table table-hover">
		  <tr>
		  	<th class="table_title_year">년도</td>
		  	<th class="table_title_content">내용</td>
		  	<th class="table_title_file">보기</th>
		  </tr>
		  <tr>
		  	<td>2013.11.11 ~</td>
		  	<td class="table_content">Humanscape inc. Developer & Founder</td>
		  	<td><a href="http://humanscape.co.kr" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2016.2</td>
		  	<td class="table_content">한성대학교 컴퓨터공학과 졸업</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2009.3.17 ~ 2011.1.19</td>
		  	<td class="table_content">육군 51사단 병장(09-73019440) 만기 제대</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2007.2</td>
		  	<td class="table_content">서울 보성고등학교 졸업</td>
		  	<td><a href="#"></a></td>
		  </tr>
		</table>
 		<?php if (isset($_SESSION['id'])) { ?>
 		<div id="tab2">
	    	<h2>&nbsp경력</h2>
	    	<table class="table table-hover">
			  <tr>
			  	<th class="table_title_year">년도</td>
			  	<th class="table_title_content">내용</td>
			  	<th class="table_title_file">보기</th>
			  </tr>
			  <tr>
			  	<td>2013.11.11 ~</td>
			  	<td class="table_content">Humanscape inc. Developer & Founder</td>
			  	<td><a href="http://humanscape.co.kr" target="_blank"><i class="icon-search icon-white"></i></a></td>
			  </tr>
			  <tr>
			  	<td>2015.5.26 ~</td>
			  	<td class="table_content">Meersoft inc. CEO & Founder</td>
			  	<td><a href="http://meersoft.kr" target="_blank"><i class="icon-search icon-white"></i></a></td>
			  </tr>
			  <tr>
			  	<td>2015.9 ~</td>
			  	<td class="table_content">한성대학교 창업동아리 회장</td>
			  	<td><a href="#"></a></td>
			  </tr>
			  <tr>
			  	<td>2015.5 ~ 2015.10</td>
			  	<td class="table_content">2015 스마트앱창작터 사업 수행 </td>
			  	<td><a href="#smart" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
			  </tr>
			  <tr>
			  	<td>2014.7 ~ 2015.5</td>
			  	<td class="table_content">제1회 이공계 창업꿈나무 사업 수행</td>
			  	<td><a href="#techdream" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
			  </tr>
			  <tr>
			  	<td>2014.5 ~ 2014.9</td>
			  	<td class="table_content">색체태교미술연구소 꿈꾸는엄마별 기술팀장</td>
			  	<td><a href="#"></a></td>
			  </tr>
			  <tr>
			  	<td>2014.2</td>
			  	<td class="table_content">2014 연세대학교 창업동아리지원비 사업 선정</td>
			  	<td><a href="#"></a></td>
			  </tr>
			  <tr>
			  	<td>2013.12 ~ 2014.2</td>
			  	<td class="table_content">W3C HTML5 웹표준 교육 이수</td>
			  	<td><a href="#"></a></td>
			  </tr>
			  <tr>
			  	<td>2012.9 ~ 2012.12</td>
			  	<td class="table_content">Handysoft inc. QA Team 인턴</td>
			  	<td><a href="#"></a></td>
			  </tr>
			</table>
		</div>
		<h2 id="tab3">&nbsp이력</h2>
    	<table class="table table-hover">
		  <tr>
		  	<th class="table_title_year">년도</td>
		  	<th class="table_title_content">내용</td>
		  	<th class="table_title_file">보기</th>
		  </tr>
		  <tr>
		  	<td>2016.1</td>
		  	<td class="table_content">글로벌 청년 창업캠프 참가</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2015.9</td>
		  	<td class="table_content">프로그램 저작권 등록 (뷰티미러)</td>
		  	<td><a href="#program" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.8</td>
		  	<td class="table_content">제6회 한성대학교 창업경진대회 우수상</td>
		  	<td><a href="#2015hansung" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.8</td>
		  	<td class="table_content">2015 World Electronics Brand Show 참가</td>
		  	<td><a href="#WorldElectronics" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2014.12</td>
		  	<td class="table_content">2014 App Show Korea 참가</td>
		  	<td><a href="#appshow" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2014.12</td>
		  	<td class="table_content">사단법인 한국디지털콘텐츠학회 우수 논문상</td>
		  	<td><a href="#nonmoon" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2014.10</td>
		  	<td class="table_content">제10회 한성대학교 공학경진대회 우수상(논문부문)</td>
		  	<td><a href="#gonghak" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2014.8</td>
		  	<td class="table_content">제5회 한성대학교 창업경진대회 우수상</td>
		  	<td><a href="#2014hansung" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2014.1</td>
		  	<td class="table_content">제3회 서강대학교 창업경진대회 최우수상</td>
		  	<td><a href="#sogang" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2013.11</td>
		  	<td class="table_content">서강대학교 GSP(Global Startup Program) 1기</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2013.1</td>
		  	<td class="table_content">제34회 제일기획 광고공모전 입상</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2012.8</td>
		  	<td class="table_content">제29회 대홍기획 광고공모전 동상</td>
		  	<td><a href="#daehong2" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2012.8</td>
		  	<td class="table_content">제29회 대홍기획 광고공모전 디콘상</td>
		  	<td><a href="#daehong1" role="button" data-toggle="modal"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		</table>

		<h2 id="tab4">&nbsp포트폴리오</h2>
    	<table class="table table-hover">
		  <tr>
		  	<th class="table_title_year">년도</td>
		  	<th class="table_title_intro">분야</td>
		  	<th class="table_title_content">내용</td>
		  	<th class="table_title_file">보기</th>
		  </tr>
		  <tr>
		  	<td>2015.7 ~ </td>
		  	<td>Open Source</td>
		  	<td class="table_content">Plasma 개발 참여</td>
		  	<td><a href="https://github.com/plasma-php/Plasma" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.4 ~ </td>
		  	<td>Android, iOS</td>
		  	<td class="table_content">BeautyCare</td>
		  	<td><a href="http://beauty-care.co.kr:8080/" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.3 ~ </td>
		  	<td>Web</td>
		  	<td class="table_content">HelloUniv</td>
		  	<td><a href="http://hellouniv.mirroronthewall.kr:8080/member/signup" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.11 ~ 2016.1</td>
		  	<td>Web</td>
		  	<td class="table_content">Bloom clinic 홈페이지</td>
		  	<td><a href="http://www.bloomat.com/" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.10 ~ 2015.12</td>
		  	<td>Android, iOS</td>
		  	<td class="table_content">서강윤리안전 어플리케이션</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2015.10 ~ 2015.12</td>
		  	<td>Web</td>
		  	<td class="table_content">Meersoft 홈페이지</td>
		  	<td><a href="http://meersoft.kr" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.9 ~ 2015.12</td>
		  	<td>Web</td>
		  	<td class="table_content">KFBA</td>
		  	<td><a href="http://kfba2013.com/" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.9 ~ 2015.11</td>
		  	<td>Web</td>
		  	<td class="table_content">(주)우솔농산 홈페이지</td>
		  	<td><a href="http://www.woosol.co.kr/" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.5 ~ 2015.10</td>
		  	<td>Android</td>
		  	<td class="table_content">BeautyMirror</td>
		  	<td><a href="https://play.google.com/store/apps/details?id=kr.co.humanscape.beuatymirror" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.5 ~ 2015.10</td>
		  	<td>Android, iOS</td>
		  	<td class="table_content">BabyCare Cal</td>
		  	<td><a href="https://play.google.com/store/apps/details?id=com.babycare.babycare" target="_blank"><i class="icon-search icon-white"></i></a></td>
		  </tr>
		  <tr>
		  	<td>2015.1 ~ 2015.2</td>
		  	<td>Android</td>
		  	<td class="table_content">MoneyBook</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2014.10 ~ 2014.12</td>
		  	<td>Android</td>
		  	<td class="table_content">거울아거울아</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2014.10 ~ 2014.12</td>
		  	<td>Web</td>
		  	<td class="table_content">PIAS</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2014.1 ~ 2014.2</td>
		  	<td>Android, iOS</td>
		  	<td class="table_content">HoneyB</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2013.4 ~ 2013.6</td>
		  	<td>Web</td>
		  	<td class="table_content">메뉴쾅!</td>
		  	<td><a href="#"></a></td>
		  </tr>
		  <tr>
		  	<td>2013.1 ~ 2013.3</td>
		  	<td>Android</td>
		  	<td class="table_content">Art Worldcup</td>
		  	<td><a href="#"></a></td>
		  </tr>
		</table>
		<?php } ?>
    </div>

    <!-- Modal Start -->

    <!--WorldElectronics-->
	<div id="WorldElectronics" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2015 킨텍스 World Electronics Brand Show</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/WorldElectronics.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

    <!--sogang-->
	<div id="sogang" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>제3회 서강대학교 창업경진대회</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/sogang.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--nonmoon-->
	<div id="nonmoon" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>사단법인 한국디지털콘텐츠학회 우수 논문상</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/nonmoon.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--daehong1-->
	<div id="daehong1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>제29회 대홍기획 디콘상</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/daehong1.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--daehong2-->
	<div id="daehong2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>제29회 대홍기획 동상</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/daehong2.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--smart-->
	<div id="smart" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2015 스마트앱창작터</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/smart2.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--appshow-->
	<div id="appshow" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2014 App Show Korea</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/appshow.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--2014hansung-->
	<div id="2014hansung" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2014 제5회 한성대학교 창업경진대회</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/2014hansung.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--gonghak-->
	<div id="gonghak" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2014 제5회 한성대학교 창업경진대회</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/gonghak.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--2015hansung-->
	<div id="2015hansung" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
		  <div class="modal-content">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3>2015 제6회 한성대학교 창업경진대회</h3>
			  </div>
			  <div class="modal-body">
			    <p><img src="../public/img/confirm/2015hansung.png" alt=""></p>
			  </div>
			  <div class="modal-footer">
			  </div>
		  </div>
	  </div>
	</div>

	<!--program-->
	<div id="program" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>프로그램 저작권 등록</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/program.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!--techdream-->
	<div id="techdream" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    <h3>2014 App Show Korea</h3>
	  </div>
	  <div class="modal-body">
	    <p><img src="../public/img/confirm/techdream.png" alt=""></p>
	  </div>
	  <div class="modal-footer">
	  </div>
	</div>

	<!-- Modal End -->
  </div>
</div>