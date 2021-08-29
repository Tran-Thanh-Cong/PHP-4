<?php 
	trait StudentModel
    {
		//hàm lấy danh sách các bản ghi có phân trang
		public function modelRead($recordPerPage)
        {
			//lấy biến p truyền từ url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			//lấy từ bản ghi nào
			$from = $p * $recordPerPage;
			//---
			//lấy biến kết nối csdl
			$conn = Connection::connect();
			//thực hiện truy vấn
			$query = $conn->query("select * from students order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}

		public function modelCreate()
        {
			//--
			$studentName = $_POST["student_name"];
            $studentCode = $_POST["student_code"];	
            $gender = $_POST["gender"];
			$studentClass = $_POST["student_class"];
			$phoneNumber = $_POST["phone_number"];
			$dateOfBookkingBook = $_POST["ngay_muon"];
			$conn = Connection::connect();
			$conn->query("insert into students set studentName='$studentName', studentCode='$studentCode', 
            gender='$gender', studentClass='$studentClass', phoneNumber='$phoneNumber', dateOfBookkingBook='$dateOfBookkingBook'");
		}

		//tính tổng số bản ghi
		public function totalRecord($recordPerPage)
        {
			//lấy biến kết nối
			$conn = Connection::connect();
			$query = $conn->query("select id from students");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
		//lấy 1 bản ghi 
		public function modelGetRecord($id)
        {
			//lấy biến kết nối
			$conn = Connection::connect();
			$query = $conn->query("select * from students where id=$id");
			//trả về 1 bản ghi
			return $query->fetch();
		}
		//update bản ghi
		public function modelUpdate($id)
        {
			//--
			$studentName = $_POST["student_name"];
            $studentCode = $_POST["student_code"];	
            $gender = $_POST["gender"];
			$studentClass = $_POST["student_class"];
			$phoneNumber = $_POST["phone_number"];
			$dateOfBookkingBook = $_POST["ngay_muon"];
			//lay bien ket noi
			$conn = Connection::connect();
			$query=$conn->query("update students set studentName='$studentName', studentCode='$studentCode', gender='$gender', 
            studentClass='$studentClass',phoneNumber='$phoneNumber', dateOfBookkingBook='$dateOfBookkingBook' where id=$id");
		}
		public function modelDelete($id)
        {
			$conn = Connection::connect();
			$query = $conn->query("delete from students where id=$id");
		}
	}
?>