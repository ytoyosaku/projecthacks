<?php

class ProjectsController extends AppController {

	public $helpers = array('Html', 'Form', 'Js');
	public $layout = 'common';
	public $uses = array('Project', 'Skill', 'Position', 'Area', 'Service');

	public function index() {
		$this->autoLayout = false;

		$this->paginate = array(
			'limit' => 9,
			'sort' => 'modified',
			'direction' => 'desc',
		);

		$this->set('projects', $this->paginate());
	}

	public function search() {

		if ($this->request->is('get')) {

			$join = array();
			$skill = array();
			$position = array();
			$money = array();
			$freeword = array();

			if (isset($this->request->query['skill']) && !empty($this->request->query['skill'])) {

				$join = array(
					array(
					'table' => 'projects_skills',
					'alias' => 'ProjectsSkill',
					'type' => 'inner',
					'conditions' => array(
						'Project.id = ProjectsSkill.project_id')
					),
					array(
					'table' => 'skills',
					'alias' => 'Skill',
					'type' => 'inner',
					'conditions' => array(
						'ProjectsSkill.skill_id = Skill.id')
					)
				);

				$skill = array('ProjectsSkill.skill_id' => $this->request->query['skill']);

			}

			if (isset($this->request->query['position']) && !empty($this->request->query['position'])) {
				$position = array(
					'Project.position_id' => $this->request->query['position']);
			}

			if (isset($this->request->query['money']) && !empty($this->request->query['money'])) {

				$money = array(
					'Project.money1 >' => $this->request->query['money']);
			}

			if (isset($this->request->query['freeword'])&& !empty($this->request->query['freeword'])) {

				$freeword = mb_convert_kana($this->request->query['freeword'], 's');
				$keywords = preg_split("/ |\\s/", $freeword, -1, PREG_SPLIT_NO_EMPTY);
				foreach($keywords as $keyword) {
					$name = "Project.name like '%$keyword%'";
					$body = "Project.body like '%$keyword%'";
					$freeword = array("OR" => array($name, $body));
				}
			}

			$this->paginate = array(
				'limit' => 10,
				'sort' => 'Project.modified',
				'direction' => 'desc',
				'recursive' => 2,
				'paramType' => 'querystring',
				'joins' => $join,
				'conditions' => array($skill, $position, $money, $freeword),
			);

			$this->set('projects', $this->paginate());

		} else {
			$this->paginate = array(
				'limit' => 10,
				'sort' => 'modified',
				'direction' => 'desc',
				'paramType' => 'querystring',
			);
			$this->set('projects', $this->paginate());
		}
	}

	public function project($id = null) {

		$Id = array($this->Project->id = $id);

		if ($this->request->is('get')) {
			$data = $this->Project->find('all', array('conditions' => array('Project.id' => $Id)));
			$this->set('projects', $data);
		}		

	}
}