<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" rev="stylesheet" href="<?php echo base_url();?>css/login.css" />
<title>GIGA CHEMIST - <?php echo $this->lang->line('login_login'); ?></title>
<script src="<?php echo base_url();?>js/jquery-1.2.6.min.js" type="text/javascript" language="javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#login_form input:first").focus();
});
</script>
</head>
<body>

<div class="login_brand_header">
	<div class="login_logo_badge">
		<span class="login_logo_cross">+</span>
	</div>
	<h1>GIGA CHEMIST</h1>
	<p class="login_subtitle">Pharmacy Management & Point of Sale</p>
</div>

<?php echo form_open('login') ?>
<div id="container">
	<div id="top">
		<?php echo $this->lang->line('login_login'); ?>
	</div>
	<div id="login_form">
		<?php if(validation_errors()) { ?>
			<div class="error"><?php echo validation_errors(); ?></div>
		<?php } ?>

		<div id="welcome_message">
			<?php echo $this->lang->line('login_welcome_message'); ?>
		</div>
		
		<div class="form_field_group">
			<label class="form_field_label" for="username"><?php echo $this->lang->line('login_username'); ?></label>
			<div class="form_field">
				<?php echo form_input(array(
					'name'=>'username',
					'id'=>'username',
					'placeholder'=>'Enter username',
					'size'=>'20')); ?>
			</div>
		</div>

		<div class="form_field_group">
			<label class="form_field_label" for="password"><?php echo $this->lang->line('login_password'); ?></label>
			<div class="form_field">
				<?php echo form_password(array(
					'name'=>'password',
					'id'=>'password',
					'placeholder'=>'Enter password',
					'size'=>'20')); ?>
			</div>
		</div>
		
		<div id="submit_button">
			<?php echo form_submit('loginButton','Sign In to POS'); ?>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

<div class="login_footer_note">
	Secure Offline Pharmacy System &copy; <?php echo date('Y'); ?> GIGA CHEMIST
</div>

</body>
</html>
