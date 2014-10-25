<?php 

class Application 
{

	protected $defaultController = 'home';
	protected $defaultAction     = 'index';
	protected $params            = [];

	public function __construct() 
	{
		$this->parseUrl();
	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}