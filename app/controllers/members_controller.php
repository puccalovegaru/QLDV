<?php
class MembersController extends AppController{
	var $name = 'UnionMembers';//Union_members
	var $use = array('UnionMember', 'UnionMemberDetail', 'Position', 'Union');
	var $components = array('RequestHandler');
	var $helpers = array('Js' => array('Jquery'));
	var $paginate = array(
        'limit' => 2,
        'order' => array(
            'UnionMember.id' => 'desc'
        )
    );
    function index(){
    	///$this->layout = 'layout';
    	//$filter = $this->Filter->process($this);
    	$this->set('members', $this->paginate('UnionMember'));
    }
}
?>