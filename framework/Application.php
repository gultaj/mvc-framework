<?php 

class Application 
{

	protected $controller = 'HomeController';
	protected $action     = 'actionIndex';
	protected $params     = [];
	protected $appDir	  = '../app';

	public function __construct() 
	{
		$url = $this->parseUrl();

		if (file_exists($this->appDir . '/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
			$this->controller = ucfirst($url[0]) . 'Controller';
			unset($url[0]);
		}

		require_once $this->appDir . '/controllers/' . $this->controller . '.php';

		$this->controller = new $this->controller;

		if (isset($url[1])) {
			if (method_exists($this->controller, 'action' . ucfirst($url[1]))) {
				$this->action = 'action' . ucfirst($url[1]);
				unset($url[1]);
			}
		}

		$this->params = $url ? array_values($url) : [];

		call_user_func_array([$this->controller, $this->action], $this->params);	
	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}