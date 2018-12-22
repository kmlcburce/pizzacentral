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
          <div>
            <h2>Products</h2>
            <form class="table">
              <table class="table table-striped table-sm">
                  <thead>
                      <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Description</td>
                          <td>Type</td>
                          <td>Price</td>
                          <td>Delete</td>
                          <td>Update</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($fetch_product_data->num_rows() >0) 
                      {
                        foreach ($fetch_product_data->result() as $row) {
                          ?>
                          <tr>
                            <td><?php echo $row->prod_id; ?></td>
                            <td><?php echo $row->prod_name; ?></td>
                            <td><?php echo $row->prod_desc; ?></td>
                            <td><?php echo $row->prod_type; ?></td>
                            <td><?php echo $row->prod_price; ?></td>
                            <td><a href="#" class="delete_product" id="<?php echo  $row->prod_id; ?>">Delete</a></td>
                            <td><a href="<?php echo base_url(); ?>Admin/update_product/<?php echo  $row->prod_id; ?>">Edit</a></td>
                          </tr>
                          <?php 
                        }
                      }
                      else{
                        ?>
                        <tr>
                          <td colspan="5">No Data Found</td>
                        </tr>
                        <?php
                      }
                      ?>
                  </tbody>
              </table>
            </form>
             <form class="add_prod" method="post" action="<?php echo base_url()?>Admin/add_product_validation">
              <h4>Add Product</h4>
              <?php
                if ($this->uri->segment(2)=="added_prod") {
                    echo '<p class="text-success">Product Added</p>';
                  }  
                ?>
              <input type="text" name="ap_prod_name" placeholder="Product Name" class="form-control">
              <span class="text-danger"><?php echo form_error("ap_prod_name");?></span>
              <input type="text" name="ap_prod_desc" placeholder="Description" class="form-control">
              <span class="text-danger"><?php echo form_error("ap_prod_desc");?></span>
              <input type="text" name="ap_prod_price" placeholder="Price" class="form-control">
              <span class="text-danger"><?php echo form_error("ap_prod_price");?></span>
              <table>
                <tr>
                  <td><input type="radio" name="ap_prod_type" value="pizza"><p>Pizza</p></td>
                  <td><input type="radio" name="ap_prod_type" value="pasta"><p>Pasta</p></td>
                  <td><input type="radio" name="ap_prod_type" value="salad"><p>Salad</p></td>
                  <td><input type="radio" name="ap_prod_type" value="dessert"><p>Dessert</p></td>
                </tr>
              </table>
              <span class="text-danger"><?php echo form_error("ap_prod_type");?></span>
              <input type="submit" name="ap_sub" value="Submit">
             </form>
             
             <?php
              if (isset($product_data)) 
              {
                foreach ($product_data->result() as $row) 
                {
                  ?>
                  <h4>Edit Product</h4>
                  <form class="edit_prod">
                    <input type="text" name="prod_name" value="<?php echo $row->prod_name; ?>" placeholder="Product Name">
                    <span class="text-danger"><?php echo form_error("prod_name");?></span>
                    <input type="text" name="prod_desc" value="<?php echo $row->prod_desc; ?>" placeholder="Description">
                    <input type="text" name="prod_price" value="<?php echo $row->prod_price; ?>" placeholder="Price">
                    <input type="hidden" name="hidden_id" value="<?php echo $row->prod_id; ?>">
                    <input type="submit" name="update" value="Update">
                  </form>
              <?php
                }
              }

             ?>
              
            
          </div>
