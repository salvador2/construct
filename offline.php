<?php defined('_JEXEC') or die;
/**
* @package		Template Framework for Joomla! 1.6
* @author		Joomla Engineering http://joomlaengineering.com
* @copyright	Copyright (C) 2010 Matt Thomas | Joomla Engineering. All rights reserved.
* @license		GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
*/

// To enable use of site configuration
$app 					= JFactory::getApplication();
// Get the base URL of the website
$baseUrl 				= JURI::base();
// Returns a reference to the global document object
$doc 					= JFactory::getDocument();
//Get the current URL
$url 					= clone(JURI::getInstance());
// Get and define template parameters
$customStyleSheet 		= $this->params->get('customStyleSheet');
$enableSwitcher 		= $this->params->get('enableSwitcher');
$IECSS3					= $this->params->get('IECSS3');
$IECSS3Targets			= $this->params->get('IECSS3Targets');
$IE6TransFix			= $this->params->get('IE6TransFix');
$IE6TransFixTargets		= $this->params->get('IE6TransFixTargets');
$fontFamily 			= $this->params->get('fontFamily');
$fullWidth				= $this->params->get('fullWidth');
$googleHeaderFont 		= $this->params->get('googleHeaderFont');
$loadMoo 				= $this->params->get('loadMoo');
$loadModal				= $this->params->get('loadModal');
$loadjQuery 			= $this->params->get('loadjQuery');
$mdetect 				= $this->params->get('mdetect');
$mtemplate				= $this->params->get('mtemplate');
$setGeneratorTag		= $this->params->get('setGeneratorTag');
$showDate 				= $this->params->get('showDate');		
$showDiagnostics 		= $this->params->get('showDiagnostics');
$siteWidth				= $this->params->get('siteWidth');
$siteWidthType			= $this->params->get('siteWidthType');
$siteWidthUnit			= $this->params->get('siteWidthUnit');
$showPageLinks 			= $this->params->get('showPageLinks');
$useCustomStyleSheet 	= $this->params->get('useCustomStyleSheet');
$useStickyFooter 		= $this->params->get('useStickyFooter');
$useSubBodyClasses		= $this->params->get('useSubBodyClasses');
// Define absolute paths to files
$mdetectFile 			= JPATH_THEMES.'/'.$this->template.'/mobile/mdetect.php';
$mtemplateFile			= JPATH_THEMES.'/'.$this->template.'/mobile/'.$mtemplate.'-offline.php';
$logicFile				= JPATH_THEMES.'/'.$this->template.'/logic.php';
// To enable user specific data
$user 					= JFactory::getUser();
/*
<?php echo $user->get('name');?>
<?php echo $user->get('email');?>
<?php echo $user->get('usertype');?>
<?php echo $user->get('registerDate');?>
<?php echo $user->get('lastvisitDate');?>
*/

// Change generatot tag
$this->setGenerator($setGeneratorTag);

// Load the MooTools JavaScript Library 
if ($loadMoo) {
	JHTML::_('behavior.mootools');
	if ($loadModal) {
		// Enable modal pop-ups - see html/mod_footer/default.php to customize
		JHTML::_('behavior.modal');
	}
}

// Load template logic
if(file_exists($logicFile)) include $logicFile;

