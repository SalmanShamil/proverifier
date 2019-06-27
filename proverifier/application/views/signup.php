<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--=======Font Open Sans======-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--StyleSheet-->
	<link rel="stylesheet" href="<?php echo base_url('assets/signup/css/signupstyle.css') ?>">
</head>
<body>
<div class="forms">
	<ul class="tab-group">
		<li class="tab active"><a href="#login">General User</a></li>
		<li class="tab"><a href="#signup">Verifier</a></li>


	</ul>
		<form method="POST" action="<?php echo site_url('signup/general_signup');?>" id="login">
	      <h1>Sign Up as General User</h1>
	      <div class="input-field">

	      	<label for="gname">Name:</label> 
	        <input type="text" name="gname" required="name" value="<?php echo isset($signup[0]['gname']) ? $signup[0]['gname']: set_value('gname');?>"/>
	        
	        <label for="username">Username:</label> 
	        <input type="text" name="gusername" required="username" value="<?php echo isset($signup[0]['gusername']) ? $signup[0]['gusername']: set_value('gusername');?>" />

	        <?php echo form_error('gusername', '<p class="error">', '</p>'); ?>
	        
	        <label for="email">Email:</label> 
	        <input type="email" name="gemail" value="<?php echo isset($signup[0]['gemail']) ? $signup[0]['gemail']: set_value('gemail');?>" required="email"/>

	        <?php echo form_error('gemail', '<p class="error">', '</p>'); ?>
	        
	        <label for="password">Password:</label> 
	        <input type="password" name="gpassword" required/>
	        <label for="password">Confirm Password:</label> 
	        <input type="password" name="gre_pass" required/>

	        <?php echo form_error('gre_pass', '<p class="error">', '</p>'); ?>

	        <input type="submit" name="gsubmit_signup" value="Sign up" class="button" />
	      </div>
	  </form>
	  <form method="POST" action="<?php echo site_url('signup/verifier_signup');?>" id="signup">
	      <h1>Sign Up</h1>
	      <div class="input-field">
	      	<label for="name">Verifier Name:</label> 
	        <input type="text" name="vname" value="<?php echo isset($signup[0]['vname']) ? $signup[0]['vname']: set_value('vname');?>" required="name"/>

	        <label for="username">Username:</label>
	        <?php echo form_error('vusername', '<p class="error">', '</p>'); ?>
	        <input type="text" name="vusername" value="<?php echo isset($signup[0]['vusername']) ? $signup[0]['vusername']: set_value('vusername');?>" required="username"/>

	        <label for="email">Email:</label>
	        <?php echo form_error('vemail', '<p class="error">', '</p>'); ?>
	        <input type="email" name="vemail" value="<?php echo isset($signup[0]['vemail']) ? $signup[0]['vemail']: set_value('vemail');?>" required="email"/>

	        <label for="password">Password:</label>
	        <?php echo form_error('vre_pass', '<p class="error">', '</p>'); ?>
	        <input type="password" name="vpassword" required/>
	        <label for="password">Confirm Password:</label> 
	        <input type="password" name="vre_pass" required/>
	        <input type="submit" name="vsubmit_signup" value="Sign up" class="button" />
	      </div>
	  </form>
	  <span>Already have an account?<a href="<?php echo site_url('login')?>">Login here</a></span>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){
	  $('.tab a').on('click', function (e) {
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  var href = $(this).attr('href');
	  $('.forms > form').hide();
	  $(href).fadeIn(500);
	});
});
</script>
</body>
</html>