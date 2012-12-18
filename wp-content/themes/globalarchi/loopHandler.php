<?php
	// Our include  
	define('WP_USE_THEMES', false);  
	require_once('../../../wp-load.php');  

	$order = 'desc';
	if(isset($_POST['order'])){
		$order = $_POST['order'];
	}

	$whereArchitecte = '';
	$valid = true;
	if(isset($_POST['architecte']) && !empty($_POST['architecte'])){
		$whereArchitecte = $_POST['architecte'];
		$valid = false;
	}

	$query = new WP_Query( 
		array(
			'post_type' => 'references',
			'orderby' => 'date',
			'order' => $order,
			'posts_per_page' => -1
		)
	);

	$posts = $query->posts;

	echo '<ul>';
	foreach ($posts as $post){

		//Check architecte
		$architectes = get_field('architecte');

		foreach ($architectes as $architecte) {
			$name = $architecte->post_title;

			if($name == $whereArchitecte){
				$valid = true;
			}
		}

		if($valid){
			?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
			<?php
		}
	}
	echo '</ul>';
?>