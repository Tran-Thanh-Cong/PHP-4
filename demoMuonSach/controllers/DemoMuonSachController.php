<?php 
	//include file model
	include "models/DemoMuonSachModel.php";
	class DemoMuonSachController extends Controller
    {
		use DemoMuonSachModel;
		//ham tao
        public function __construct()
		{
			if (!isset($_SESSION["student"]))
			 	header("location:index.php?controller=login");
			if(!isset($_SESSION["demoSach"]))
				$_SESSION["demoSach"] = array();
		}
		public function index()
        {
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->record($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->read($recordPerPage);
			$this->view("DemoView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function addToCart(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$quantity = isset($_GET["quantity".$id]) ? $_GET["quantity".$id] : 0;
			$this->addBook($id,$quantity);
			header("location:index.php?controller=demomuonsach");
		}
        public function showBook()
        {
            $this->view("DongYMuon.php");
        }
		public function deleteOneBook()
		{
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->deleteBook($id);
			$this->view("DongYMuon.php");
		}
		public function success()
		{
			$tt = isset($_GET["tt"]) ? $_GET["tt"] : 0;
			$student = $this->getStudent();
			$this->checkBook($student->id, $tt);
			$_SESSION["demoSach"] = array();
			header("location:index.php?controller=demomuonsach");
		}
	}
?>