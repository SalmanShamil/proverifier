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
	
		<form method="POST" action="<?php echo site_url('authentication/login_auth');?>" id="login">
	      <h1>Log in</h1>

	      <div style="color: red">
	      <?php

	      $msg = $this->session->userdata('message');

	       if($msg){
	       echo "<p>$msg</p>";
	       $this->session->unset_userdata('message');
	   	}
	    ?>
	    </div>
	    
	      <div class="input-field">
	      	<label for="username">Username:</label> 
	        <input type="text" name="username" required="username" value="<?php echo isset($login[0]['username']) ? $login[0]['username']: set_value('username');?>"/>
	        <?php echo form_error('username', '<p class="error">', '</p>'); ?>
	        
	        <label for="password">Password:</label> 
	        <input type="password" name="password" value="<?php echo isset($login[0]['password']) ? $login[0]['password']: set_value('password');?>" required/>
	        <?php echo form_error('password', '<p class="error">', '</p>'); ?>

	        <input type="submit" name="login" value="Log in" class="button" />
	        <p><a href="#">Forgot Password?</a></p>
	      </div>
	      <div><p>Don't have an acccount?<a href="signup"> Signup here</a></p></div>
	  </form>
	  </body>
</html>