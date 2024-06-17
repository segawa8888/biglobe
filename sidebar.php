<aside id="sidebar">
	<div class="p-3 container">
		<?php
		if (is_active_sidebar('side-widget')) :
			dynamic_sidebar('side-widget');?>
        <?php else : ?>
		<section class="widget">
			<h2>Widget Area</h2>
		</section>	
		<?php endif; ?>
	</div>
</aside>