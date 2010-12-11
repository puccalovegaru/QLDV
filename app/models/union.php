<?php
class Union extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'Union';
	var $useTable = 'unions';//default = the lowercase, plural form of the model's class name
	var $displayField = 'union_name';
	var $belongsTo = array(
        'ParentUnion' => array(
            'className'    => 'Union',
            'foreignKey'    => 'parent_id'
        )
    );
    var $hasMany = array(
        'ChildUnion' => array(
            'className'    => 'Union',
            'foreignKey'    => 'parent_id'
        ),
        'Review' => array(
            'className'    => 'UnionReview',
            'foreignKey'    => 'union_id'
        ),
        'Member' => array(
            'className'    => 'UnionMember',
            'foreignKey'    => 'current_union_id'
        ),
        'Biography' => array(
            'className'    => 'Biography',
            'foreignKey'    => 'union_id'
        )
    );
}
?>