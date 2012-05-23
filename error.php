<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla! 1.6+
 * @author        Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright    Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */

// Load Joomla filesystem package
jimport('joomla.filesystem.file');

// To get an application object
$app = JFactory::getApplication();
// Returns a reference to the global document object
$doc = JFactory::getDocument();
// Get the offline status of the website
$offLine = $app->getCfg('offline');
// Define relative path to the  current template directory
$template = 'templates/' . $this->template;
// Get language and direction
$this->language = $doc->language;
$this->direction = $doc->direction;

// Send the user to the home page if the website is offline
if ($offLine) {
	$app->redirect($this->baseurl);
}

// Manually define layout and module counts
$columnLayout = 'alpha-1-main-beta-1';
$headerAboveClass = 'count-1';
$headerBelowClass = 'count-6';
$navBelowClass = 'count-4';
$contentAboveClass = 'count-1';
$contentBelowClass = '';
$columnGroupAlphaClass = 'count-1';
$columnGroupBetaClass = '';
$footerAboveClass = 'count-1';

// Access template parameters
$params = JFactory::getApplication()->getTemplate(true)->params;

$customStyleSheet = $params->get('customStyleSheet');
$detectTablets = $params->get('detectTablets');
$enableSwitcher = $params->get('enableSwitcher');
$fluidMedia = $params->get('fluidMedia');
$fullWidth = $params->get('fullWidth');
$googleWebFont = $params->get('googleWebFont');
$googleWebFontSize = $params->get('googleWebFontSize');
$googleWebFontTargets = $params->get('googleWebFontTargets');
$googleWebFont2 = $params->get('googleWebFont2');
$googleWebFontSize2 = $params->get('googleWebFontSize2');
$googleWebFontTargets2 = $params->get('googleWebFontTargets2');
$googleWebFont3 = $params->get('googleWebFont3');
$googleWebFontSize3 = $params->get('googleWebFontSize3');
$googleWebFontTargets3 = $params->get('googleWebFontTargets3');
$IECSS3 = $params->get('IECSS3');
$IECSS3Targets = $params->get('IECSS3Targets');
$IE6TransFix = $params->get('IE6TransFix');
$IE6TransFixTargets = $params->get('IE6TransFixTargets');
$inheritLayout = $params->get('inheritLayout');
$inheritStyle = $params->get('inheritStyle');
$loadMoo = $params->get('loadMoo');
$loadModal = $params->get('loadModal');
$loadjQuery = $params->get('loadjQuery');
$mContentDataTheme = $params->get('mContentDataTheme');
$mdetect = $params->get('mdetect');
$mFooterDataTheme = $params->get('mFooterDataTheme');
$mHeaderDataTheme = $params->get('mHeaderDataTheme');
$mNavPosition = $params->get('mNavPosition');
$mNavDataTheme = $params->get('mNavDataTheme');
$mPageDataTheme = $params->get('mPageDataTheme');
$setGeneratorTag = $params->get('setGeneratorTag');
$showDiagnostics = $params->get('showDiagnostics');
$siteWidth = $params->get('siteWidth');
$siteWidthType = $params->get('siteWidthType');
$siteWidthUnit = $params->get('siteWidthUnit');
$stickyFooterHeight = $params->get('stickyFooterHeight');
$useStickyFooter = $params->get('useStickyFooter');

// Render module positions
$renderer = $doc->loadRenderer('modules');
$raw = array('style' => 'raw');
$xhtml = array('style' => 'xhtml');
$jexhtml = array('style' => 'jexhtml');

