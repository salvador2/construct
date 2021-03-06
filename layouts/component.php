<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla! 1.6+
 * @author        Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright    Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language ?>" lang="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>">
<head>
    <jdoc:include type="head" />
    <?php
    $doc->addStyleSheet($template . '/css/print.css', 'text/css', 'print');
    if ($this->direction == 'rtl')
        $doc->addStyleSheet($template . '/css/rtl.css', 'screen');
    ?>
</head>
<body class="contentpane">
<?php if ($this->countModules('print-popup')) : ?>
<jdoc:include type="modules" name="print-popup" style="raw" />
    <?php endif ?>
<jdoc:include type="message" />
<jdoc:include type="component" />
</body>
</html>