<br>
<br>
<!-- Branches -->
          <div>
            <h2>Branches</h2>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                  <thead>
                      <tr>
                          <td>ID</td>
                          <td>Name</td>
                          <td>Address</td>
                          <td>Delete</td>
                          <td>Update</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      if($fetch_branch_data->num_rows() >0) 
                      {
                        foreach ($fetch_branch_data->result() as $row) {
                          if($row->u_type == "1"){


                          ?>
                          <tr>
                            <td><?php echo $row->u_id; ?></td>
                            <td><?php echo $row->u_name; ?></td>
                            <td><?php echo $row->u_email; ?></td>
                            <td><a href="#" class="delete_branch" id="<?php echo  $row->u_id; ?>">Delete</a></td>
                          </tr>
                          <?php 
                          }
                        }
                      }
                      else{
                        ?>
                        <tr>
                          <td colspan="3">No Data Found</td>
                        </tr>
                        <?php
                      }
                      ?>
                  </tbody>
                  
              </table>
            </div>

            <form class="add_branch" method="post" action="<?php echo base_url()?>Admin/add_branch_validation">
              <h4>Add Branch</h4>
                <?php
                if ($this->uri->segment(2)=="added_bran") {
                    echo '<p class="text-success">Branch Added</p>';
                  }  
                ?>
                <input type="text" name="ab_username" placeholder="Username" class="form-control">
                <span class="text-danger"><?php echo form_error("ab_username");?></span>
                <input type="password" name="ab_password" placeholder="Password" class="form-control">
                <span class="text-danger"><?php echo form_error("ab_password");?></span>
                <input type="text" name="ab_address" placeholder="Address" class="form-control">
                <span class="text-danger"><?php echo form_error("ab_address");?></span>
                <input type="submit" name="ab_sub" value="Submit">
            </form>
            <form class="edit_branch">
              <h4>Edit Branch</h4>
              <input type="edit_id" name="ID" class="form-control">
              <input type="button" name="get_id" value="Find">
              <table>
                <tr>
                 
                </tr>
              </table>
              <input type="text" name="username" placeholder="Username">
              <input type="text" name="password" placeholder="Password">
              <input type="text" name="cpass" placeholder="Confirm Password">
              <input type="text" name="address" placeholder="Address">
              <input type="submit" name="e_sub2" value="Submit">
            </form>
           
          </div>
          
<br>
<br>
<!-- Franchises -->
          <div>
            <h2>Franchises</h2>
            <form class="table">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Delete</th>
                  </tr>
                </thead>
                  
                  <tbody>
                      <?php 
                      if($fetch_branch_data->num_rows() >0) 
                      {
                        foreach ($fetch_branch_data->result() as $row) {
                          if($row->u_type == "2"){


                          ?>
                          <tr>
                            <td><?php echo $row->u_id; ?></td>
                            <td><?php echo $row->u_name; ?></td>
                            <td><?php echo $row->u_email; ?></td>
                            <td><a href="#" class="delete_branch" id="<?php echo  $row->u_id; ?>">Delete</a></td>
                          </tr>
                          <?php 
                          }
                        }
                      }
                      else{
                        ?>
                        <tr>
                          <td colspan="3">No Data Found</td>
                        </tr>
                        <?php
                      }
                      ?>
                  </tbody>
              </table>
            </form>
            <form class="add_franchise" method="post" action="<?php echo base_url()?>Admin/add_franchise_validation">
              <h4>Add Franchise</h4>
              <?php
                if ($this->uri->segment(2)=="added_fran") {
                    echo '<p class="text-success">Franchise Added</p>';
                  }  
                ?>
              <input type="text" name="af_username" placeholder="Username" class="form-control">
               <span class="text-danger"><?php echo form_error("af_username");?></span>
              <input type="password" name="af_password" placeholder="Password" class="form-control">
               <span class="text-danger"><?php echo form_error("af_password");?></span>
              <input type="text" name="af_email" placeholder="Email" class="form-control">
               <span class="text-danger"><?php echo form_error("af_email");?></span>
              <input type="button" name="af_sub" value="Submit">
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


          </div>
          
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

    <!-- Delete Script-->
    <script>
      $(document).ready(function(){
        $('.delete_branch').click(function(){
          var id = $(this).attr("id");
          if(confirm("Are you sure you want to delete this?")){
            window.location="<?php echo base_url();?>Admin/delete_branch/"+id;
          }
          else{
            return false;
          }
        });
      });
    </script>
    <script>
      $(document).ready(function(){
        $('.delete_product').click(function(){
          var id = $(this).attr("id");
          if(confirm("Are you sure you want to delete this?")){
            window.location="<?php echo base_url();?>Admin/delete_product/"+id;
          }
          else{
            return false;
          }
        });
      });
    </script>
  </body>
</html>
