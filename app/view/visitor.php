		  <div>
		  	<ul class="nav nav-tabs nav-stacked affix">
				<li><a href="#tab1" target="_self">방명록</a></li>
			</ul>
		  </div>
      </div>
    </div>
    <div class="span9">
	    <div class="visitor_wrapper">
	    	<div class="form_wrapper">
	    		<div class="visitor_welcome">
	    			<h2>Hello :)<br> Devmas !</h2>
	    		</div>
			    <form action="visitor_write" method="post">
			    	<div class="visitor_content_wrapper">
			    		<div class="visitor" name="visitor">
			    			<input class="visitor_set" type="text" placeholder="이름" name="visitor">
			    		</div>
			    		<div class="visitor_content_title">
			    			<input class="visitor_set_title" type="text" placeholder="제목" name="title">
			    		</div>
			    		<div class="visitor_content">
			    			<textarea class="visitor_set_content" rows="3" name="content" placeholder="용건만 간단히.."></textarea>
			    		</div>
			    		<button class="submit_insert_message btn btn-info" type="submit" name="submit_insert_message">등록</button>
			    	</div>
		    	</form>
		    </div>
			<?php foreach($message_list as $row){ ?>
			<div class="message_wrapper">	
				<div class="message_left">
					<div class="message_id"><?php echo $row->id; ?></div>
					<div class="message_visitor"><i class="icon-user"></i> <?php echo $row->visitor; ?></div>
				</div>
				<div class="message_right">
					<div class="message_title"><?php echo $row->title; ?></div>
					<div class="message_content"><?php echo $row->content; ?></div>
				</div>
			</div>
			<?php } ?>
	    </div>
    </div>
  </div>
</div>