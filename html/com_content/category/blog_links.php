<?php // @version $Id: blog_links.php 11917 2009-05-29 19:37:05Z ian $
defined('_JEXEC') or die;
?>

<h2>
	<?php echo JText::_('More Articles...'); ?>
</h2>

<ul>
	<?php foreach ($this->links as $link) : ?>
	<li>
		<a class="blogsection" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($link->slug, $link->catslug, $link->sectionid)); ?>">
			<?php echo htmlspecialchars($link->title); ?></a>
	</li>
	<?php endforeach; ?>
</ul>
