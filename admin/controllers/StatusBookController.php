<?php 
	include "models/StatusBookModel.php";
	
	class StatusBookController extends Controller
    {
		use StatusBookModel;
		public function __construct()
        {
			$this->authentication();
		}
		public function muon()
        {
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->total()/$recordPerPage);
			//goi ham de lay du lieu
			$data = $this->read($recordPerPage);
			//load view
			$this->view("MuonSach.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function tra_sach()
        {
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$this->tra_sach_model($id);
			$this->deleteBook($id);
			//load view
			header("location:index.php?controller=statusbook&action=muon");
		}
		public function tra_sach_view()
        {
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->total()/$recordPerPage);
			//goi ham de lay du lieu
			$data = $this->read_tra_sach($recordPerPage);
			//load view
			$this->view("TraSachView.php",["data"=>$data,"numPage"=>$numPage]);
		}
	}
?>