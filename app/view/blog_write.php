      <div>
        <ul class="nav nav-tabs nav-stacked affix">
        <li><a href="#tab1" target="_self">일상</a></li>
      </ul>
      </div>
      </div>
    </div>
<div class="span9">
  <div class="wirte_wrapper">
    <form enctype="multipart/form-data" action="write_upload" method="POST">
      <div>
        <input class="write_title" type="text" name="title">
      </div>
      <div>
        <textarea class="write_content" rows="20" name="content"></textarea>
      </div>
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      이 파일을 전송합니다: <input name="userfile" type="file" />
      <input class="write_submit btn btn-info" type="submit" value="등록" />
    </form>
  </div>
</div>