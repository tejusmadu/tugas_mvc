<?php

namespace App\Controllers;

use App\Core\Controller;

class Hewan extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Hewan();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('hewan/index', $data);
	}

	public function input()
	{
		$this->dashboard('hewan/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/hewan');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('hewan/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/hewan');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/hewan');
	}
}
