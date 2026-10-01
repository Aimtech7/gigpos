<?php $this->load->view("partial/header"); ?>
<div id="page_title" style="margin-bottom:6px;"><?php echo $this->config->item('company'); ?> Dashboard</div>
<div id="page_subtitle"><?php echo $this->lang->line('common_welcome_message'); ?></div>

<div id="home_module_list">
	<?php
	foreach($allowed_modules->result() as $module)
	{
	?>
	<div class="module_item">
		<a href="<?php echo site_url("$module->module_id");?>">
			<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="<?php echo $this->lang->line("module_".$module->module_id) ?>" />
		</a>
		<a href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
		<div class="module_item_desc"><?php echo $this->lang->line('module_'.$module->module_id.'_desc');?></div>
	</div>
	<?php
	}
	?>
</div>
<?php $this->load->view("partial/footer"); ?>