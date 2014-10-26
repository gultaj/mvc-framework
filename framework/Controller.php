<?php 

class Controller
{
	public $layout = 'layout/index';

	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	public function view($view, $data = [])
	{
		extract($data);
		$header = '../app/views/layout/header.php';
		$content = '../app/views/' . $view . '.php';
		$footer = '../app/views/layout/footer.php';
		include_once '../app/views/' . $this->layout . '.php';
	}
}