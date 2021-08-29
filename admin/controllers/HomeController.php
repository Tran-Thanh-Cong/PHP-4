<?php 
	include "models/ThongKeSachModel.php";

	class HomeController extends Controller
    {
		use ThongKeSachModel;
		public function __construct()
        {
			$this->authentication();
		}
		public function index()
        {
			$this->view("HomeView.php");
		}
	}
?>