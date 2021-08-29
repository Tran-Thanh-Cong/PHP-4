<?php 
    trait ThongKeSachModel
    {
        public function thongKeSach()
        {
            $conn = Connection::connect();
            $query = $conn->query("select date, count(id) as order_quantity, count(distinct student_id) as student_quantity, sum(price) as total_money
            from muon_sach group by date order by date");
            return $query->fetchAll();
        }
        public function thongKeMuonSach($day)
        {
            $conn = Connection::connect();
            $query = $conn->query("Select sum(quantity) as soluong from muon_sach inner join order_detail on order_detail.order_id = muon_sach.id where date = '$day' group by date");
            return $query->fetch();
        }
        public function getCategory() 
        {
            $conn = Connection::connect();
            $query = $conn->query("select id, name from categories");
            return $query->fetchAll();
        }
        public function searchTheoNgay()
        {
            $ngay_dau = isset($_POST['date1']) ? $_POST['date1'] : null;
            $ngay_sau =  isset($_POST['date2']) ? $_POST['date2'] : null;
            $conn = Connection::connect();
            $query = $conn->query("select date, count(id) as order_quantity, count(student_id) as student_quantity, sum(price) as total_money
            from muon_sach where date BETWEEN '$ngay_dau' AND '$ngay_sau' group by date");
            return $query->fetchAll();
        }
    }
?>