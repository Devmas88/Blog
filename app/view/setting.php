<div class="span12">
  <div class="login_wrapper">
  <br><br>
      <form action="auth" method="post">
          <?
          if(!isset($_SESSION['id'])) { ?>
              <div class="auth_wrapper">
                  <div class="auth_id" name="auth_id">
                      <input class="auth_set_id" type="text" placeholder="아이디" name="id">
                  </div>
                  <div class="auth_password" name="auth_password">
                      <input class="auth_set_password" type="password" placeholder="패스워드" name="password">
                  </div>
                  <button class="submit_login btn btn-inverse" type="submit" name="submit_auth">로그인</button>
              </div>
          <? } else { ?>
              <div class="auth_wrapper">
                  <div class="logout">
                      <button class="submit_logout btn btn-inverse" type="submit" name="logout">로그아웃</button>
                  </div>
              </div>
          <? } ?>
      </form>
      <div>
        
      </div> 
  </div>
</div>