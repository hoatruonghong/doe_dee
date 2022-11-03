<?php
    session_start();
    ob_start();
    include "../model/pdo.php";
    include "../model/user.php";
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $role = check_user($user, $pass);
        $_SESSION['role'] = $role;
        if($role==1) header('location: index.php');
        else 
        {
            $txt_error = "Username or Password is invalid!";
        }
        
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cultura is a Education HTML Template">
    <meta name="keywords" content="	classes, college, course, courses, educational, learning, online courses, revolution slider, school, seminar, tutorials, university, workshop">
    <meta name="author" content="regaltheme.com">
    <title>Login</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/hcmut.png">
    <!-- style css -->
    <link rel="stylesheet" href="../style.css">
    <!-- modernizr js -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Wrapper Start -->
    <div class="wrapper">
        
        <!-- Login Section Start -->
		<section class="login-area section-padding white-bg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-7 col-text-center">
						<div class="enter-box">
							<h3 class="mb-35">Login with your admin account</h3>
							<form class="custom-input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
								<input type="text" name="username" placeholder="User Name"/>
								<input type="password" name="password" placeholder="Password" />
                                <input type="submit" name="dangnhap" value="Đăng nhập" />       
                                <?php
                                    if((isset($txt_error))&&($txt_error != "")){
                                        echo "<font color='red'> ".$txt_error." </font>";
                                    }
                                ?>                         
							</form>

						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Login Section End -->
        
    </div>
    <!-- Wrapper Start -->

    <!-- All JS Here -->
    <!-- jQuery Latest Version -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Form Validate -->
    <script src="../assets/js/jquery.validate.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="../assets/js/slick.min.js"></script>
    <!-- Swiper JS -->
    <script src="../assets/js/swiper.min.js"></script>
    <!-- Isotope JS -->
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <!-- Plugins JS -->
    <script src="../assets/js/plugins.js"></script>
    <!-- Progressbar JS -->
    <script src="../assets/js/progressbar.js"></script>
    <!-- main JS -->
    <script src="../assets/js/main.js"></script>
</body>

</html>