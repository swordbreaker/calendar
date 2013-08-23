<?php

/*
 * (c) Tobias Bollinger <tobias.bollinger@gmail.com>
 *
 */

namespace Calendar;

/**
 * Loader Class
 * Loads Controllers and Views and manage Templates
 */
class Loader
{
	const INDEX_CONTROLLER = 'Calendar';

	private $templateHeader;
	private $templateFooter;
	private $sideTitle;

	/**
	 * set Title of the view
	 * @param string $title
	 */
	public function setSideTitle($title)
	{
		$this->sideTitle = $title;
	}

	/**
	 * set the Tamplate
	 * @param string $header path to the header in the /views folder
	 * @param string $food   path of the food in the /views folder
	 */
	public function setTemplate($header, $food)
	{
		$this->templateHeader = $header;
		$this->templateFooter = $food;
	}

	/**
	 * load a Controller
	 * @param  array $requestURI every / segment a new array item
	 */
	public function loadController($requestURI)
	{
		$param = array();

		if (isset($requestURI[2]) && $requestURI[2] != '' && $requestURI[2] != 'index.php') { 
			$class = $requestURI[2];
		} else {
			$class = self::INDEX_CONTROLLER;
		}
		if (isset($requestURI[3]) && $requestURI[3] != '') {
			$function = $requestURI[3];
		} else {
			$function = 'index';
		}
		if (isset($requestURI[4]) && $requestURI[4] != '') {
			foreach ($requestURI as $key => $uri) {
			   if ($key < 4) {continue;}
			   array_push($param, $uri);
			}
		}
		else {
			$param[0] = '';
		}

		$controllerName = 'Calendar\\' . $class . "Controller";
		$controller = new $controllerName();
		call_user_func_array(array($controller, $function), $param);
	}

	/**
	 * load the Template Head
	 */
	public function loadTemplateHead()
	{
		$title = $this->sideTitle;
		if (isset($this->templateHeader)) { include_once 'views/' . $this->templateHeader; }
	}	

	/**
	 * load the Template Food
	 */
	public function loadTemplateFood()
	{
		if (isset($this->templateFooter)) { include_once 'views/' . $this->templateFooter; }
	}

	/**
	 * load a View
	 * @param  string $view Viewname without .php in the /views folder
	 * @param  array  $data Datas for the View
	 */
	public function loadView($view, $data = array())
	{
		$this->loadTemplateHead();
		include_once 'views/' . $view . '.php';
		$this->loadTemplateFood();
	}
}