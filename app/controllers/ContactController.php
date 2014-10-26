<?php 

class ContactController extends Controller
{
	public function actionIndex()
	{
		$this->view('contact/index');
	}
}