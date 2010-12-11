<?php
class PointFieldDetail extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'PointField';
	var $useTable = 'point_field_details';//default = the lowercase, plural form of the model's class name
	var $displayField = 'description';
	var $belongsTo = array(
		'PoinField' => array(
			'className'    => 'PointField',
            'foreignKey'    => 'pf_id'
		)
	);
	/*var $hasAndBelongsToMany = array(
        'Union_member' => array(
    		'className' => 'Union_member',
    		'joinTable' => 'union_member_reviews',
    		'with' => 'Union_member_review',
    		'foreignKey' => 'pfd_id',
    		'associationForeignKey' => 'um_id'
    	)
    );*/
}
?>