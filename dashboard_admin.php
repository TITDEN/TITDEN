
<?php
	//Start Session
	session_start();
	//Import class.php
	require_once('inc/classdoe.php');
	//Instance Object
	$obj = new myclass;
	//Import restrict.php
	require_once('inc/restrict.php');
    if($_SESSION['Role']!=="doe"){
		//Redirect Page
		header('location:index.php');
    }
 ?>

<?php
  include 'headeradmin.php';
  include 'sidebar_Admin.php';
?>
  <div class="content-wrapper" style="min-height: 767.392px;">
    <!-- Main content --> 
  <section class="content-header">

      <!-- Main content -->
      <section class="content" style="margin: 15px 5px;">
        <div class="row">
         <div class="col-md-3 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">ខេត្ដ</span>
            </div>
            <input type="text"​ value="" class="form-control text-primary" placeholder="Username">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">ស្រុក</span>
            </div>
            <input type="text" value="" class="form-control text-primary" placeholder="Username">
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">ឃុំ</span>
            </div>
            <input type="text" value="" class="form-control text-primary" placeholder="Username">
          </div>
        </div>
        <div class="col-md-3 col-sm-12">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">ភូមិ</span>
            </div>
            <input type="text" value= "" class="form-control text-primary" placeholder="Username">
          </div>
        </div>
      </div>
      <div class="row" >
        <div class="col-lg-3 col-md-6" >
          <!-- small box -->
          <div class="small-box bg-aqua" style=" background-color: #17a2b8; ">
            <div class="inner" style="color:white;" >
              <h4>15</h4>

              <p>បុគ្គលិកសរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4> <?php 

                $result = mysqli_query($obj->fun_link(),"select count(1) FROM tbl_school");
                $row = mysqli_fetch_array($result);

                $total = $row[0];
                echo $total;

                mysqli_close($obj->pro_link);
                ?>
              <sup style="font-size: 16px"></sup></h4>

              <p>សាលារៀនសរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h4><?php 

                $result = mysqli_query($obj->fun_link(),"select count(1) FROM tbl_teacher");
                $row = mysqli_fetch_array($result);

                $total = $row[0];
                echo $total;

                mysqli_close($obj->pro_link);
                ?><sup style="font-size: 16px"></sup></h4>

              <p>គ្រូសរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h4>
                <?php 

                $result = mysqli_query($obj->fun_link(),"select count(1) FROM tbl_student");
                $row = mysqli_fetch_array($result);

                $total = $row[0];
                echo $total;

                mysqli_close($obj->pro_link);
                ?>
              </h4>

              <p>សិស្សសរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="classroom.php" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row" >
        <div class="col-lg-3 col-md-6" >
          <!-- small box -->
          <div class="small-box bg-aqua" style=" background-color: #17a2b8; ">
            <div class="inner" style="color:white;" >
              <h4>12</h4>

              <p>វត្ដមានបុគ្គិក</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h4>
                <?php 

                $result = mysqli_query($obj->fun_link(),"select count(1) FROM tbl_Users");
                $row = mysqli_fetch_array($result);

                $total = $row[0];
                echo $total;

                mysqli_close($obj->pro_link);
                ?>
                <sup style="font-size: 16px"></sup></h4>

              <p>អ្នកប្រើប្រាស់សរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h4>53<sup style="font-size: 16px"></sup></h4>

              <p>នាយកសរុប</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">មើលបន្ថែម<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
      </div>
    </section>
    <!-- /.content -->
    
  </div>

<?php
  include 'footer.php';
?> 
    <!--linkjqerrybootsrap-->
    <script src="BootStrap/js/bootstrap.bundle.js"></script>
    <script src="BootStrap/js/bootstrap.bundle.min.js"></script>
    <script src="BootStrap/js/bootstrap.js"></script>
    <script src="BootStrap/js/bootstrap.min.js"></script>
    <!--Endlinkjqerrybootsrap-->
     <!--បើកDiv Container-sm-->
   