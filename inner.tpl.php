	<?php if($breadcrumb){ ?>
	<div id="breadcrumb-filler"></div>
	<?php } ?>
	<div id="main-content" class="container">
			<?php if($breadcrumb){ ?>
			<div id="breadcrumb"><?php print $breadcrumb ?> &gt; <?php print $title; ?></div>
			<?php } ?>
		<div class="span-<?php $right_col ? print "16 append-1" : print "24"; ?>" id="leftcontent">
			<?php if($title){ ?>
			<h1 id="title"><?php print $title ?></h1>
			<?php } ?>

			<?php if($tabs){ ?>
				<?php print $tabs ?>
			<?php } ?>
			<?php if($messages){ ?>
				<div id="message"><?php print $messages ?></div>
			<?php } ?>

			<div class="content">
				<?php print $before_content ?>
				<?php print $content ?>
				<?php print $after_content ?>
			</div>

		</div><!-- #leftcontent-nostyle -->

		<?php if($right_col){ ?>
		<div class="span-7 last inner" id="sidebar">
			<div class="span-6 last">
				<?php print $right_col; ?>
			</div>
		</div> <!-- #sidebar -->
		<?php } ?>
	</div>