<?php // @version $Id: default_message.php$
defined('_JEXEC') or die;
?>

<div class="componentheading">
	<?php echo $this->escape($this->message->title); ?>
</div>

<div class="message">
	<?php echo $this->escape($this->message->text); ?>
</div>
