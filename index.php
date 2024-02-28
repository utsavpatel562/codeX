<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Login | CodeX</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>  
     <style>
	    body{
			background-image: url('img/forlognew.jpg');
			overflow: hidden;
            background-size: cover;
		}
     </style>	 
  </head>
  <body class="antialiased">
    <div class="wrapper">	 
    <div class="col-md-4" style="margin:80px auto;">
	<?php 
	 if(isset($_REQUEST['error']))
	 { ?><div class="alert alert-important alert-danger alert-dismissible" role="alert" style="margin:auto; margin-bottom:10px; border-radius:10px;">
  <div class="d-flex">
    <div>
    </div>
    <div>
      Invalid Login Details. Please Try Again
    </div>
  </div>  
</div> <?php 
     }
	 ?>
	 <?php 
	 if(isset($_REQUEST['success']))
	 { ?><div class="alert alert-important alert-success alert-dismissible" role="alert" style="margin:auto; margin-bottom:10px; border-radius:10px;">
  <div class="d-flex">
    <div>
    </div>
    <div>
      Successfully Registered. Please Login!!!
    </div>
  </div>  
</div> <?php 
     }
	 ?>
              <div class="card" style="border-radius:10px; background:whitesmoke;">                
                <div class="card-body">
                  
                    <div class="form-group mb-3 row">
                      <h2 style="margin-bottom:30px; font-weight:800;">CodeX Login<br>
					  <b style="font-size:15px;">Don't have account then </b>
					  <a href="register.php" style="font-size:15px;color:blue;"><b>Create account</b></a></h2>		
                      <label class="form-label col-3 col-form-label">Email ID <i style="color:red;">*</i></label>
                      <div class="col">
                      <form method="POST" action="login_process.php">
                        <input type="email" name="email" autocomplete="off" required class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                    </div>
                    <div class="form-group mb-3 row">
                      <label class="form-label col-3 col-form-label">Password <i style="color:red;">*</i></label>
                      <div class="col">
                        <input type="password" name="password" autocomplete="off" required class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-footer">
                      <center><input type="submit" name="submit" class="btn btn-success"></center>
                      </form>
                    </div>

                </div>
              </div>
            </div>
</div>