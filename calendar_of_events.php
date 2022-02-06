<?php include('header_dashboard.php'); ?>
<style>
    .help_1{
        height: 100%;
        width: 100%;
        margin-top: 20px;
    }
    .ins{
        margin-left:10px;
        margin-top: 20px;
    }
</style>
    <body id="class_div">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted">
                                        <p class="pull-left">Sign in and Sign up as student</p>
                                        <a href="index.php"><i class="icon-arrow-left pull-right muted"> Back</i></a>
                                    </div>
                                   
								</div>
                                    <p class="ins">1. If you have previously logged into our site enter your Username and Password</p>
                                    <img class="help_1" src="admin/images/login.PNG" alt="">
                                    <p class="ins">2. If you have not previously logged into our system then click on “[Sign up as student/Sign up as teaher]” in the homepage.</p>
                                    <p class="ins">3. This will take you to the registration page. Please fill in all the boxes and hit the sign in button.</p>
                                    <img class="help_1" src="admin/images/signup_student.PNG" alt="">
                                    <img class="help_1" src="admin/images/signup_teacher.PNG" alt="">
                                    <p class="ins">Your information is already saved by the administrator of the site, once the system checked if you are a valid user you will be directed to the homepage.  This is typically very quick!  Once registered, you can simply login to the webpage for our sample tracking and login with your user information and password.</p>
                                <div class="span11">
								   
                                </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>