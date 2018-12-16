<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin/dashboard.css')?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
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
<!-- Products -->
          <h2>Products</h2>

          <form class="table">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <td>ID</td><td>Name</td><td>Description</td><td>Price</td><td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
            </table>
          </form>
           <form class="add_prod">
            <h4>Add Product</h4>
            <input type="text" name="fran_name" placeholder="Pizzeria Name">
            <input type="text" name="prod_name" placeholder="Product Name">
            <input type="text" name="prod_desc" placeholder="Description">
            <input type="text" name="prod_price" placeholder="Price">
            <table>
              <tr>
                <td><input type="radio" name="prod_type" value="pizza"><p>Pizza</p></td>
                <td><input type="radio" name="prod_type" value="pasta"><p>Pasta</p></td>
                <td><input type="radio" name="prod_type" value="salad"><p>Salad</p></td>
                <td><input type="radio" name="prod_type" value="dessert"><p>Dessert</p></td>
              </tr>
            </table>
            <input type="button" name="a_sub1" value="Submit">
           </form>
           <form class="remove_prod">
            <h4>Remove Product</h4>
            <input type="text" name="remove_id" placeholder="ID">
            <input type="button" name="r_sub1" value="Submit">
           </form>
           <form class="edit_prod">
            <h4>Edit Product</h4>
             <input type="edit_id" name="ID">
             <input type="button" name="get_id" value="Find">
             <table>
              <tr>
               
              </tr>
             </table>
             <input type="text" name="fran_name" placeholder="Pizzeria Name">
             <input type="text" name="prod_name" placeholder="Product Name">
             <input type="text" name="prod_desc" placeholder="Description">
             <input type="text" name="prod_price" placeholder="Price">
             <table>
               <tr>
                 <td><input type="radio" name="prod_type" value="pizza"><p>Pizza</p></td>
                 <td><input type="radio" name="prod_type" value="pasta"><p>Pasta</p></td>
                 <td><input type="radio" name="prod_type" value="salad"><p>Salad</p></td>
                 <td><input type="radio" name="prod_type" value="dessert"><p>Dessert</p></td>
               </tr>
             </table>
             <input type="button" name="e_sub1" value="Submit">

           </form>
<br>
<br>
<!-- Branches -->
          <h2>Branches</h2>
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

          <form class="add_branch">
            <h4>Add Branch</h4>
              <input type="text" name="fran_name" placeholder="Pizzeria Name">
              <input type="text" name="username" placeholder="Username">
              <input type="text" name="password" placeholder="Password">
              <input type="text" name="cpass" placeholder="Confirm Password">
              <input type="text" name="address" placeholder="Address">
              <input type="button" name="a_sub2" value="Submit">
          </form>
          <form class="remove_branch">
            <h4>Remove Branch</h4>
            <input type="text" name="remove_id" placeholder="ID">
            <input type="button" name="r_sub2" value="Submit">
          </form>
          <form class="edit_branch">
            <h4>Edit Branch</h4>
            <input type="edit_id" name="ID">
            <input type="button" name="get_id" value="Find">
            <table>
              <tr>
               
              </tr>
            </table>
            <input type="text" name="fran_name" placeholder="Pizzeria Name">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="cpass" placeholder="Confirm Password">
            <input type="text" name="address" placeholder="Address">
            <input type="button" name="e_sub2" value="Submit">
          </form>
           
<br>
<br>
<!-- Franchises -->
          <h2>Franchises</h2>
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
            <form class="add_franchise">
              <h4>Add Franchise</h4>
              <input type="text" name="username" placeholder="Username">
              <input type="text" name="password" placeholder="Password">
              <input type="text" name="cpass" placeholder="Confirm Password">
              <input type="button" name="a_sub3" value="Submit">
            </form>
            
            <form class="remove_franchise">
              <h4>Remove Franchise</h4>
              <input type="text" name="remove_id" placeholder="ID">
              <input type="button" name="r_sub3" value="Submit">
            </form>

            <form class="edit_franchise">
              <h4>Edit Franchise</h4>
              <input type="edit_id" name="ID">
              <input type="button" name="get_id" value="Find">
              <table>
                <tr>
                 
                </tr>
              </table>
              <input type="text" name="username" placeholder="Username">
              <input type="text" name="password" placeholder="Password">
              <input type="text" name="cpass" placeholder="Confirm Password">
              <input type="button" name="e_sub3" value="Submit">
            </form>




            <br>
            <br>
            <br>
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
  </body>
</html>
