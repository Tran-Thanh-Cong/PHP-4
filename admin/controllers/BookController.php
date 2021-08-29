<?php 
	include "models/BookModel.php";

	class BookController extends Controller
    {
		use BookModel;
		public function __construct()
		{
			$this->authentication();
		}
		public function index()
		{
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//load view, truyen du lieu ra view
			$this->view("BookView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//update ban ghi - trang thai GET
		public function update()
		{
			//lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de lay du lieu
			$record = $this->modelGetRecord($id);	
			//tao bien $action de dua vao thuoc tinh action cua form
			$action = "index.php?controller=book&action=updatePost&id=$id";
			//goi view, truyen du lieu ra view
			$this->view("BookFormView.php",["record"=>$record,"action"=>$action]);
		}
		//update ban ghi - trang thai POST
		public function updatePost()
		{
			//lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de update du lieu
			$record = $this->modelUpdate($id);	
			//di chuyen den url
			header("location:index.php?controller=book");
		}
		public function create()
		{
			//tao bien $action de dua vao thuoc tinh action cua form
			$action = "index.php?controller=book&action=createPost";
			//goi view, truyen du lieu ra view
			$this->view("BookFormView.php",["action"=>$action]);
		}
		public function createPost()
		{
			//goi ham tu model de create du lieu
			$this->modelCreate();
			header("location:index.php?controller=book");
		}
		public function delete()
		{
			//lay bien id truyen tu url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelDelete($id);	
			//di chuyen den url
			header("location:index.php?controller=book");
		}
		public function detail()
		{
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$data = $this->modelGetRecord($id);
			$this->view("BookDetailView.php",['data' => $data]);	
		}
		public function search()
		{
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			$data = $this->modelSearchRecord($recordPerPage);
			$this->view("BookView.php",["data"=>$data, 'numPage' => $numPage]);
		}
	}
?>