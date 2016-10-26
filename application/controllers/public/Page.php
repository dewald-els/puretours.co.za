<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function index()
	{
		$this->get_page_content();
		$this->layout_public();
	}
}
