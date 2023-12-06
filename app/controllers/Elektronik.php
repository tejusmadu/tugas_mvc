<?php

namespace App\Controllers;

use App\Core\Controller;

class Elektronik extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Elektronik();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('elektronik/index', $data);
	}

	public function input()
	{
		$this->dashboard('elektronik/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/elektronik');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('elektronik/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/elektronik');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/elektronik');
	}
}
