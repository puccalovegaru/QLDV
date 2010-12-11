<?php
class Status extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'Status';
	var $useTable = 'statuses';//default = the lowercase, plural form of the model's class name
	var $displayField = 'status';
	/*var $hasMany = array(
        'Union_member' => array(
            'className'    => 'Union_member',
            'foreignKey'    => 'um_id'
        )
    );*/
}
?>