<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function paginationAction() {
    	$currentPage = $this->request->getQuery('page', 'int');

    	$data = Film::find();

    	foreach ($data as $row) {
    		# code...
    		//echo $row->title;
    	}

    	$paginator = new \Phalcon\Paginator\Adapter\Model(
    		array(
    			'data' => $data,
    			'limit' => 10,
    			'page' => $currentPage
    		)
    	);

    	$this->view->page = $paginator->getPaginate();


    }

}

