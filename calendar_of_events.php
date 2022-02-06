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
                                    <p class="ins">2. If you have not previously logged into our system then click on </p><a href="">“[New users register here]”</a> <p>found below the Harvard Seal at the bottom of the page.</p>
                                    <img class="help_1" src="admin/images/signup_student.PNG" alt="">
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