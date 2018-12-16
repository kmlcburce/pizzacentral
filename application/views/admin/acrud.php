<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/dashboard.css')?>" rel="stylesheet">
  /head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <h2>Section title</h2>
          <div class="table-responsive">
    <?php
        
                $conn = mysqli_connect("localhost","root","","pizzacentral");
                if(!$conn){
                        die('Not connected to Database'.mysqli_connect_error());
                }else{

                        $price = mysqli_query($conn,"SELECT * FROM price_list LEFT JOIN product_profile product_profile.prod_id = price_list.prod_id");
                        if(mysqli_num_rows($price) > 0){
                        
                        while($row = mysqli_fetch_array($price)){
                               
                        ?>
        <form class="table">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <td>ID</td><td>Name</td><td>Address</td><td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
            </table>
        </form>
        <form class="add_prod">
            <input type="text" name="fran_name" placeholder="Pizzeria Name">
            <input type="text" name="prod_name" placeholder="Product Name">
            <input type="text" name="prod_desc" placeholder="Description">
            <input type="text" name="prod_price" placeholder="Price">
            <input type="radio" name="prod_type" value="pizza">
            <input type="radio" name="prod_type" value="pasta">
            <input type="radio" name="prod_type" value="salad">
            <input type="radio" name="prod_type" value="dessert">
            <input type="button" name="sub1" placeholder="add">
        </form>
        <form class="add_branch">
            <input type="text" name="fran_name" placeholder="Pizzeria Name">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="cpass" placeholder="Confirm Password">
            <input type="text" name="address" placeholder="Address">
            <input type="button" name="sub2" placeholder="add">
        </form>
        <form class="add_franchise">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="cpass" placeholder="Confirm Password">
            <input type="button" name="sub3" placeholder="add">
        </form>
        </div>
        </main>
      </div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/admin/jquery-3.3.1.slim.min.js.download"')?> integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="<?php echo base_url('assets/admin/popper.min.js.download')?>"></script>
    <script src="<?php echo base_url('assets/admin/bootstrap.min.js.download')?>"></script>

    <!-- Icons -->
    <script src="<?php echo base_url('assets/admin/feather.min.js.download')?>"></script>
    <script>feather.replace()</script>

    
    
    
  

</body></html>