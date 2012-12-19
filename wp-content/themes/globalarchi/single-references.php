<?php get_header(); ?>
	<div id="wrapper" class="single_reference">
		<div class="banner_show_hide">
			<section id="logo">
				<div class="inner">
					<h1>
						<img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" />
						<span><?php bloginfo( 'description' ); ?></span>
					</h1>
				</div>
			</section>
			<section id="description_projet">
				<div class="title">
					<h2><?php echo the_title() ?></h2>
				</div>
				<ul class="description_list">
					<li>
						<span>Lieu : </span>
						<strong><?php echo get_field('country').' - '.get_field('town'); ?></strong>
					</li>
					<li>
						<span>Maîtrise d'Ouvrage : </span>
						<strong>A voir avec le client.</strong>
					</li>
					<li>
						<span>Architectes : </span>
						<?php 
							$architectes = get_field('architecte');
							$archi = '';
							for ($i=0; $i < sizeof($architectes); $i++) { 
								//var_dump($architectes[$i]);
								$archi .= '<a href="'.$architectes[$i]->guid.'">'.$architectes[$i]->post_title.'</a> - ';
							}
						?>
						<strong><?php echo substr($archi,0,-2); ?></strong>
					</li>
					<li>
						<span>Surface : </span>
						<strong><?php the_field('surface'); ?></strong>
					</li>
					<li>
						<span>Montant travaux : </span>
						<strong><?php the_field('price'); ?></strong>
					</li>
				</ul>
			</section>
		</div>
		<a href="#" class="btn_show_hide_description_reference on">Afficher / Masquer</a>
	</div>
<?php get_footer(); ?>