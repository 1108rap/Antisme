<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/Antisme.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Antisme Outsourcing Website
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="<?=base_url()?>assets/scss/_fileinput.scss" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="main-panel" style="min-height: 100vh; width:100%;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Antisme</a>
                </div>
                <div class="justify-content-end">
                    <p class="description"><?=date('l')?>, <?=date('d F Y')?></p>
                    <!-- <button type="button" class="btn btn-outline-primary btn-sm btn-round" >Home</button> -->
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        
        <!-- Content -->
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <!-- Login Form -->
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 login-form ">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-center">
                                                    <h4 class="card-title">Login</h4>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <p class="description text-center">Manage your resource,<br>sign-in now </p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?=site_url('Auth/loginprocess')?>" method="post">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Username</label>
                                                                <input type="username" name="username" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" name="password" class="form-control" id="password"  value="">
                                                                <input type="checkbox" onclick="ShowPassword()" class="mt-2">
                                                                <label>Show Password </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Action Button -->
                                                    <!-- <div class="row justify-content-center">
                                                        <a href="" class="description">forget password ?</a>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <a href="javascript:changeForm();" class="description">Create New Account</a>
                                                    </div> -->
                                                    <div class="row">
                                                        <div class="update ml-auto mr-auto">
                                                        <button type="submit" name="login" class="btn btn-sm btn-outline-success btn-round">Login</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Login Form -->
                            
                            <!-- Register Form -->
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 register-form">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row justify-content-center">
                                                    <h4 class="card-title">Registration</h4>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <p class="description text-center">Create new account, join with us<br>and grow up your business</p>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form action="<?=site_url('Account/Registration')?>" enctype="multipart/form-data" method="post">
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-5 pr-1">
                                                            <div class="form-group">
                                                                <label>Name / Company Name</label>
                                                                <input name="name" type="text" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 px-1">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input name="email" type="email" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 pl-1">
                                                            <div class="form-group">
                                                                <label>Phone / Telephone</label>
                                                                <input name="telephone" type="text" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-4 pr-1">
                                                            <div class="form-group">
                                                                <label>Username</label>
                                                                <input name="username" type="username" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 px-1">
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input name="password" type="password" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 pl-1">
                                                            <div class="form-group">
                                                                <label>Level</label>
                                                                <select name="level" id="level" onchange="disableinput()" class="form-control">
                                                                    <option></option>
                                                                    <option value="Client">Client</option>
                                                                    <option value="Employee">Employee</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6 pr-1">
                                                            <div class="form-group">
                                                                <label>Salary</label>
                                                                <input name="salary" type="text" id="salary" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pl-1">
                                                            <div class="form-group">
                                                                <label>Skills</label>
                                                                <input name="skills" id="skills" type="text" class="form-control"  value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-5 pr-1">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <textarea name="address" type="text" class="form-control"  value=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 pl-1">
                                                            <div class="form-group">
                                                                <label>About Me</label>
                                                                <textarea name="description" type="text" class="form-control"  value=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-4 mr-2 px-1">
                                                            <div class="form-group text-center">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new img-thumbnail" style="min-width: 200px; min-height: 150px;">
                                                                        <img src="<?=base_url()?>assets/img/default-avatar.png"  alt="No Photo">
                                                                    </div>
                                                                    <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                    <div>
                                                                        <span class="btn btn-outline-primary btn-round btn-sm btn-file">
                                                                            <span class="fileinput-new">Choose Photo</span>
                                                                            <span class="fileinput-exists">Change</span>
                                                                            <input type="file" name="photo">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Action Button -->
                                                    <div class="row">
                                                        <div class="update ml-auto mr-auto">
                                                        <button type="submit" class="btn btn-sm btn-outline-warning btn-round">Register</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <script>
                                                    function disableinput(){
                                                        if(document.getElementById("level").value == "Client") {
                                                            document.getElementById("salary").disabled = true;
                                                            document.getElementById("skills").disabled = true;
                                                        } else {
                                                            document.getElementById("salary").disabled = false;
                                                            document.getElementById("skills").disabled = false;
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Register Form -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
            <div class="container-fluid">
                <div class="row">
                <nav class="footer-nav">
                    <ul>
                    <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                    <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                    <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                    © 2020, made with <i class="fa fa-heart heart"></i> by Antareza
                    </span>
                </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url()?>assets/js/core/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/fileinput.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?=base_url()?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Show Password -->
  <script>
    function ShowPassword() {
        var passinput = document.getElementById("password");
        if (passinput.type === "password") {
            passinput.type = "text"
        } else {
            passinput.type = "password"
        }
    }
  </script>
</body>

</html>
