<?php
error_reporting(0);
$link = mysql_connect("localhost", "root", "")or die("Could not connect: " . mysql_error());
mysql_select_db('library', $link) or die ( mysql_error());


switch ($_GET['action']) {
case "edit":
$updatesql = "SELECT * FROM book
          WHERE book_id = '" . $_GET['id'] . "'";
$result = mysql_query($updatesql)
or die("Invalid query: " . mysql_error());
$row = mysql_fetch_array($result);
$book_id = $row['book_id'];
$slno = $row['slno'];
$title = $row['title'];
$media_type = $row['media_type'];
$author=$row['author'];
$publication=$row['publication'];
$edition=$row['edition'];
$year=$row['year'];
$pages=$row['pages'];
$total_holding=$row['total_holding'];
$location=$row['location'];
$category=$row['category'];
$sub_category=$row['sub_category'];
$related_name=$row['related_name'];
$book_remark=$row['book_remark'];


break;

default:
$slno =  "";
$title =  "";
$media_type =  "";
$author= "";
$publication= "";
$edition= "";
$year="";
$pages="";
$total_holding= "";
$location= "";
$location= "";
$category= "";
$sub_category= "";
$related_name= "";
$book_remark= "";

break;
}
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Book</strong>
                                        <small> Data</small>
                                    </div>
                                    <form action="book_update_comit.php?action=<?php
                                       echo $_GET['action'];?>&type=book&id=<?php
                            echo $_GET['id']; ?>" method="post">
                                    <div class="card-body card-block row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="snumber" class=" form-control-label">Serial Number</label>
                                            <input type="text" id="snumber" class="form-control" name="slno" value="<?php echo $slno; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class=" form-control-label">Title</label>
                                            <input type="text" id="title"  class="form-control" name="title" value="<?php echo $title; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="Media" class=" form-control-label">Media Type</label>
                                            <select name="media_type" class="form-control" id="Media">
                                              <option value="<?php echo $media_type; ?>" selected>
                                                         <?php echo $media_type ;?></option>
                                                             <option value="Book">Book</option>
                                                             <option value="Text Book">Text Book</option>
                                                             <option value="CD">CD</option>
                                                             <option value="Magazine">Magazine</option>
                                                             <option value="eBook">eBook</option>
                                                </select>
                                        </div>
                                        <?php $author_sql="select * from author";
                                       $result=mysql_query($author_sql) or die (mysql_error());
                                       while ($row=mysql_fetch_array($result)) {
                                           $auth_name[$row['auth_id']]=$row['auth_name'];
                                       }
                                             ?>

                                        <div class="form-group">
                                            <label for="Author" class=" form-control-label">Author Name</label>
                                            <select name="author" class="form-control" id="Author">

                                              <?php
                                                foreach ($auth_name as $auth_id => $auth_name) {
                                              ?>
                                                       <option  value="<?php echo $auth_name ; ?>"selected>
                                                               <?php echo $auth_name ;?></option>

                                              <?php
                                                }
                                              ?>
                                                  <option  value="<?php echo $author ; ?>"selected><?php echo $author ;?></option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="publication" class=" form-control-label">Publication</label>
                                            <input type="text" id="publication"  class="form-control" name="publication" value="<?php echo $publication; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label for="edition" class=" form-control-label">Edition [ Ex: 5th edition ]</label>
                                            <input type="text" id="edition"  class="form-control" name="edition" value="<?php echo $edition; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label for="year" class=" form-control-label">Year of Publication</label>
                                            <input type="text" id="year"  class="form-control" name="year" value="<?php echo $year; ?>" />
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="pages" class=" form-control-label">Total Number of Pages</label>
                                            <input type="text" id="pages"  class="form-control" name="pages" value="<?php echo $pages; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label for="total_holding" class=" form-control-label">Number of Books Available</label>
                                            <input type="text" id="total_holding"  class="form-control" name="total_holding" value="<?php echo $total_holding; ?>" />
                                        </div>

                                        <?php $cat_sql="select * from location";
                                      $result=mysql_query($cat_sql) or die (mysql_error());
                                      while ($row=mysql_fetch_array($result)) {
                                          $loc_name[$row['loc_id']]=$row['loc_name'];
                                      }
                                            ?>

                                            <div class="form-group">
                                                <label for="location" class=" form-control-label">Location</label>
                                                <select name="location" class="form-control" id="location">

                                                  <?php
                                                    foreach ($loc_name as $loc_id => $loc_name) {
                                                  ?>
                                                          <option value="<?php echo $loc_name; ?>"selected >
                                                      <?php echo $loc_name; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                                   <option value="<?php echo $location; ?>" selected ><?php echo $location; ?></option>
                                                                </select>
                                                              </div>

                                                              <?php $cat_sql="select * from category";
                                                              $result=mysql_query($cat_sql) or die (mysql_error());
                                                              while ($row=mysql_fetch_array($result)) {
                                                                  $cat_name[$row['cat_id']]=$row['cat_name'];
                                                              }
                                                                    ?>
                                            <div class="form-group">
                                              <label for="category" class=" form-control-label">Category</label>                              <select name="category" class="form-control" id="category">

                                                <?php
                                                  foreach ($cat_name as $cat_id => $cat_name) {
                                                ?>
                                                        <option value="<?php echo $cat_name; ?>"selected >
                                                    <?php echo $cat_name; ?></option>
                                                <?php
                                                  }
                                                ?>
                                                 <option value="<?php echo $category; ?>" selected ><?php echo $category; ?></option>
                                                              </select>
                                                            </div>

                                                <div class="form-group">
                                                <label for="sub_category" class=" form-control-label">Sub Category</label>                              <select name="sub_category" class="form-control" id="sub_category">
                                                  <?php $sub_cat_sql="select * from category";
                                                  $result=mysql_query($sub_cat_sql) or die (mysql_error());
                                                  while ($row=mysql_fetch_array($result)) {
                                                      $sub_cat_name[$row['cat_id']]=$row['cat_name'];
                                                  }
                                                    foreach ($sub_cat_name as $cat_id => $cat_name) {
                                                  ?>
                                                          <option value="<?php echo $cat_name; ?>"selected ><?php
                                                          echo $cat_name; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                              <option value="'<?php echo $sub_category; ?>"selected ><?php echo $sub_category; ?></option>
                                            </select>                </div>

                                            <div class="form-group">
                                                <label for="related_name" class=" form-control-label">Related name</label>
                                                <input type="text" id="related_name"  class="form-control" name="related_name" value="<?php echo $related_name; ?>" />
                                            </div>
                                        <div class="form-group">
                                                <label for="book_remark" class=" form-control-label">Comment</label>
                                                <textarea name="textarea-input" id="book_remark" rows="3" placeholder="Comment..." class="form-control" name="book_remark"><?php echo $book_remark; ?></textarea>
                                        </div>
                                    </div>
                                  </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update
                                        </button>
                                    </div>
                                </div>
                              </form>
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
