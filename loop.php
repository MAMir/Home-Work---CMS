<div class="middle-loop">

	<?php
		if( have_posts() ) {
	?>

		<?php the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>

	<?php
		} else {
	?>
		<article>
			<h1>MOteasefam peyda nashod...</h1>
			<p>ye bar dige addresro check kon, ehtemalan eshtebah zadi</p>
		<article>
	<?php
		}
	?>

</div>