// Check for layout override
if (JFile::exists($template . '/layouts/error.php')) {
	include_once $template . '/layouts/error.php';
}
else {
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language ?>" lang="<?php echo $this->language ?>" dir="<?php echo $this->direction ?>">
<head>
	<meta name="copyright" content="<?php echo $app->getCfg('sitename') ?>" />
	<link rel="shortcut icon" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/favicon.png" type="image/png" />
	<link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/print.css" type="text/css" media="print" />
	<?php if ($enableSwitcher) {
	echo '  <link rel="alternate stylesheet" href="templates/' . $this->template . '/css/diagnostic.css" type="text/css" title="diagnostic"/>
  <link rel="alternate stylesheet" href="templates/' . $this->template . '/css/wireframe.css" type="text/css" title="wireframe"/>';
} ?>
	<?php
	if ($customStyleSheet != '-1')
		echo '<link rel="stylesheet" href="' . $this->baseurl . '/templates/' . $this->template . '/css/' . $customStyleSheet . '"  type="text/css" media="screen" />';
	if ($this->direction == 'rtl')
		echo '<link rel="stylesheet" href="' . $this->baseurl . '/templates/' . $this->template . '/css/rtl.css"  type="text/css" media="screen" />';
	if (isset($cssFile))
		echo "\n" . $cssFile;
	if ($googleWebFont != "")
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' . $googleWebFont . '">
		<style type="text/css">' . $googleWebFontTargets . '{font-family:' . $googleWebFont . ', serif !important;font-size:' . $googleWebFontSize . '} </style>';
	if ($googleWebFont2 != "")
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' . $googleWebFont2 . '">
		<style type="text/css">' . $googleWebFontTargets2 . '{font-family:' . $googleWebFont2 . ', serif !important;font-size:' . $googleWebFontSize2 . '} </style>';
	if ($googleWebFont3 != "")
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' . $googleWebFont3 . '">
		<style type="text/css">' . $googleWebFontTargets3 . '{font-family:' . $googleWebFont3 . ', serif !important;font-size:' . $googleWebFontSize3 . '} </style>';
	if ($loadjQuery != "")
		$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/'.$loadjQuery.'/jquery.min.js");
	if ($enableSwitcher)
		echo '<script type="text/javascript" src="' . $this->baseurl . '/templates/' . $this->template . '/js/styleswitch.js"></script>';
	if ($siteWidth)
		echo '<style type="text/css"> #body-container, #header-above {' . $siteWidthType . ':' . $siteWidth . $siteWidthUnit . ' !important}</style>';
	if (!$fullWidth)
		echo '<style type="text/css"> #header, #footer {' . $siteWidthType . ':' . $siteWidth . $siteWidthUnit . ';margin:0 auto}</style>';
	if (($siteWidthType == 'max-width') && $fluidMedia)
		echo '<style type="text/css"> img, object {max-width:100%}</style>';
	?>
	<script type="text/javascript">window.addEvent('domready', function () {
		new SmoothScroll({duration:1200}, window);
	});</script>
	<!--[if lt IE 7]>
		<?php if ($IE6TransFix) {
		echo '  <script type="text/javascript" src="' . $this->baseurl . '/templates/' . $this->template . '/js/DD_belatedPNG_0.0.8a-min.js"></script>
  <script>DD_belatedPNG.fix(\'' . $IE6TransFixTargets . '\');</script>' . "\n";
	} ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template ?>/css/ie6.css" type="text/css" media="screen" />
	<style type="text/css">
		body {
			text-align : center
		}

		#body-container {
			text-align : left
		}

		#body-container
		,              <?php if (!$fullWidth) echo ',#header, #footer' ?>{
																		   width  : expression( document.body.clientWidth > <?php echo ($siteWidth - 1) ?> ? "<?php echo $siteWidth . $siteWidthUnit ?>" : "auto" );
																		   margin : 0 auto
																	   }
	</style>
	<![endif]-->
	<?php if ($useStickyFooter) {
	echo '  <style type="text/css">.sticky-footer #body-container{padding-bottom:' . $stickyFooterHeight . 'px;}
  .sticky-footer #footer{margin-top:-' . $stickyFooterHeight . 'px;height:' . $stickyFooterHeight . 'px;}
  </style>
  <!--[if !IE 7]>
  <style type="text/css">.sticky-footer #footer-push {display:table;height:100%}</style>
  <![endif]-->';
} ?>
	<?php if ($IECSS3) {
	echo '  <!--[if !IE 9]>
  <style type="text/css">' . $IECSS3Targets . '"{behavior:url("' . $this->baseurl . '/templates/' . $this->template . '/js/PIE.htc)</style>
  <![endif]-->';
}
	echo "\n" ?>
</head>

<body class="<?php echo $columnLayout; if ($useStickyFooter) echo ' sticky-footer' ?> error">
<div id="footer-push">
	<?php if ($headerAboveClass) : ?>
<div id="header-above" class="clearfix">
	<div id="header-above-1" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-1', $jexhtml, null) ?>
	</div>
	<div id="header-above-2" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-2', $jexhtml, null) ?>
	</div>
	<div id="header-above-3" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-3', $jexhtml, null) ?>
	</div>
	<div id="header-above-4" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-4', $jexhtml, null) ?>
	</div>
	<div id="header-above-5" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-5', $jexhtml, null) ?>
	</div>
	<div id="header-above-6" class="<?php echo $headerAboveClass ?>">
		<?php echo $renderer->render('header-above-6', $jexhtml, null) ?>
	</div>
