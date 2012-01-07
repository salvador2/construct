<?php defined('_JEXEC') or die;?>

<script type="text/javascript">
	function tableOrdering(order, dir, task) {
		var form = document.adminForm;
		form.filter_order.value = order;
		form.filter_order_Dir.value = dir;
		document.adminForm.submit(task);
	}
</script>

<div class="display">
	<form action="<?php echo htmlspecialchars($this->action); ?>" method="post" name="adminForm">
		<?php echo JText :: _('Display Num'); ?>&nbsp;
		<?php echo $this->pagination->getLimitBox(); ?>
		<input type="hidden" name="filter_order" value="<?php echo $this->lists['order'] ?>" />
		<input type="hidden" name="filter_order_Dir" value="" />
	</form>
</div>


<table class="weblinks">

	<?php if ($this->params->def('show_headings', 1)) : ?>
	<tr>

		<th class="sectiontablemasthead<?php echo htmlspecialchars($this->params->get('pageclass_sfx')); ?>" width="5" id="num">
			<?php echo JText::_('Num'); ?>
		</th>

		<th width="90%" class="sectiontablemasthead<?php echo htmlspecialchars($this->params->get('pageclass_sfx')); ?>" id="title">
			<?php echo JHTML::_('grid.sort', 'Web Link', 'title', $this->lists['order_Dir'], $this->lists['order']); ?>
		</th>

		<?php if ($this->params->get('show_link_hits')) : ?>
		<th width="10%" class="sectiontablemasthead<?php echo htmlspecialchars($this->params->get('pageclass_sfx')); ?>" nowrap="nowrap" id="hits">
			<?php echo JHTML::_('grid.sort', 'Hits', 'hits', $this->lists['order_Dir'], $this->lists['order']); ?>
		</th>
		<?php endif; ?>

	</tr>
	<?php endif; ?>

	<?php foreach ($this->items as $item) : ?>
	<tr class="sectiontableentry<?php echo $item->odd + 1; ?>">

		<td align="center" mastheads="num">
			<?php echo $this->pagination->getRowOffset($item->count); ?>
		</td>

		<td mastheads="title">
			<?php if ($item->image) :
				echo $item->image;
			endif;
			echo $item->link;
			if ($this->params->get('show_link_description')) : ?>
			<br />
			<?php echo nl2br($item->description);
			endif; ?>
		</td>

		<?php if ($this->params->get('show_link_hits')) : ?>
		<td mastheads="hits">
			<?php echo (int)$item->hits; ?>
		</td>
		<?php endif; ?>

	</tr>
	<?php endforeach; ?>

</table>


<p class="counter">
	<?php echo $this->pagination->getPagesCounter(); ?>
</p>
<?php echo $this->pagination->getPagesLinks();
