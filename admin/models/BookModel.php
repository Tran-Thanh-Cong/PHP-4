<?php 
	trait BookModel
    {
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($recordPerPage)
        {
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::connect();
			//thuc hien truy van
			$query = $conn->query("select * from products order by category_id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage)
        {
			//lay bien ket noi
			$conn = Connection::connect();
			$query = $conn->query("select id from products");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id)
        {
			//lay bien ket noi
			$conn = Connection::connect();
			$query = $conn->query("select products.*, categories.name as category_name from products inner join categories on products.category_id = categories.id where products.id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id)
        {
			$bookCode = $_POST["bookCode"];
            $name = $_POST["name"];
            $remaining = $_POST["remaining"];
            $author = $_POST["author"];
			$price = $_POST["price"];
			$seriCode = $_POST["seriCode"];
			$public = $_POST["public"];
			$category_id = $_POST["category_id"];
			//lay bien ket noi
			$conn = Connection::connect();
			$conn->query("update products set  name='$name', bookCode='$bookCode', price='$price',
			remaining='$remaining', author='$author', seriCode='$seriCode', public='$public', category_id='$category_id' where id=$id");
		}
		//create bang ghi
		public function modelCreate()
        {
			$bookCode = $_POST["bookCode"];
            $name = $_POST["name"];
            $remaining = $_POST["remaining"];
            $author = $_POST["author"];
			$price = $_POST["price"];
			$seriCode = $_POST["seriCode"];
			$public = $_POST["public"];
			$category_id = $_POST["category_id"];
			//lay bien ket noi
			$conn = Connection::connect();
			$conn->query("insert into products set name='$name', bookCode='$bookCode', price='$price',
			remaining='$remaining', author='$author', seriCode='$seriCode', public='$public', category_id='$category_id'");

		}
		//xoa ban ghi
		public function modelDelete($id)
        {
			$conn = Connection::connect();
			$conn->query("delete from products where id=$id");
		}	
		//lay danh sach danh muc san pham
		public function modelListCategory()
        {
			//lay bien ket noi
			$conn = Connection::connect();
			$query = $conn->query("select * from categories order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelSearchRecord($recordPerPage)
        {
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$name = isset($_POST["name"]) ? $_POST["name"] : '';
			$conn = Connection::connect();
			$query = $conn->query("select products.* from products inner join categories on products.category_id = categories.id  where products.name like '%$name%' order by category_id desc limit $from,$recordPerPage");
			$result = $query->fetchAll();
			return $result;
		}
	}
?>