// Mobile device detection
if(file_exists($mdetectFile)) include_once $mdetectFile;
$uagent_obj = new uagent_info();
$isMobile = $uagent_obj->DetectMobileLong();
// Check if mobile device detecion is turned on and, test if visitor is a mobile device, and if so, load mobile offline sub-template
if ( $mdetect && $isMobile ) {
	echo '<span>You are viewing the mobile device friendly version of this website.</span>';
		if(file_exists($mtemplateFile)) include_once $mtemplateFile;
}
else {
?>

<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
  <meta name="mssmarttagspreventparsing" content="true" />
  <meta name="offlinetemplate" />  
  <meta http-equiv="imagetoolbar" content="no" />
  <meta name="copyright" content="<?php echo $app->getCfg('sitename');?>" />	
  <link rel="shortcut icon" href="<?php echo 'templates/'.$this->template; ?>/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="<?php echo 'templates/'.$this->template; ?>/favicon.png" type="image/png" />	
  <link rel="stylesheet" href="<?php echo 'templates/'.$this->template; ?>/css/screen.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo 'templates/'.$this->template; ?>/css/print.css" type="text/css" media="print" />
<?php if ($enableSwitcher) {
  echo '  <link rel="alternate stylesheet" href="templates/'.$this->template.'/css/diagnostic.css" type="text/css" title="diagnostic"/>
  <link rel="alternate stylesheet" href="templates/'.$this->template.'/css/normal.css" type="text/css" title="normal"/>
  <link rel="alternate stylesheet" href="templates/'.$this->template.'/css/wireframe.css" type="text/css" title="wireframe"/>';
} ?>
<?php	
	if (($useCustomStyleSheet) && ($customStyleSheet !='-1'))
		echo "\n".'  <link rel="stylesheet" href="templates/'.$this->template.'/css/'.$customStyleSheet.'"  type="text/css" media="screen" />';
	if ($this->direction == 'rtl')
		echo "\n".'  <link rel="stylesheet" href="templates/'.$this->template.'/css/rtl.css"  type="text/css" media="screen" />';
	if (isset($cssFile))
		echo "\n".$cssFile;
	if ($googleHeaderFont != "")
		echo "\n".'  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$googleHeaderFont.'">
		<style type="text/css">h1,h2,h3,h4,h5,h6{font-family:'.$googleHeaderFont.', serif !important}</style>';
	if ($loadjQuery)
		$doc->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js");
	if ($enableSwitcher)
		echo "\n".'  <script type="text/javascript" src="templates/'.$this->template.'/js/styleswitch.js"></script>';
	if ($siteWidth)
		echo "\n".'  <style type="text/css"> #body-container, #supra {'.$siteWidthType.':'.$siteWidth.$siteWidthUnit.' !important}</style>';
	if ($siteWidthType == 'max-width')
		echo "\n".'  <style type="text/css"> img, object {max-width:100%}</style>';		
	if (!$fullWidth)
		echo "\n".'  <style type="text/css"> #header, #footer {'.$siteWidthType.':'.$siteWidth.$siteWidthUnit.';margin:0 auto}</style>';
?>  
  <script type="text/javascript">window.addEvent('domready',function(){new SmoothScroll({duration:1200},window);});</script>
  <!--[if lt IE 7]>
<?php if ($IE6TransFix) {
  echo '  <script type="text/javascript" src="templates/'.$this->template.'/js/DD_belatedPNG_0.0.8a-min.js"></script>
  <script>DD_belatedPNG.fix('.$IE6TransFixTargets.');</script>'."\n";
} ?>
  <link rel="stylesheet" href="<?php echo 'templates/'.$this->template; ?>/css/ie6.css" type="text/css" media="screen" />
  <style type="text/css">
  body {text-align:center}
  #body-container{text-align:left}
  #body-container, #supra<?php if (!$fullWidth) echo ',#header, #footer'; ?>{width: expression( document.body.clientWidth > <?php echo ($siteWidth -1); ?> ? "<?php echo $siteWidth.$siteWidthUnit; ?>" : "auto" );margin:0 auto}	
  </style>
  <![endif]-->
<?php if ($useStickyFooter) {
	echo '  <!--[if !IE 7]>
  <style type="text/css">body.sticky-footer #footer-push {display:table;height:100%}</style>
  <![endif]-->';
} ?>
<?php if ($IECSS3) {
  echo '  <!--[if !IE 9]>
  <style type="text/css">'.$IECSS3Targets.'"{behavior:url("'.$baseUrl.'templates/'.$this->template.'/js/PIE.htc)</style>
  <![endif]-->';
} ?>
</head>

<body class="<?php echo $fontFamily.' '.$columnLayout; if($useStickyFooter) echo ' sticky-footer'; if ($useSubBodyClasses) { echo ' '.$currentComponent.' '.$currentAlias; if($articleId!=0) echo ' article-'.$articleId; if ($itemId!=0) echo ' item-'.$itemId; if($catId!=0) echo ' category-'.$catId; if($sectionId!=0) echo ' section-'.$sectionId;} ?>">

<?php if ($this->countModules('analytics')) : ?>
	<jdoc:include type="modules" name="analytics" />
<?php endif; ?>

