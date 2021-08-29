<?php 
	include "models/ThongKeSachModel.php";
	class ThongKeController extends Controller
    {
		use ThongKeSachModel;
		public function __construct()
        {
			$this->authentication();
		}
		public function index()
        {
			$getThongKes = $this->thongKeSach();
			$this->view("ThongKeSachView.php", ['getThongKes' => $getThongKes]);
		}
		public function getThongKe()
        {
            $getThongKes = $this->searchTheoNgay();
			$this->view("ThongKeSachView.php", ['getThongKes' => $getThongKes]);
		}
	}
?>