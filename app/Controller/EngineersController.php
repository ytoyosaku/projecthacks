<?php

class EngineersController extends AppController {

	public $autoLayout = false;
	public $uses = array('Engineer', 'Area', 'Year', 'Month', 'Day', 'File');

	public function complete() {

	}

	public function convert() {

		$this->set('areas', $this->Area->find('list'));
		$this->set('years', $this->Year->find('list'));
		$this->set('months', $this->Month->find('list'));
		$this->set('days', $this->Day->find('list'));

		if ($this->request->is('post')) {

			$data = $this->request->data;

			$datas = array(
				'Engineer' => array(
					'familyname' => $data['familyname'],
					'name' => $data['name'],
					'familyname_kana' => $data['familyname_kana'],
					'name_kana' => $data['name_kana'],
					'sex' => $data['sex'],
					'email' => $data['email'],
					'tell' => $data['tell'],
//					'station' => $data['station'],
					'memo' => $data['memo'],
					'year_id' => $data['Engineer']['year'],
					'month_id' => $data['Engineer']['month'],
					'day_id' => $data['Engineer']['day'],
				),
			);
			$files = array(
				'File' => array(
					'filename' => md5(mt_rand()),
					'contents' => file_get_contents($data['Engineer']['file']['tmp_name']),
					'moto_filename' => $data['Engineer']['file']['name'],
					'filetype' => $data['Engineer']['file']['type'],
					'filesize' => $data['Engineer']['file']['size'],
				)
			);

			if (!empty($this->request->data)) {

				if ($this->Engineer->save($datas)) {
					
					$this->request->data['File']['engineer_id'] = $this->Engineer->id;
					if ($this->Engineer->File->save($files)) {
						$this->Engineer->File->save($this->request->data);
						$this->redirect('/engineers/complete/');

					} else {
						$this->redirect('/projects/search');
					}
				}
			}
		}
	}
}
