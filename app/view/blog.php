
    <div class="span12">
	    <div class="blog_wrapper">
	    	<?php foreach($write_list as $row){ ?>
	    	<div class="blog_content_wrapper">
	    		<div class="blog_content_title">
	    			<h3>&nbsp&nbsp<?php echo $row->title; ?></h3>
	    		</div>
	    		<div class="blog_content_img">
	    			<center><img class="img-polaroid" src="../__RF/Blog/<?php echo $row->file; ?>"></center>
	    			<br><br>
	    		</div>
	    		<div class="blog_content">
	    			<center><h4><?php echo nl2br($row->content);#$row->content; ?></h4></center>
	    		</div>
	    		<?php if (isset($_SESSION['id'])) { ?>
	    		<br><br>
	    		<button class="btn btn-inverse" name="blog_modify" onclick="location.href='/Blog/main/blog_modify/<?php echo $row->id; ?>'">수정</button>
	    		<? } ?>
	    		<div class="blog_comment">
	    		</div>
	    	</div>
			<?php } ?>
	    	<div>
			<?php if (isset($_SESSION['id'])) { ?>
				<br><br>
	    		<button class="btn btn-inverse" name="blog_write" onclick="location.href='/Blog/main/blog_write'">글쓰기</button>
	    	<? } ?>
	    	</div>
	    </div>
    </div>
  </div>
</div>