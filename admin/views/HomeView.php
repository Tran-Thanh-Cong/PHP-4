<?php $this->layoutPath = "Layout.php" ?>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                        <ul class="dropdown-menu">
                            <li class="arrow_box">
                                <form>
                                    <div class="input-group search-box">
                                        <div class="position-relative has-icon-right full-width">
                                            <input class="form-control" id="search" type="text" placeholder="Search here...">
                                            <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read </a></div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="./public/assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="./public/assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">John Doe</span></span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="index.php?controller=login&action=logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">Thống kê mượn sách</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Thống kê
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
                <!-- Bar charts section start -->
                <section id="chartjs-bar-charts">
                    <!-- Column Chart -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Thống kê số lượng sách cho mượn</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="height">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>
    </div>
</div>
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
    </div>
</footer>
<?php
    $now = strtotime(date('Y-m-d'));
?>
<input type="hidden" value="<?php echo  date('d/m', $now) ?>" id="ngayhomnay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400) ?>" id="sau1ngay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 2) ?>" id="sau2ngay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 3) ?>" id="sau3ngay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 4) ?>" id="sau4ngay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 5) ?>" id="sau5ngay">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 6) ?>" id="sau6ngay">

<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d')) ? $this->thongKeMuonSach(date('Y-m-d'))->soluong : 0; ?>" id="sl_sach">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400))->soluong : 0; ?>" id="sl_sach1">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 2)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 2))->soluong : 0; ?>" id="sl_sach2">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 3)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 3))->soluong : 0; ?>" id="sl_sach3">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 4)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 4))->soluong : 0; ?>" id="sl_sach4">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 5)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 5))->soluong : 0; ?>" id="sl_sach5">
<input type="hidden" value=" <?php echo $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 6)) ? $this->thongKeMuonSach(date('Y-m-d', $now - 86400 * 6))->soluong : 0; ?>" id="sl_sach6">

<script>
    let ngayhomnay = document.querySelector("#ngayhomnay").value;
    let sau1ngay = document.querySelector("#sau1ngay").value;
    let sau2ngay = document.querySelector("#sau2ngay").value;
    let sau3ngay = document.querySelector("#sau3ngay").value;
    let sau4ngay = document.querySelector("#sau4ngay").value;
    let sau5ngay = document.querySelector("#sau5ngay").value;
    let sau6ngay = document.querySelector("#sau6ngay").value;

    let sl_sach = document.querySelector("#sl_sach").value;
    let sl_sach1 = document.querySelector("#sl_sach1").value;
    let sl_sach2 = document.querySelector("#sl_sach2").value;
    let sl_sach3 = document.querySelector("#sl_sach3").value;
    let sl_sach4 = document.querySelector("#sl_sach4").value;
    let sl_sach5 = document.querySelector("#sl_sach5").value;
    let sl_sach6 = document.querySelector("#sl_sach6").value;

    const labels = [
        sau6ngay,
        sau5ngay,
        sau4ngay,
        sau3ngay,
        sau2ngay,
        sau1ngay,
        ngayhomnay,
    ];
    const data = {
        labels: labels,
        datasets: [{
        label: 'Số lượn sách mượn',
        data: [sl_sach6,sl_sach5, sl_sach4, sl_sach3, sl_sach2, sl_sach1, sl_sach],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
        ],
        borderWidth: 1
  }]
};
    const config = {
        type: 'bar',
        data: data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    };
    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>