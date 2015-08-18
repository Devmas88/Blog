<?php

class Visitor_Model {

	function __construct($db)
	{
		try {
			// 데이터 베이스를 받아오지 못하네
			$this->db = $db;
		} catch (PDOException $e) {
			exit('데이터베이스 연결에 오류가 발생했습니다.');
		}
	}

 	// 모든 샵의 리스트
	public function getMessageList() 
	{	
		$sql = "SELECT * FROM visitor_message";
		// 쿼리문을 실행하기전 미리실행해 오류 검사 PDO문법, 미리검사해 SQL injection막을 수 있음
		$query = $this->db->prepare($sql);
		// 쿼리 실행
		$query->execute();
		return $query->fetchAll();
	}

	// 방명록 추가
	public function addMessage($title, $visitor, $content)
	{
		$title = strip_tags($title);
		$visitor = strip_tags($visitor);
		$content = strip_tags($content);

		$sql = "INSERT INTO visitor_message (title, visitor, content) VALUES (:title, :visitor, :content)";
		$query = $this->db->prepare($sql);
		$query->execute(array(':title' => $title, ':visitor' => $visitor, ':content' => $content));
	}

}