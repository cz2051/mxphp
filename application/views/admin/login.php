<html>
<head>
<title>用户登录</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/index/login'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
