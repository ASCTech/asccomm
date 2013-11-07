		<div id="front-header">
			<div class="container">
				<a id="ascbannertop" href="http://artsandsciences.osu.edu/" title="Click here to visit the Arts and Sciences homepage"></a>
				<div id="front-text" class="span-12">
					<?php print $front_header; ?>
				</div>
				<div id="front-image" class="span-12 last">
					<?php print $front_image; ?>
				</div>
			</div>
		</div>

	<div id="main-content" class="container">
		<div>
			<div class="content span-24">
				<div class="span-14" id="leftcontent">

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
				</div>
				<div class="span-10 last" id="sidebar">
					<div id="below-img"><div>
						<div id="below-img-left"><?php print $below_img_left; ?></div>
                        <div id="below-img-right"><?php print $below_img_right; ?></div>
					</div></div>
					<?php print $right_col; ?>
				</div> <!-- #sidebar -->
			</div>

		</div><!-- #leftcontent-nostyle -->

		
	</div>