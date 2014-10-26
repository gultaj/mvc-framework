<?php 

class HomeController extends Controller
{


	public function actionIndex($name = '')
	{
		$user = $this->model('User');
		$user->name = $name;

		$this->view('home/index', [
			'name' => $user->name,
		]);
	}
}