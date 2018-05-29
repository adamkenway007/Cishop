<?php
class Site_security extends MX_Controller
{

	function __construct() {
	parent:: __construct();
	}

	function _make_sure_is_admin() {
		$is_admin = TRUE;

		if ($is_admin!=TRUE) {
			redirect('site_security/not_allowed');
		}
	}

	function not_allowed() {
		echo "You are not not allowed to be here.";
	}
}
