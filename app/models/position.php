<?php
class Position extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'Position';
	var $useTable = 'positions';//default = the lowercase, plural form of the model's class name
	var $displayField = 'position';
	var $hasMany = array(
        'UnionMember' => array(
            'className'    => 'UnionMember',
            'foreignKey'    => 'current_pos_id'
        )/*,
        'Biography' => array(
            'className'    => 'Biography',
            'foreignKey'    => 'pos_id'
        )*/
    );
}
?>