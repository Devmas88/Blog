		  <div>
		  	<ul class="nav nav-tabs nav-stacked affix">
				<li><a href="#tab1" target="_self">일상</a></li>
			</ul>
		  </div>
      </div>
    </div>
    <div class="span9">
	    <div class="blog_wrapper">
	    	<?php foreach($write_list as $row){ ?>
	    	<div class="blog_content_wrapper">
	    		<div class="blog_content_title">
	    			<?php echo $row->title; ?>
	    		</div>
	    		<div class="blog_content_img">
	    			<img src="../__RF/Blog/<?php echo $row->file; ?>">
	    		</div>
	    		<div class="blog_content">
	    			<?php echo $row->content; ?>
	    		</div>
	    		<div class="blog_comment">
	    		</div>
	    	</div>
			<?php } ?>
	    	<div>
	    		<!--
	    		<button class="btn btn-info" name="blog_write" onclick="location.href='/blog/main/blog_write'">글쓰기</button>
	    		-->
	    	</div>
	    </div>
    </div>
  </div>
</div>