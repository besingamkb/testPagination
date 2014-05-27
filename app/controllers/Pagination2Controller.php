<?php

class Pagination2Controller extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function listAction($cPage) {
    	$currentPage = $cPage;

    	$films = Film::find();

    	$paginator = new \Phalcon\Paginator\Adapter\Model(
    		array(
    			'data' => $films,
    			'limit' => 20,
    			'page' => $currentPage
    		)
    	);

    	$this->view->page = $paginator->getPaginate();
    }

}

