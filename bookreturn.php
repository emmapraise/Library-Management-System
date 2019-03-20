<?php
error_reporting(0);
$link = mysql_connect("localhost", "root", "")or
die("Could not connect: " . mysql_error());
mysql_select_db('library', $link) or die ( mysql_error());
// date_default_timezone_set(Singapore);
?>
<head>

    <!-- Title Page-->
    <title>LAUTECH Library</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>


<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo.png" alt="Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a  href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="search.php">
                                <i class="fas fa-search"></i>Search</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i>Transcations</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="booklending.php">Book Lending</a>
                                </li>
                                <li>
                                    <a href="bookreturn.php">Book Return</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-gear"></i>Settings</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="memberdata.php">Member Data</a>
                                </li>
                                <li>
                                    <a href="category.php">Category</a>
                                </li>
                                <li>
                                    <a href="bookmasterdata.php">Book Master Data</a>
                                </li>
                                <li>
                                    <a href="location.php">Location</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo.png" alt="Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li>
                          <a  href="index.php">
                              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          </li>
                      <li>
                          <a href="search.php">
                              <i class="fas fa-search"></i>Search</a>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-book"></i>Transcations</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="booklending.php">Book Lending</a>
                              </li>
                              <li>
                                  <a href="bookreturn.php">Book Return</a>
                              </li>
                          </ul>
                      </li>
                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-gear"></i>Settings</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                              <li>
                                  <a href="memberdata.php">Member Data</a>
                              </li>
                              <li>
                                  <a href="category.php">Category</a>
                              </li>
                              <li>
                                  <a href="bookmasterdata.php">Book Master Data</a>
                              </li>
                              <li>
                                  <a href="location.php">Location</a>
                              </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                          <div class="form-header"></div>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="Admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">admin@lautech.edu.ng</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>            <!-- HEADER DESKTOP-->


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="overview-wrap">
                                  <h2 class="title-1">Book Return</h2>

                              </div>
                          </div>
                      </div><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Book</strong> Return
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="book_return_comit.php?action=edit&type=book" method="post">

                                            <div class="form-group">

                                                    <label for="select" class=" form-control-label">Serial Number</label>


                                                    <select name="loan_book_slno" id="select" class="form-control form-control-lg">
                                                      <option value="" selected >Select a serial number...</option>
                                       <?php $book_sql="SELECT  * from loan where loan_status='On Loan' ";
                                      $result=mysql_query($book_sql) or die (mysql_error());
                                      while ($row=mysql_fetch_array($result)) {
                                          $slno[$row['loan_id']]=$row['loan_book_slno'];
                                      }

                                        foreach ($slno as $loan_id => $loan_book_slno) {
                                      ?>
                                              <option value="<?php echo $loan_book_slno; ?>" ><?php
                                              echo $loan_book_slno; ?></option>
                                      <?php
                                        }
                                      ?>
                                                    </select>

                                            </div>

                                            <div class="form-group">

                                                    <label for="selectLg" class=" form-control-label">Member ID</label>
                                                    <select name="selectLg" id="loan_return_mem_name" class="form-control form-control-lg">
                                                      <option value="" selected >Select a member ID...</option>
                                       <?php $mem_sql="select * from member ";
                                      $result=mysql_query($mem_sql) or die (mysql_error());
                                      while ($row=mysql_fetch_array($result)) {
                                          $mem_name[$row['reader_id']]=$row['nric'];
                                      }

                                        foreach ($mem_name as $reader_id => $nric) {
                                      ?>
                                              <option value="<?php echo $nric; ?>" ><?php
                                              echo $nric; ?></option>
                                      <?php
                                        }
                                      ?>
                                                    </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="street" class=" form-control-label">Return  Date</label>
                                                <input type="text" id="street" placeholder="Loan Date" class="form-control" name="loan_date" value="<?php echo date('Y-m-d')?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                    </div>
                                </div>
</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Lautech. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
