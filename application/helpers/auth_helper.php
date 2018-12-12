<?php
function autoriza() {
	$ci = get_instance();
	$nome_login = $ci->session->userdata("nome_login");
	if(!$nome_login) {
		redirect('dashboard/login');
	}
	return 1;
}