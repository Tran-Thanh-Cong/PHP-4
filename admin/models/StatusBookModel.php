<?php 
	trait StatusBookModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function read($recordPerPage){
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::connect();
			$query = $conn->query("select * from order_detail order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		public function read_tra_sach($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->total();
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::connect();
			$query = $conn->query("select * from tra_sach order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function total(){
			//---
			$conn = Connection::connect();
			$query = $conn->query("select id from tra_sach");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}	
        public function getProduct($id){
            $conn = Connection::connect();
			$query = $conn->query("select * from products where id = $id");
            return $query->fetch();
        }
        public function getTra_Sach($id){
            $conn = Connection::connect();
			$query = $conn->query("select * from muon_sach where id = $id");
            return $query->fetch();
        }
        public function getStudent($id){
            $conn = Connection::connect();
			$query = $conn->query("select * from students where id = $id");
            return $query->fetch();
        }
		public function getOrderDetail($id){
			$conn = Connection::connect();
			$query = $conn->query("select * from order_detail where id = $id");
            return $query->fetch();
		}
		public function deleteBook($id){
			$conn = Connection::connect();
			$order_detail = $this->getOrderDetail($id);  
			$conn->query("delete from order_detail where id = $id");
			$checkBook =  $conn->query("select * from order_detail where order_id = $order_detail->order_id");
			if(empty($checkBook)){
				$conn->query("delete from tra_sach where id = $order_detail->order_id");
			}
		}
		public function tra_sach_model($id){
			$order_detail = $this->getOrderDetail($id);  
			$tra_sach = $this->getTra_Sach($order_detail->order_id);  
            $product = $this->getProduct($order_detail->product_id); 
            $student = $this->getStudent($tra_sach->student_id);
			$total_price = $product->price*$order_detail->quantity;
			$conn = Connection::connect();
			$product_name = $product->name;
			$product_price = $product->price;
			$quantity =  $order_detail->quantity;
			$order_date =  $tra_sach->date;
			$studentName = $student->studentName;
			$remaining = $product->remaining + $quantity;
			$conn->query("insert into tra_sach set product_name ='$product_name', product_price = $product_price,
			quantity = $quantity, order_date = '$order_date', student_name = '$studentName', total_price = $total_price ");
			$conn->query("update products set remaining = $remaining where id =$product->id");
		}
	}
 ?>