<?php 
/**
* Main class
*/
class Main extends Plasma_Controller
{
	public function __construct()
	{	
		parent::__construct();
	}

	public function index()
	{	
		require 'app/view/header.php';
		require 'app/view/home.php';
		require 'app/view/footer.php';
	}

	public function auth()
	{
		if (isset($_POST["submit_auth"])) {
			$auth_id = $_POST["id"];
			$auth_password = $_POST["password"];
			$AUTH_ID = 'sup';
			$AUTH_PASS = '111111';

			if ($auth_id === $AUTH_ID && $auth_password === $AUTH_PASS) {
				// 세션에 아이디 값 저장
				$_SESSION['id'] = $auth_id;
			}
		} 
		header('location: ' . URL . 'blog/main/');
	}

	public function blog()
	{

		$write_model = $this->loadModel('Write_Model');
		$write_list = $write_model->getWriteList();

		require 'app/view/header.php';
		require 'app/view/blog.php';
		require 'app/view/footer.php';
	}

	public function blog_write()
	{
		require 'app/view/header.php';
		require 'app/view/blog_write.php';
		require 'app/view/footer.php';
	}

	// 블로그에서 쓴 글을 업로드 합니다.
	public function write_upload()
	{
		function file_errmsg($code){ 
		   switch($code){ 
		       case(UPLOAD_ERR_INI_SIZE): 
		           return "업로드한 파일이 php.ini upload_max_filesize보다 큽니다."; 
			   case(UPLOAD_ERR_FORM_SIZE): 
			       return "업로드한 파일이 MAX_FILE_SIZE 보다 큽니다. "; 
			   case(UPLOAD_ERR_PARTIAL): 
			       return "파일이 일부분만 전송되었습니다. 다시 시도해 주십시요."; 
			   case(UPLOAD_ERR_NO_FILE): 
			       return "파일이 전송되지 않았습니다."; 
			   case(UPLOAD_ERR_NO_TMP_DIR): 
			       return "임시 폴더가 없습니다."; 
			   case(UPLOAD_ERR_CANT_WRITE): 
			       return "디스크에 파일 쓰기를 실패했습니다. 다시 시도해 주십시요."; 
			   default: 
			       return "확장에 의해 파일 업로드가 중지되었습니다."; 
		   } 
		} 

		// 서버에 저장될 디렉토리이름 
		$uploaddir = './__RF/Blog/'; 
		// 서버에 저장될 파일이름 
		$filename = basename($_FILES['userfile']['name']); 
		$md5filename = $uploaddir . md5("blog_".$filename); 
		$ext = array_pop(explode(".","$filename")); 

		if($_FILES['userfile']['error'] === UPLOAD_ERR_OK) { 
		    if(strtolower($ext) == "php") { 
		         echo "확장자 php파일은 업로드 하실수 없습니다."; 
		    } 
		    else if($_FILES['userfile']['size'] <= 0){ 
		        echo "파일 업로드에 실패하였습니다."; 
		    } else { 
		        // HTTP post로 전송된 것인지 체크합니다. 
		        if(!is_uploaded_file($_FILES['userfile']['tmp_name'])) { 
		             echo "HTTP로 전송된 파일이 아닙니다."; 
		        } else { 
		             // move_uploaded_file은 임시 저장되어 있는 파일을 디렉토리로 이동합니다. 
		             if (move_uploaded_file($_FILES['userfile']['tmp_name'], $md5filename)) { 
		                  echo "성공적으로 업로드 되었습니다.\n";
					      $write_model = $this->loadModel('Write_Model');
						  $write_model->addFile($_POST["title"], $_POST["content"], md5("blog_".$filename));
						  echo "<script>document.location.href='blog';</script>"; 
		             } else { 
		                  echo "파일 업로드 실패입니다.\n"; 
		             }
		        }
		    } 
		} else { 
		    echo file_errmsg($_FILES['userfile']['error']); 
		} 

		print_r($_FILES); 
	}


	public function visitor()
	{	
		$visitor_model = $this->loadModel('Visitor_Model');
		$message_list = $visitor_model->getMessageList();
		require 'app/view/header.php';
		require 'app/view/visitor.php';
		require 'app/view/footer.php';
	}

	public function visitor_write()
	{	
		$visitor_model = $this->loadModel('Visitor_Model');

		if (isset($_POST["submit_insert_message"])) {
			$visitor_model->addMessage($_POST["title"], $_POST["visitor"], $_POST["content"]);
		}
		header('location: ' . URL . 'blog/main/visitor');
	}

	public function logout()
	{
		unset($_SESSION['id']);
		header('location: ' . URL . 'blog/main/');
	}
}