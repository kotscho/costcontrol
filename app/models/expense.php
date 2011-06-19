<?php

class Expense extends AppModel {

	public $name = 'Expense';
        
	public $validate = array(

		'fixphone' => array(
			'rule' => 'notEmpty'
			),
		'energy' => array(
			'rule' => 'notEmpty'
			),
		'water' => array(
			'rule' => 'notEmpty'
			),

		'mobile' => array(
			'rule' => 'notEmpty'
                        ),
                'healthinsurence' => array(
			'rule' => 'notEmpty'
                        ),
                'vat' => array(
			'rule' => 'notEmpty'
                        ),
                'national_bank' => array(
			'rule' => 'notEmpty'
                        ),
                'euro_bank' => array(
			'rule' => 'notEmpty'
                        ),
                'alpha_bank' => array(
			'rule' => 'notEmpty'
                        ),
                'attica_bank' => array(
			'rule' => 'notEmpty'
                        ),
                'gas' => array(
			'rule' => 'notEmpty'
                        ),
                'food' => array(
			'rule' => 'notEmpty'
                        ),
                'entertainment' => array(
			'rule' => 'notEmpty'
                        ),
                'miscellaneous' => array(
			'rule' => 'notEmpty'
                        ),
                'time_stamp' => array(
			'rule' => 'notEmpty'
                        )

		);
	
}



?>