</div>
	<?php endif ?>

<div id="header" class="clear clearfix">
	<div class="gutter">


		<div class="date-container">
			<span class="date-weekday"><?php    $now = JFactory::getDate(); echo $now->toFormat('%A') . ',' ?></span>
			<span class="date-month"><?php         $now = JFactory::getDate(); echo $now->toFormat('%B') ?></span>
			<span class="date-day"><?php         $now = JFactory::getDate(); echo $now->toFormat('%d') . ',' ?></span>
			<span class="date-year"><?php         $now = JFactory::getDate(); echo $now->toFormat('%Y') ?></span>
		</div>


		<h1 id="logo">
			<a href="<?php echo $this->baseurl ?>/" title="<?php echo htmlspecialchars($app->getCfg('sitename')) ?>"><?php echo $this->baseurl ?></a>
		</h1>

		<?php echo $renderer->render('header', $jexhtml, null) ?>

		<ul id="access">
			<li>Jump to:</li>
			<li><a href="<?php echo $this->baseurl ?>/index.php#content" class="to-content">Content</a></li>
			<li><a href="<?php echo $this->baseurl ?>/index.php#nav" class="to-nav">Navigation</a></li>
			<li>
				<a href="<?php echo $this->baseurl ?>/index.php#additional" class="to-additional">Additional Information</a>
			</li>
		</ul>

		<?php if ($enableSwitcher) : ?>
		<ul id="style-switch">
			<li><a href="#" onclick="setActiveStyleSheet('wireframe'); return false;" title="Wireframe">Wireframe</a>
			</li>
			<li>
				<a href="#" onclick="setActiveStyleSheet('diagnostic'); return false;" title="Diagnostic">Diagnostic Mode</a>
			</li>
			<li><a href="#" onclick="setActiveStyleSheet('normal'); return false;" title="Normal">Normal Mode</a></li>
		</ul>
		<?php endif ?>

	</div>
</div>

