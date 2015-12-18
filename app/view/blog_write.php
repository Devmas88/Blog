
<div class="span12">
  <div class="wirte_wrapper">
    <form enctype="multipart/form-data" action="write_upload" method="POST">
      <div>
        <input class="write_title" type="text" name="title" value="제목">
      </div>
      <div>
        <textarea class="write_content" rows="20" name="content" placeholder="내용"></textarea>
      </div>
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      이 파일을 전송합니다: <input name="userfile" type="file" />
      <input class="write_submit btn btn-inverse" type="submit" value="등록" />
    </form>
  </div>
</div>