<a id="page-top" name="page-top"></a>
	<div id="footer-push">

		<?php if ($supraModuleCount) : ?>
			<div id="supra" class="clearfix">						
				<?php if ($this->countModules('supra1')) : ?>
					<div id="supra1" class="<?php echo $supraModuleClass ?>">
						
					</div><!-- end supra1 -->								
				<?php endif; ?>		   
				<?php if ($this->countModules('supra2')) : ?>
					<div id="supra2" class="<?php echo $supraModuleClass ?>">
						
					</div><!-- end supra2 -->								
				<?php endif; ?>				
				<?php if ($this->countModules('supra3')) : ?>
					<div id="supra3" class="<?php echo $supraModuleClass ?>">
						
					</div><!-- end supra3 -->								
				<?php endif; ?>				
				<?php if ($this->countModules('supra4')) : ?>
					<div id="supra4" class="<?php echo $supraModuleClass ?>">
						
					</div><!-- end supra4 -->								
				<?php endif; ?>						
			</div><!-- end supra -->
		<?php endif; ?>	
	
		<div id="header" class="clear clearfix">
			<div class="gutter clearfix">

				<?php if ($showDate) : ?>
					<div class="date-container">
						<span class="date-weekday"><?php $now = &JFactory::getDate(); echo $now->toFormat('%A').','; ?></span>
						<span class="date-month"><?php $now = &JFactory::getDate(); echo $now->toFormat('%B'); ?></span>
						<span class="date-day"><?php $now = &JFactory::getDate(); echo $now->toFormat('%d').','; ?></span>
						<span class="date-year"><?php $now = &JFactory::getDate(); echo $now->toFormat('%Y'); ?></span>
					</div>
				<?php endif; ?>	
				
				<?php if ($showDiagnostics) : ?>
					<ul id="diagnostics">
						<li><?php echo $currentComponent; ?></li>
						<li><?php if($articleId!=0) echo 'article-'.$articleId; ?></li>
						<li><?php if($itemId!=0) echo' item-'.$itemId; ?></li>
						<li><?php if($catId!=0) echo ' category-'.$catId; ?></li>
						<li><?php if($sectionId!=0) echo ' section-'.$sectionId; ?></li>
					</ul>
				<?php endif; ?>	

				<h1 id="logo"><a href="<?php echo $this->baseurl ?>/" title="<?php echo $app->getCfg('sitename');?>"><?php echo $app->getCfg('sitename');?></a></h1>
				
				<?php if ($this->countModules('header')) : ?>
					<jdoc:include type="modules" name="header" style="jexhtml" />	
				<?php endif; ?>		
										
				<?php if ($showPageLinks) : ?>						
					<ul id="access">
						<li>Jump to:</li>
						<li><a href="<?php $url->setFragment('content'); echo $url->toString();?>" class="to-content">Content</a></li>					
						<?php if ($this->countModules('nav')) : ?>
							<li><a href="<?php $url->setFragment('nav'); echo $url->toString();?>" class="to-nav">Navigation</a></li>
						<?php endif; ?>					
						<?php if ($contentBottomCount) : ?>
							<li><a href="<?php $url->setFragment('additional'); echo $url->toString();?>" class="to-additional">Additional Information</a></li>
						<?php endif; ?>
					</ul>				
				<?php endif; ?>	
				
				<?php if ($enableSwitcher) : ?>
					<ul id="style-switch">
						<li class="narrow"><a href="#" onclick="setActiveStyleSheet('diagnostic'); return false;" title="Diagnostic">Diagnostic Mode</a></li>
						<li class="wide"><a href="#" onclick="setActiveStyleSheet('normal'); return false;" title="Normal">Normal Mode</a></li>
					</ul>
				<?php endif; ?>	

			</div><!--end gutter -->
		</div><!-- end header-->
		   
		<div id="body-container">

			<?php if ($subHeadCount) : ?>
				<div id="sub-header" class="clearfix">						
					<?php if ($this->countModules('subhead1')) : ?>
						<div id="subhead1" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end head -->								
					<?php endif; ?>			   
					<?php if ($this->countModules('subhead2')) : ?>
						<div id="subhead2" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end subhead2 -->
					<?php endif; ?>					
					<?php if ($this->countModules('subhead3')) : ?>
						<div id="subhead3" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end subhead3 -->
					<?php endif; ?>					
					<?php if ($this->countModules('subhead4')) : ?>
						<div id="subhead4" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end subhead4 -->
					<?php endif; ?>					
					<?php if ($this->countModules('subhead5')) : ?>
						<div id="subhead5" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end subhead5 -->
					<?php endif; ?>					
					<?php if ($this->countModules('subhead6')) : ?>
						<div id="subhead6" class="<?php echo $subHeadClass ?>">
							
						</div><!-- end subhead6 -->
					<?php endif; ?>											
				</div><!-- end sub-header -->
			<?php endif; ?>
		
			<?php if ($this->countModules('breadcrumbs')) : ?>		
				<div id="breadcrumbs">
					
				</div>				
			<?php endif; ?>		
			
			<?php if ($this->countModules('nav')) : ?>
				<div id="nav" class="clear clearfix">
					
				</div><!-- end nav-->
			<?php endif; ?>
	  
			<div id="content-container" class="clear clearfix">    

				<?php if ($subNavCount) : ?>
					<div id="sub-nav" class="clearfix">						
						<?php if ($this->countModules('user1')) : ?>
							<div id="user1" class="<?php echo $subNavClass ?>">
								
							</div><!-- end user1 -->								
						<?php endif; ?>
				   
						<?php if ($this->countModules('user2')) : ?>
							<div id="user2" class="<?php echo $subNavClass ?>">
								
							</div><!-- end user2 -->
						<?php endif; ?>
						
						<?php if ($this->countModules('user3')) : ?>
							<div id="user3" class="<?php echo $subNavClass ?>">
								
							</div><!-- end user3 -->
						<?php endif; ?>
						
						<?php if ($this->countModules('user4')) : ?>
							<div id="user4" class="<?php echo $subNavClass ?>">
								
							</div><!-- end user4 -->
						<?php endif; ?>						
					</div><!-- end sub-nav -->
				<?php endif; ?>
			
				<div id="load-first" class="clearfix">
					<a id="content" name="content"></a>     
					<div id="content-main">
						<div class="gutter">
						
							<?php if ($contentTopCount) : ?>
								<div id="content-top" class="clearfix">						
									<?php if ($this->countModules('top')) : ?>
										<div id="top" class="<?php echo $contentTopClass ?>">
											
										</div><!-- end top -->								
									<?php endif; ?>
							
									<?php if ($this->countModules('top2')) : ?>
										<div id="top2" class="<?php echo $contentTopClass ?>">
											
										</div><!-- end top2 -->
									<?php endif; ?>
									
									<?php if ($this->countModules('top3')) : ?>
										<div id="top3" class="<?php echo $contentTopClass ?>">
											
										</div><!-- end top3 -->
									<?php endif; ?>
									
									<?php if ($this->countModules('top4')) : ?>
										<div id="top4" class="<?php echo $contentTopClass ?>">
											
										</div><!-- end top4 -->
									<?php endif; ?>						
								</div><!-- end content-top -->
							<?php endif; ?>
							
							<div id="offline">
								<?php if ($this->countModules('offline')) : ?>								
										<jdoc:include type="modules" name="offline" style="jexhtml" />								
								<?php endif; ?>	
					  
							<?php if ($this->getBuffer('message')) : ?>
								<jdoc:include type="message" />
							<?php endif; ?>
							
							<h3><?php echo $app->getCfg('offline_message'); ?></h3>
							<form action="index.php" method="post" name="login" id="form-login">
								<fieldset class="input">
									<label id="form-login-username"  for="username"><?php echo JText::_('JGLOBAL_USERNAME') ?>
										<input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" size="18" />
									</label>
									<label id="form-login-password" for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?>
										<input type="password" name="password" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" />
									</label>
									<label id="form-login-remember" for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>
										<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
									</label>						
									<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
									<input type="hidden" name="option" value="com_users" />
									<input type="hidden" name="task" value="user.login" />
									<input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
									<?php echo JHtml::_('form.token'); ?>
								</fieldset>
							</form>
								
						<?php if ($contentBottomCount) : ?>
								<div id="content-bottom" class="clearfix">						
									<?php if ($this->countModules('user5')) : ?>
										<div id="user5" class="<?php echo $contentuser5Class ?>">
											
										</div><!-- end user5 -->								
									<?php endif; ?>
						
									<?php if ($this->countModules('user6')) : ?>
										<div id="user6" class="<?php echo $contentBottomClass ?>">
											
										</div><!-- end user6 -->
									<?php endif; ?>
									
									<?php if ($this->countModules('user7')) : ?>
										<div id="user7" class="<?php echo $contentBottomClass ?>">
											
										</div><!-- end user7 -->
									<?php endif; ?>
									
									<?php if ($this->countModules('user8')) : ?>
										<div id="user8" class="<?php echo $contentBottomClass ?>">
											
										</div><!-- end user8 -->
									<?php endif; ?>						
								</div><!-- end content-bottom -->
							<?php endif; ?>
						 
						</div><!--end gutter -->        
					</div><!-- end content-main -->
					
					<?php if ($contentLeftCount) : ?>
						<div id="content-left" class="clearfix">
							<div class="gutter clearfix">						
								<?php if ($this->countModules('left')) : ?>
									<div id="left" class="<?php echo $contentLeftClass ?>">
										
									</div><!-- end left -->								
								<?php endif; ?>			   
								<?php if ($this->countModules('left2')) : ?>
									<div id="left2" class="<?php echo $contentLeftClass ?>">
										
									</div><!-- end left2 -->
								<?php endif; ?>	
							</div><!--end gutter -->
						</div><!-- end left -->
					<?php endif; ?>

				</div><!-- end load-first -->
		
					<?php if ($contentRightCount) : ?>
						<div id="content-right" class="clearfix">
							<div class="gutter clearfix">						
								<?php if ($this->countModules('right')) : ?>
									<div id="content-right-1" class="<?php echo $contentRightClass ?>">
										
									</div><!-- end right -->								
								<?php endif; ?>			   
								<?php if ($this->countModules('right2')) : ?>
									<div id="right2" class="<?php echo $contentRightClass ?>">
										
									</div><!-- end right2 -->
								<?php endif; ?>	
							</div><!--end gutter -->
						</div><!-- end right -->
					<?php endif; ?>
			
				<?php if ($subContentCount) : ?>
					<div id="sub-content" class="clearfix">						
						<?php if ($this->countModules('sub1')) : ?>
							<div id="sub1" class="<?php echo $subContentClass ?>">
								
							</div><!-- end sub1 -->								
						<?php endif; ?>			   
						<?php if ($this->countModules('sub2')) : ?>
							<div id="sub2" class="<?php echo $subContentClass ?>">
								
							</div><!-- end sub2 -->
						<?php endif; ?>					
						<?php if ($this->countModules('sub3')) : ?>
							<div id="sub3" class="<?php echo $subContentClass ?>">
								
							</div><!-- end sub3 -->
						<?php endif; ?>					
						<?php if ($this->countModules('sub4')) : ?>
							<div id="sub4" class="<?php echo $subContentClass ?>">
								
							</div><!-- end sub4 -->
						<?php endif; ?>					
						<?php if ($this->countModules('sub5')) : ?>
							<div id="sub5" class="<?php echo $subContentClass ?>">
								<jdoc:include type="modules" name="sub5" style="jexhtml" module-class="gutter" />
							</div><!-- end sub5 -->
						<?php endif; ?>						
						<?php if ($this->countModules('sub6')) : ?>
							<div id="sub6" class="<?php echo $subContentClass ?>">
								
							</div><!-- end sub6 -->
						<?php endif; ?>											
					</div><!-- end sub-content -->
				<?php endif; ?>

			</div><!-- end content-container -->
		</div><!-- end body-container -->
	</div><!-- end footer-push -->
    
	<div id="footer" class="clear clearfix">
		<div class="gutter clearfix">
			<a id="to-page-top" href="<?php $url->setFragment('page-top'); echo $url->toString();?>" class="to-additional">Back to Top</a>

			<?php if ($this->countModules('syndicate')) : ?>			
			<div id="syndicate">
				
			</div>
			<?php endif; ?>

			<?php if ($this->countModules('footer')) : ?>
				<jdoc:include type="modules" name="footer" style="jexhtml" />
			<?php endif; ?>

		</div><!--end gutter -->
	</div><!-- end footer -->

	<?php if ($this->countModules('debug')) : ?>
		<jdoc:include type="modules" name="debug" style="raw" />
	<?php endif; ?>
	
	<?php if ($this->countModules('analytics')) : ?>
		<jdoc:include type="modules" name="analytics" />
	<?php endif; ?>	  
	
	</body>
</html>
<?php } ?>