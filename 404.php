<?php get_header( 'back' ); ?>

<section>
	<div class="container">
		<div class="wrapper404">
			<h1 class="title404">404</h1>
			<div class="descr404"><?php echo esc_html( pll__( 'Sellist lehekülge ei ole, palun pöörduge tagasi pealehele.' ) ) ?></div>
			<a href="<?= site_url(); ?>" class="btn btn_reverse btn404"><?php echo esc_html( pll__( 'Tagasi avalehele' ) ) ?></a>
		</div>
	</div>
</section>

<?php get_footer( 'back' ); ?>