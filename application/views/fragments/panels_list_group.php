<?php foreach($this->config->item('navigation')['side'] as $listGroup) {
	$this->load->view('fragments/panel_list_group', $listGroup);
} ?>