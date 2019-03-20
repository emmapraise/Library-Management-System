<?php
error_reporting(0);
$link=mysql_connect('localhost','root','') or die (mysql_error());
mysql_select_db("library") or die (mysql_error());
$query = "SELECT * FROM loan where loan_status = 'On Loan' order by loan_id";
$result = mysql_query($query,$link)
or die(mysql_error());
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
                        <a class="logo" href="index.html">
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
                <a href="#">
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
            </header>

            <!-- HEADER DESKTOP-->


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <div class="content">
                                                    <a class="js-acc-btn" href="#"><button class="au-btn au-btn-icon au-btn--blue">
                                                        <i class="zmdi zmdi-plus"></i>add item</button></a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">

                                                    <div class="account-dropdown__body">
                                                        <div class="account-dropdown__item">
                                                            <a href="member_record.php">
                                                                <i class="zmdi zmdi-account"></i>Add New Member</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="cat_record.php">
                                                                <i class="zmdi zmdi-group"></i>Add New Category</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="book_record.php">
                                                                <i class="zmdi zmdi-book"></i>Add New Book</a>
                                                        </div>
                                                        <div class="account-dropdown__item">
                                                            <a href="loc_record.php">
                                                                <i class="zmdi zmdi-map"></i>Add New Book Location</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Books On Loan</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                      <thead>
                                          <tr>
                                            <th >Loan SL No</th>
                                            <th>Book SL No</th>
                                            <th>Member ID</th>
                                            <th >Loan Date</th>
                                            <th >Loan Status</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        <?php

                                        while ($row = mysql_fetch_array($result)) {
                                        $loan_id = $row['loan_id'];
                                        $loan_book_slno = $row['loan_book_slno'];
                                        $loan_mem_name = $row['loan_mem_name'];
                                        $loan_date = $row['loan_date'];
                                        $loan_status=$row['loan_status'];

                                        echo "<tr>";
                                        echo "<td>".$loan_id."</td>";
                                        echo "<td >".$loan_book_slno."</td>";
                                        echo "<td>".$loan_mem_name."</td>";
                                        echo "<td>".$loan_date."</td>";
                                        echo "<td>".$loan_status."</td>";


                                        ?>
                                        <?php
                                        echo "</tr>";
                                        }
                                        ?>

                                      </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Member List</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                              <tbody>
                                                <tr>
                                                <td >Matric No</td>
                                                <td >Full Name</td>
                                              </tr>
                                                <?php
                                                $query = "SELECT * FROM member order by fname, lname";
                                                $result = mysql_query($query,$link)
                                                or die(mysql_error());
                                                $num_supp_name = mysql_num_rows($result);

                                                while ($row = mysql_fetch_array($result)) {

                                                $matric = $row['nric'];
                                                $fname = $row['fname'];
                                                $lname = $row['lname'];


                                                echo "<tr>";
                                                echo "<td>".$matric."</td>";
                                                echo "<td >".$fname.' '.$lname."</td>";


                                                ?>
                                                <?php
                                                echo "</tr>";
                                                }
                                                ?>
                                              </tbody>
                                            </table>
                                        </div>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
