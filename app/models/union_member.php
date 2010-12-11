<?php
class UnionMember extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'UnionMember';
	var $useTable = 'union_members';//default = the lowercase, plural form of the model's class name
	var $primaryKey = 'id';//default = id
	var $displayField = 'firstname';//default = name/title
	var $recursive = 1;//default = 1
	var $virtualFields = array(
    	'name' => "CONCAT(UnionMember.lastname, ' ', UnionMember.firstname)"
	);
	
	var $belongsTo = array(
        'Union' => array(
            'className'    => 'Union',
            'foreignKey'    => 'current_union_id'
        ),
        'Position' => array(
        	'className' => 'Position',
        	'foreignKey' => 'current_pos_id'
        ),
        'Status' => array(
        	'className' => 'Status',
        	'foreignKey' => 'status_id'
        )
    );
    var $hasMany = array(
    	'Biography' => array(
    		'className' => 'Biography',
    		'foreignKey' => 'um_id'
    	)
    );
    var $hasOne = array(
    	'UnionMemberDetail' => array(
    		'className' => 'UnionMemberDetail',
    		'foreignKey' => 'id'
    	)
    );
    var $hasAndBelongsToMany = array(
    	'PointFieldDetail' => array(
    		'className' => 'PointFieldDetail',
    		'joinTable' => 'union_member_reviews',
    		'with' => 'UnionMemberReview',
    		'foreignKey' => 'um_id',
    		'associationForeignKey' => 'pfd_id'
    	),
    	'Event' => array(
    		'className' => 'Event',
    		'joinTable' => 'events_union_members',
    		'with' => 'EventsUnionMembers',
    		'foreignKey' => 'um_id',
    		'associationForeignKey' => 'event_id'
    	)
    );
    //Please take a look at http://book.cakephp.org/view/125/Data-Validation
	/*var $validate = array(
		'firstname' => array(
			'rule' => 'notEmpty'
		)
	);*/
}
?>