<div id="body-container">
	<?php if ($headerBelowClass) : ?>
	<div id="header-below" class="clearfix">
		<div id="header-below-1" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-1', $jexhtml, null) ?>
		</div>
		<div id="header-below-2" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-2', $jexhtml, null) ?>
		</div>
		<div id="header-below-3" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-3', $jexhtml, null) ?>
		</div>
		<div id="header-below-4" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-4', $jexhtml, null) ?>
		</div>
		<div id="header-below-5" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-5', $jexhtml, null) ?>
		</div>
		<div id="header-below-6" class="<?php echo $headerBelowClass ?>">
			<?php echo $renderer->render('header-below-6', $jexhtml, null) ?>
		</div>
	</div>
	<?php endif ?>

	<?php echo $renderer->render('breadcrumbs', $raw, null) ?>

	<div id="nav" class="clear">
		<?php echo $renderer->render('nav', $raw, null) ?>
	</div>

	<div id="content-container" class="clear clearfix">
		<?php if ($navBelowClass) : ?>
		<div id="nav-below" class="clearfix">
			<div id="nav-below-1" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-1', $jexhtml, null) ?>
			</div>
			<div id="nav-below-2" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-2', $jexhtml, null) ?>
			</div>
			<div id="nav-below-3" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-3', $jexhtml, null) ?>
			</div>
			<div id="nav-below-4" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-4', $jexhtml, null) ?>
			</div>
			<div id="nav-below-5" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-5', $jexhtml, null) ?>
			</div>
			<div id="nav-below-6" class="<?php echo $navBelowClass ?>">
				<?php echo $renderer->render('nav-below-6', $jexhtml, null) ?>
			</div>
		</div>
		<?php endif ?>

		<div id="load-first" class="clearfix">
			<div id="content-main">
				<div class="gutter">
					<?php if ($contentAboveClass) : ?>
					<div id="content-above" class="clearfix">
						<div id="content-above" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-1', $jexhtml, null) ?>
						</div>
						<div id="content-above-2" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-2', $jexhtml, null) ?>
						</div>
						<div id="content-above-3" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-3', $jexhtml, null) ?>
						</div>
						<div id="content-above-4" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-4', $jexhtml, null) ?>
						</div>
						<div id="content-above-5" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-5', $jexhtml, null) ?>
						</div>
						<div id="content-above-6" class="<?php echo $contentAboveClass ?>">
							<?php echo $renderer->render('content-above-6', $jexhtml, null) ?>
						</div>
					</div>
					<?php endif ?>

					<div id="error-message">
						<?php echo $this->error->getCode() ?> - <?php echo $this->error->getMessage() ?>
						<p><strong><?php echo JText::_('You may not be able to visit this page because of:') ?></strong>
						</p>
						<ol>
							<li><?php echo JText::_('An out-of-date bookmark/favourite') ?></li>
							<li><?php echo JText::_('A search engine that has an out-of-date listing for this site') ?></li>
							<li><?php echo JText::_('A mis-typed address') ?></li>
							<li><?php echo JText::_('You have no access to this page') ?></li>
							<li><?php echo JText::_('The requested resource was not found') ?></li>
							<li><?php echo JText::_('An error has occurred while processing your request.') ?></li>
						</ol>
						<p><strong><?php echo JText::_('Please try one of the following pages:') ?></strong></p>
						<ul>
							<li>
								<a href="<?php echo $this->baseurl ?>/" title="<?php echo JText::_('Go to the home page') ?>"><?php echo JText::_('Home Page') ?></a>
							</li>
						</ul>
						<p><?php echo JText::_('If difficulties persist, please contact the system administrator of this site.') ?></p>

						<p><?php echo $this->error->getMessage() ?></p>

						<p>
							<?php if ($this->debug) :
							echo $this->renderBacktrace();
						endif ?>
						</p>
					</div>
					<?php if ($contentBelowClass) : ?>
					<div id="content-below" class="clearfix">
						<div id="content-below-1" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-1', $jexhtml, null) ?>
						</div>
						<div id="content-below-2" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-2', $jexhtml, null) ?>
						</div>
						<div id="content-below-3" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-3', $jexhtml, null) ?>
						</div>
						<div id="content-below-4" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-4', $jexhtml, null) ?>
						</div>
						<div id="content-below-5" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-5', $jexhtml, null) ?>
						</div>
						<div id="content-below-6" class="<?php echo $contentBelowClass ?>">
							<?php echo $renderer->render('content-below-6', $jexhtml, null) ?>
						</div>
					</div>
					<?php endif ?>
				</div>
			</div>
			<?php if ($columnGroupAlphaClass) : ?>
			<div id="column-group-alpha">
				<div class="gutter clearfix">
					<div id="column-1" class="<?php echo $columnGroupAlphaClass ?>">
						<?php echo $renderer->render('column-1', $jexhtml, null) ?>
					</div>
					<div id="column-2" class="<?php echo $columnGroupAlphaClass ?>">
						<?php echo $renderer->render('column-2', $jexhtml, null) ?>
					</div>
				</div>
			</div>
			<?php endif ?>
		</div>

		<?php if ($columnGroupBetaClass) : ?>
		<div id="column-group-beta">
			<div class="gutter clearfix">
				<div id="column-3" class="<?php echo $columnGroupBetaClass ?>">
					<?php echo $renderer->render('column-3', $jexhtml, null) ?>
				</div>
				<div id="column-4" class="<?php echo $columnGroupBetaClass ?>">
					<?php echo $renderer->render('column-4', $jexhtml, null) ?>
				</div>
			</div>
		</div>
		<?php endif ?>

		<?php if ($footerAboveClass) : ?>
		<div id="footer-above" class="clearfix">
			<div id="footer-above-1" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-1', $jexhtml, null) ?>
			</div>
			<div id="footer-above-2" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-2', $jexhtml, null) ?>
			</div>
			<div id="footer-above-3" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-3', $jexhtml, null) ?>
			</div>
			<div id="footer-above-4" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-4', $jexhtml, null) ?>
			</div>
			<div id="footer-above-5" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-5', $jexhtml, null) ?>
			</div>
			<div id="footer-above-6" class="<?php echo $footerAboveClass ?>">
				<?php echo $renderer->render('footer-above-6', $jexhtml, null) ?>
			</div>
		</div>
		<?php endif ?>
	</div>
</div>
</div>

<div id="footer" class="clear clearfix">
	<div class="gutter clearfix">
		<a id="to-page-top" href="<?php echo $this->baseurl ?>/index.php#page-top">Back to Top</a>
		<?php echo $renderer->render('syndicate', $jexhtml, null) ?>
		<?php echo $renderer->render('footer', $jexhtml, null) ?>
	</div>
</div>

	<?php echo $renderer->render('analytics', $raw, null) ?>

</body>
</html>
<?php }