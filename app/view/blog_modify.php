<div class="span12">
  <div class="wirte_wrapper">
    <form enctype="multipart/form-data" action="../blog_update" method="POST">
      <div>
        <input type="hidden" name="id" value="<?php echo $write_data->id; ?>">
        <input class="write_title" type="text" name="title" value="<?php echo $write_data->title;?>">
      </div>
      <div>
        <textarea class="write_content" rows="20" name="content" placeholder="내용"><?php echo $write_data->content;?></textarea>
      </div>
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
      이 파일을 전송합니다: <input name="userfile" type="file" />
      <input class="write_submit btn btn-inverse" type="submit" value="등록" />
    </form>
  </div>
</div>