<?php
class Event extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'Event';
	var $useTable = 'events';//default = the lowercase, plural form of the model's class name
	var $hasAndBelongsToMany = array(
    	'Union_member' => array(
    		'className' => 'UnionMember',
    		'joinTable' => 'events_union_members',
    		'with' => 'EventsUnionMembers',
    		'foreignKey' => 'event_id',
    		'associationForeignKey' => 'um_id'
    	)
    );
}
?>