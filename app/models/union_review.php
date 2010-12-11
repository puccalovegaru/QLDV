<?php
class UnionReview extends AppModel {
 	//Please take a look at http://book.cakephp.org/view/1057/Model-Attributes
	var $name = 'UnionReview';
	var $useTable = 'union_reviews';//default = the lowercase, plural form of the model's class name
	var $displayField = 'year';
	/*var $belongsTo = array(
        'Union' => array(
            'className'    => 'Union',
            'foreignKey'    => 'union_id'
        )
    );*/
}
?>