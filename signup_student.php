<?php include('header.php'); ?>
<head>
        <title>BSU - SC Homepage</title>

     <style>
		body{
       		 background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("admin/images/bsuscbg.png");
    	}
    	
    .bsutitle{
        color: white;
        margin-left: 20px    ;

    }
	
		</style>
		 <link rel="shortcut icon" type="image/png" href="LOGO.png">
</head>
  <body id="login">
    <div class="container">
	<div class="row-fluid">
	<div class="span6">
		<div class="title_index">
				<?php include('title_index.php'); ?>
		</div>
	</div>
	<div class="span6">
		<div class="pull-right">
				<?php include('student_signin_form.php'); ?>
		</div>
	</div>
    </div>
	<div class="row-fluid">
		<div class="span12">
			<div class="index-footer">
				<?php include('link.php'); ?>
			</div>
		</div>
	</div>
		   <!-- /container -->
		<?php include('footer.php'); ?>
    </div> <!-- /container -->
<?php include('script.php'); ?>
  </body>
</html>