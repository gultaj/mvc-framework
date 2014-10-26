<?php 

class FilmsController extends Controller
{
	public function actionIndex() 
	{
		$films = $this->model('Films')->getFilms();
		$this->view('films/index', [
			'films' => $films,
		]);
	}
}