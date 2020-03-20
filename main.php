<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<link rel="stylesheet" href="css/style.css">


<div style="background-color: #ffffff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin: 50px 0px 50px 0px;  width: 50%; padding: 5vh 0vh 5vh 0vh;">
  <img src="<?php echo $_SESSION["user_image"] ?>" alt="profile pic" style="width:40%; margin: 0 auto;">
  <div style="text-align: center;
  padding: 10px 20px;">
  <h2><?php echo $_SESSION['user_email_address'] ?></h2>
  </div>
</div>
<h1>Welcome, <?php echo $_SESSION['user_first_name'] ?> <?php echo $_SESSION['user_last_name'] ?>! </h1>

<br><br>
<a href="logout.php"><button type = "button" class="btn-danger btn-rounded mdi mdi-logout" >Logout</button></a>


<script src="vendors/base/vendor.bundle.base.js"></script>
<script src="vendors/chart.js/Chart.min.js"></script>
<script src="vendors/datatables.net/jquery.dataTables.js"></script>
<script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/data-table.js"></script>
<script src="js/jquery.dataTables.js"></script>
<script src="js/dataTables.bootstrap4.js"></script>
