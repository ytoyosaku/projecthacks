<?php

class Engineer extends AppModel {

	public $belongsTo = array(
		'Area' => array(
			'className' => 'Area',
			'foreginKey' => 'area_id'),
		'Year' => array(
			'className' => 'Year',
			'foreginKey' => 'year_id'),
		'Month' => array(
			'className' => 'Month',
			'foreginKey' => 'month_id'),
		'Day' => array(
			'className' => 'Day',
			'foreginKey' => 'day_id'),
		);

	public $hasMany = array(
		'File' => array(
			'className' => 'File',
			'foreginKey' => 'engineer_id'
		)
	);
	
	public $validate = array(
		'familyname' => array(
			'rule' => array('notEmpty',
				'message' => '氏名を入力してください')),
		'name' => array(
			'rule' => array('notEmpty',
				'message' => '氏名を入力してください')),
		'familyname_kana' => array(
			'rule' => array('notEmpty',
				'message' => 'カナを入力してください')),
		'name_kana' => array(
			'rule' => array('notEmpty',
				'message' => 'カナを入力してください')),
		'email' => array(
			'rule' => array('notEmpty',
				'message' => 'メールアドレスを入力してください')),
		'file' => array(
			'upload-file' => array(
				'rule' => array('uploadErorr'),
				'message' => 'erorr!'),
			'size' => array(
				'maxFileSize' => array(
					'rule' => array('fileSize', '<=', '2MB'),
					'message' => array('ファイルサイズが大きすぎます（2MBまで）'))
			),
		)
	);
}