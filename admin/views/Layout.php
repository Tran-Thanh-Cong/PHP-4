<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="./public/assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="./public/assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="./public/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./public/assets/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href=""><img class="brand-logo" alt="Chameleon admin logo" src="./public/assets/images/logo/logo.png" />
                        <h3 class="brand-text">Nhóm 4</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="active"><a href="index.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Trang chủ</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=statusbook&action=tra_sach_view"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Quản lý trả sách</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=statusbook&action=muon"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Quản lý mượn sách</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=category"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Danh mục sách</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=book"><i class="ft-box"></i><span class="menu-title" data-i18n="">Danh sách sách</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=student"><i class="ft-bold"></i><span class="menu-title" data-i18n="">Quản lý sinh viên</span></a>
                </li>
                <li class=" nav-item"><a href="index.php?controller=user"><i class="ft-credit-card"></i><span class="menu-title" data-i18n="">Quản lý Admin</span></a>
                </li>                
                <li class=" nav-item"><a href="index.php?controller=thongke"><i class="ft-book"></i><span class="menu-title" data-i18n="">Báo cáo thống kê</span></a>
                </li>
            </ul>
        </div>
       
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php echo $this->view; ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script src="./public/assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="./public/assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="./public/assets/js/core/app-lite.js" type="text/javascript"></script>

    <script src="./public/assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <script src="./public/assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
    <script src="./public/assets/js/scripts/charts/chartjs/bar/bar.js" type="text/javascript"></script>
    <script src="./public/assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
    <script src="./public/assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js" type="text/javascript"></script>
    <script src="./public/assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js" type="text/javascript"></script>
</body>

</html>