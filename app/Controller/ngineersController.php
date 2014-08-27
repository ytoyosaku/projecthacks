<?php

class EngineersController extends AppController {

	public $autoLayout = false;
	public $uses = array('Engineer', 'Area', 'Year', 'Month', 'Day');

	public function index() {

			$data = $this->Session->read($this->request->data);
	}

	public function convert() {

		$this->set('areas', $this->Area->find('list'));
		$this->set('years', $this->Year->find('list'));
		$this->set('months', $this->Month->find('list'));
		$this->set('days', $this->Day->find('list'));


		if ($this->request->is('post')) {

			$dest_fullpath = APP.'tmp/' .md5(uniqid(rand(), true));

			if (move_uploaded_file($this->request->data['Engineer']['file']['tmp_name'], $dest_fullpath)) {
					$this->redirect('/projects/index');
				} else {
					$this->redirect('/projects/search');
			
		}

	}

}

}