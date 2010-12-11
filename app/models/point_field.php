<?php
class PointField extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'PointField';
	var $useTable = 'point_fields';//default = the lowercase, plural form of the model's class name
	var $displayField = 'name';
	var $hasMany = array(
        'Detail' => array(
            'className'    => 'PointFieldDetail',
            'foreignKey'    => 'pf_id'
        )
    );	
}
?>