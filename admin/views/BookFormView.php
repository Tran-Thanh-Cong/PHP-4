<!-- load file layout chung -->
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
                <h3 class="content-header-title">Thêm/Sửa sách</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">Home</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="content-types">
                <div class="row match-height">
                    <div class="col-xl-6 col-md-12">
                        <div class="card" style="width: 1200px;">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" method="POST" action="<?php echo $action; ?>">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="donationinput1" >Mã sách</label>
                                                <input type="text" id="donationinput1" class="form-control" value="<?php echo isset($record->bookCode) ? $record->bookCode :''; ?>" name="bookCode" required required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Tên sách</label>
                                                <input type="text" id="donationinput2" class="form-control" value="<?php echo isset($record->name) ? $record->name :''; ?>" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Số lượng sách còn(chưa mượn)</label>
                                                <input type="text" id="donationinput2" class="form-control" value="<?php echo isset($record->remaining) ? $record->remaining :''; ?>" name="remaining" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Tác giả</label>
                                                <input type="text" id="donationinput2" class="form-control" value="<?php echo isset($record->author) ? $record->author :''; ?>" name="author" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Giá tiền</label>
                                                <input type="text" id="donationinput2" class="form-control" value="<?php echo isset($record->price) ? $record->price :''; ?>" name="price" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Số seri</label>
                                                <input type="text" id="donationinput2" class="form-control" value="<?php echo isset($record->seriCode) ? $record->seriCode :''; ?>" name="seriCode" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Ngày xuất bản</label>
                                                <input type="date" id="donationinput2" class="form-control" value="<?php echo isset($record->public) ? $record->public :''; ?>" name="public" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="donationinput2" >Loại sách</label>
                                                <select name="category_id" class="form-control" >   
                                                    <?php 
                                                        $categories = $this->modelListCategory();
                                                    ?>                     
                                                    <?php foreach($categories as $rows): ?>
                                                        <option <?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-actions center">
                                            <input type="submit" class="btn btn-outline-primary" value="Process">
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>