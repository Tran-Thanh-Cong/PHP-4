<?php 
	trait DemoMuonSachModel
	{
		//ham lay danh sach cac ban ghi co phan trang
		public function read($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::connect();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function record($recordPerPage){
			//lay bien ket noi
			$conn = Connection::connect();
			$query = $conn->query("select id from products");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
        public function addBook($id,$quantity)
		{
		    if(isset($_SESSION['demoSach'][$id])){
		        $_SESSION['demoSach'][$id]['quantity'] += $quantity;
		    } else {
				$conn = Connection::connect();
				$query = $conn->query("select * from products where id=$id");
		        $product = $query->fetch();	        
		        $_SESSION['demoSach'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'seriCode' => $product->seriCode,
		            'quantity' => $quantity,
		            'price' => $product->price,
		        );
		    }
		}

		public function deleteBook($id)
		{
			unset($_SESSION['demoSach'][$id]);
		}

		public function getStudent()
		{
			$studentName = $_SESSION['student'];
			$conn = Connection::connect();
			$query = $conn->query("select * from students where studentName ='$studentName'");
			return $query->fetch();	       
		}

		public function checkBook($id, $total_price)
		{
			$conn = Connection::connect();
			$conn->query("insert into muon_sach set student_id=$id, date = now(), price = $total_price");
			$order_id = $conn->lastInsertId();  
			foreach($_SESSION["demoSach"] as $product){
				$query = $conn->query("select * from products where id =".$product['id']);
				$pro = $query->fetch();
				$remaining = $pro->remaining - $product["quantity"];
				$conn->query("insert into order_detail set order_id=$order_id, product_id=".$product['id'].", quantity=".$product['quantity']);
				$conn->query("update products set remaining = $remaining where id =".$product['id']);
			}
			unset($_SESSION["demoSach"]);
		}
	}
?>