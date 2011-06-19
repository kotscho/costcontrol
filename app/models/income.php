<?php

class Income extends AppModel {

	public $name = 'Income';
        
        public $validate = array(
                'salary' => array(
                        'rule' => 'notEmpty'
                        ),
                'tax_refunds' => array(
                        'rule' => 'notEmpty'
                        ),
                'pension' => array(
                        'rule' => 'notEmpty'
                        ),
                'miscellaneous' => array(
                        'rule' => 'notEmpty'
                        ),
                'time_stamp' => array(
                        'rule' => 'notEmpty'
                        ),
        );

}



?> 