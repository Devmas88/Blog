<?php

class Write_Model {

	function __construct($db)
	{
		try {
			// 데이터 베이스를 받아오지 못하네
			$this->db = $db;
		} catch (PDOException $e) {
			exit('데이터베이스 연결에 오류가 발생했습니다.');
		}
	}

	// 모든 글 리스트
	public function getWriteList() 
	{	
		$sql = "SELECT * FROM blog_content";
		// 쿼리문을 실행하기전 미리실행해 오류 검사 PDO문법, 미리검사해 SQL injection막을 수 있음
		$query = $this->db->prepare($sql);
		// 쿼리 실행
		$query->execute();
		return $query->fetchAll();
	}

	// 블로그 등록 , 파일도 같이 등록
	public function addFile($title, $content, $file)
	{
		$title = strip_tags($title);
		$content = strip_tags($content);
		$file = strip_tags($file);

		$sql = "INSERT INTO blog_content (title, content, file) VALUES (:title, :content, :file)";
		$query = $this->db->prepare($sql);
		$query->execute(array(':title' => $title, ':content' => $content, ':file' => $file));
	}
}