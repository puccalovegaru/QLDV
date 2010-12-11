<?php
class Biography extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'Biography';
	var $useTable = 'biographies';//default = the lowercase, plural form of the model's class name
	var $displayField = 'year';
	var $belongsTo = array(
        'Union' => array(
            'className'    => 'Union',
            'foreignKey'    => 'union_id'
        ),
        'UnionMember' => array(
            'className'    => 'UnionMember',
            'foreignKey'    => 'um_id'
        ),
        'Position' => array(
            'className'    => 'Position',
            'foreignKey'    => 'pos_id'
        )
    );	
}
?>