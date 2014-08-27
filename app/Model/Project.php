<?php

class Project extends AppModel {

	public $belongsTo = array(
		'Position' => array(
			'className' => 'Position',
			'foreginKey' => 'position_id'),
		'Area' => array(
			'className' => 'Area',
			'foreginKey' => 'area_id'),
		'Service' => array(
			'className' => 'Service',
			'foreginKey' => 'service_id'),
	);

	public $hasAndBelongsToMany = array(
		'Skill' => array(
			'className' => 'Skill',
			'joinTable' => 'projects_skills',
			'foreignKey' => 'project_id',
			'associationForeginKey' => 'skill_id',
			'with' => 'ProjectsSkill',
			'unique' => true
		)
	);
}