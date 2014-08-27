<?php

class Skill extends AppModel {

	public $hasAndBelongsToMany = array(
		'Project' => array(
			'className' => 'Project',
			'joinTable' => 'projects_skills',
			'foreignKey' => 'skill_id',
			'associationForeginKey' => 'project_id',
			'unique' => true));
}