<?php

class Controller_login extends Controller {

	function action_index()
	{
		$this->view->generate("login_view.php", "template_view.php");
	}
}