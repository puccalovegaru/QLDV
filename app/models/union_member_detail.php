<?php
class UnionMemberDetail extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'UnionMemberDetail';
	var $useTable = 'union_member_details';//default = the lowercase, plural form of the model's class name
	var $belongsTo = array(
        'UnionMember' => array(
            'className'    => 'UnionMember',
            'foreignKey'    => 'id'
        )
    );	
}
?>