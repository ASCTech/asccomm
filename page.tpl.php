<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"> 
<meta name="author" content="Arts and Sciences Technology Services Office"> 
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"> 

<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
	
</head>
<body class="<?php print $body_classes ?>">

	<?php if($drupalnav){ ?>
		<div><?php print $drupalnav ?></div><br/ style="clear:both">
	<?php } ?>

<?php
	$custom_crumbs['Arts and Sciences'] = "http://artsandsciences.osu.edu/";
	require_once(path_to_theme() . "/navbar/osu-navbar-b-custom.php");
?>

	<div id="header">
		<div class="container">
			<div id="header-container" class="span-24">
				<div id="logo">
					<?php if($logo){ ?>
						<a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?> Logo" src="<?php print $logo ?>"/></a>
					<?php } ?>
				</div><!-- .logo -->
				<div id="osulogo"></div>

				<div id="navigation">
					<?php print $MainNav; ?>			
				</div><!-- #navigation -->
			</div>
		</div> <!-- .container -->
	</div> <!-- #header -->
	<div id="headerbar">&nbsp;</div>
<a name="page-content"></a>

	<?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

	<div id="footer">
		<div id="footer-right-color">&nbsp;</div>
		<div id="footer-container">
			<div class="container">
				<?php if(true || !$is_front){ ?>
  				<div id="ascbannerbottom">
  				  <a href="http://artsandsciences.osu.edu/" id="aslink-2" title="Click here to visit the Arts and Sciences homepage">
  				    <img src="/sites/asccomm.osu.edu/themes/asccomm/images/banner2.png" alt="Arts and Sciences Icon.">
  				  </a>
  				</div>
  			<? } ?>
				<div id="footer-left" class="span-6 append-2">
					<?php if(user_access('administer site configuration')){ ?>
					<ul class="tabs primary">
						<li class="active">
							<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
						</li>
					</ul>
					<?php } ?>
					<?php print $footer_message; ?>
					<div id="uicons"><?php include("icons/uicons.php"); ?></div>
				</div>
				<div id="footer-search" class="span-7 append-2">&nbsp;
					<?php print $footer_search; ?>&nbsp;
					<hr/>
				</div>
				<div id="footer-right" class="span-7 last">
					<?php print $footer_icons; ?>&nbsp;
				</div>
			</div><!-- .container -->
		</div>
	</div><!-- #footer -->	


<?php print $closure;?>

</body>

</html>
