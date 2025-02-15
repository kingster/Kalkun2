<div id="top_navigation_container">
	<div id="top_navigation_left">
		<span class="modem_status">
			<?php $this->load->view('main/notification');?>
		</span>
	</div>

	<div id="top_navigation_center">
		<?php echo date('l M dS, Y, h:i A');?>
	</div>

	<div id="top_navigation_right">
		<?php echo $this->session->userdata('username');?> |
		<a href="<?php echo site_url('settings/general');?>" id="setting"><?php echo lang('tni_settings'); ?></a> |
		<a href="<?php echo site_url('settings/filters');?>" id="filters"><?php echo lang('kalkun_filters'); ?></a> |
		<a href="<?php echo site_url('logout');?>" id="logout"><?php echo lang('kalkun_logout');?></a>
	</div>
</div>
