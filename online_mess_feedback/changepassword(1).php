
<?PHP
 include 'connect.php';
 session_start();
 if(!isset($_SESSION['student'])){
  header('location:logout.php');
 }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/db8157b2f3.js" crossorigin="anonymous"></script>
</head>
<body>
<!--===============================================================================================-->
<style>
  html {
      position: relative;
      min-height: 100%;
  }
  body {
      background: radial-gradient(  white, lightblue);
  }
  body a {
    text-decoration: none;
  }
      
</style>
<!--===============================================================================================-->
<body>
<nav class="shadow navbar navbar-expand-lg navbar-dark fixed-top" style="background-image:linear-gradient(to bottom, #a6e9af,#7cc4ee) !important;">
        <a class="navbar-brand" href="#">
          
            <span style="font-size:20px;font-weight:bold; color:black !important;">ONLINE MESS FEEDBACK SYSTEM</span>
        </a>
        <button class="navbar-toggler bg-warning shadow" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link link " href="home.html">
                    Home <i class="fa-solid fa-house-user"></i>
                </a>
                <a class="nav-link link active" href="feedback.html">
                    Feedback
                    <i class="fa-solid fa-comments"></i>
                </a>
                <a class="nav-link link" href="complaint.html">
                    Complaint
                    <i class="fa-solid fa-circle-exclamation"></i>
                </a>
                <a class="nav-link link" href="disp_timetable.php">
                    Time Table
                    <i class="fa-solid fa-table"></i>
                </a>
                <a class="nav-link link" href="changepassword.php">
                    Change Password
                    <i class="fa-solid fa-key"></i>
                </a>
                <a class="nav-link link" href="#logoutModal" data-toggle="modal" data-target="#logoutModal"</a>
                    Logout
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div>
      </nav>

<section >
    <main class="content-wrapper">
  <!--===================================================================================================================================================-->
 <!--===================================================================================================================================================-->
 <br><br><br>
 <div class="container-fluid" style="margin-top:140px !important" >
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-heading">
        </div>

        <div class="modal-body shadow">
        <br>
          <h2 class="text-center title">Change Password</h2>
          <br>
          <form action="changepassworddata.php" role="form" method="POST">

			  <div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon">
				  <span class="glyphicon glyphicon-user"></span>
				  </span>
				  <input  type="password"  name="oldpassword" class="form-control rounded-pill"  placeholder="Old Password" required />
				</div>
			  </div>
			  <div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon">
				  <span class="glyphicon glyphicon-user"></span>
				  </span>
				  <input  type="password"  name="newpassword" class="form-control rounded-pill"  placeholder="New Password" required />
				</div>
			  </div>
			  <div class="form-group">
				<div class="input-group">
				  <span class="input-group-addon">
				  <span class="glyphicon glyphicon-user"></span>
				  </span>
				  <input  type="password"  name="confirmpassword" class="form-control rounded-pill"  placeholder="Confirm Password" required />
				</div>
			  </div>

            <br>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary rounded-pill ">Submit</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
  
  </div>
  <div style="width: 25% !important;margin-left:40% !important;" class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog mt-5">
					<div class="modal-content">
						<div class="modal-body text-center">
							<div id="student">
								<div class="pl-3 text-danger">
									<h3>LOGOUT</h3>
								</div>
								<p class="text-bold">Do you really want to logout?</p>
								<div class="d-flex flex-row justify-content-center">
									<form action="logout.php">
										<button type="submit" class="mr-3 btn btn-danger">Yes</button>
									</form>
									<form action="changepassword.php" method="post">
									<button type="submit" class="btn btn-success">No</button>
									</form>
								</div>
							</div>
						</div>
	
					</div>
				</div>
			</div>
  </main>
</section>
</body>

</html>
