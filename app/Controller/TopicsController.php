<?php


class TopicsController extends AppController
{

public function index()
{

	//$this -> set('color','blue');
	$data = $this ->Topic-> find('all');
	$this -> set('topics',$data);
}

public function add()
{

	if($this ->request-> is('post'))
	{

	$this ->Topic -> create();
	$this ->Topic -> save($this ->request->data);
	}
}




public function view($id)
{

	$data = $this ->Topic-> findById($id);
	$this -> set('topics',$data);
}


public function edit($id)
{

	$data = $this ->Topic-> findById($id);

	if($this ->request-> is(array('post','put')))
	{
	$this ->Topic ->id = $id;
	$this ->Topic -> save($this ->request->data);
	}

	$this ->request->data = $data;
}


public function delete($id)
{

	$data = $this ->Topic-> findById($id);

	$this ->Topic ->id = $id;
	$this ->Topic -> delete($this ->request->data);

}




}





















?>