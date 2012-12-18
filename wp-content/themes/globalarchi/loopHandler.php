<?php
	// Our include  
	define('WP_USE_THEMES', false);  
	require_once('../../../wp-load.php');  

	$order = 'desc';
	if(isset($_POST['order'])){
		$order = $_POST['order'];
	}

	$metaQuery = array();
	if( isset($_POST['country']) && !empty($_POST['country'])){
		array_push($metaQuery, array('key' => 'country', 'value' => $_POST['country'], 'compare' => '='));
	}

	$valid = true;
	$postArchitecte = '';
	if(isset($_POST['architecte']) && !empty($_POST['architecte'])){
		$postArchitecte = $_POST['architecte'];
		$valid = false;
	}

	$query = new WP_Query( 
		array(
			'post_type' => 'references',
			'orderby' => 'date',
			'order' => $order,
			'posts_per_page' => -1,
			'meta_query' => $metaQuery
		)
	);

	$posts = $query->posts;

	//echo '<pre>';
	//var_dump($query);


	echo '<ul>';
	foreach ($posts as $post){
		//Check architecte
		$check = $valid;

		if(!$valid){
			$architectes = get_field('architecte');

			foreach ($architectes as $architecte) {
				if($postArchitecte == $architecte->post_title){
					$check = true;
				}
			}
		}
		
		if($check){
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