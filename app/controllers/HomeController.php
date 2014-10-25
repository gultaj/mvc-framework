<?php 

class HomeController extends Controller
{


	public function actionIndex($name = '')
	{
		echo $name;
	}
}