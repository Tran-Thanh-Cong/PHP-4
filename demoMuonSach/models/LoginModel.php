<?php 
	trait LoginModel
    {
		public function modelLogin()
        {
			$studentName=$_POST["studentName"];
			$studentCode=$_POST["studentCode"];
			// kiem tra trong csdl
			$conn = Connection::connect();
			$query= $conn->query("select studentName,studentCode from students where studentName='$studentName'");
			//lay mot ban ghi
			$result = $query->fetch();
			if (isset($result->studentName)){
				if($result->studentCode == $studentCode){
					//dang nhap thanh cong
					$_SESSION["student"]=$studentName;
				}
			}
		}
	}		
?>