<?php
App::uses('AppModel', 'Model');
/**
 * Extra Model
 *
 * @property Race $Race
 * @property Gender $Gender
 * @property HairColour $HairColour
 * @property EyeColour $EyeColour
 * @property Nationality $Nationality
 * @property Photo $Photo
 */
class Extra extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Race' => array(
			'className' => 'Race',
			'foreignKey' => 'race_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Gender' => array(
			'className' => 'Gender',
			'foreignKey' => 'gender_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HairColour' => array(
			'className' => 'HairColour',
			'foreignKey' => 'hair_colour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EyeColour' => array(
			'className' => 'EyeColour',
			'foreignKey' => 'eye_colour_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nationality' => array(
			'className' => 'Nationality',
			'foreignKey' => 'nationality_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Photo' => array(
			'className' => 'Photo',
			'foreignKey' => 'extra_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
