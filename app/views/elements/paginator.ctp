<?php
echo $this->Paginator->counter(array(
	'format' => __('Trang %page% trên tổng số %pages%', true)
));
?>


<!-- The paginator -->
<ul class="paging fr">
	<span class="nav">
	<li><?php echo $this->Paginator->first();?></li>
	<li><?php echo $this->Paginator->prev(__('Previous', true), array(), null, array('tag'=>'a','class'=>'prev disabled'));?></li>
	</span>
	<span class="pages">
	<?php echo $this->Paginator->numbers(array('tag'=>'li', 'separator'=>''));?>
	</span>
	<span class="nav"><li><?php echo $this->Paginator->next(__('Next', true), array(), null, array('tag'=>'a', 'class' => 'next disabled'));?></li></span>
</ul>
<!-- Paginator end -->
