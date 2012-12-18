<?php get_header(); ?>
<script type="text/javascript">
	$(function() {

		referencesAjax();

		$('select').on('change',function(){
			date = $('#order_date').find('option:selected').attr('value');
			architecte = $('#order_architecte').find('option:selected').attr('value');
			country = $('#order_country').find('option:selected').attr('value');

			referencesAjax(date, architecte, country);
		});

		function referencesAjax(dateOrder, whereArchitecte, whereCountry){
			$.ajax({
			  	url: templateDir + '/loopHandler.php',
			  	type: "POST",
			  	data : {
			  		order : dateOrder,
			  		architecte : whereArchitecte,
			  		country : whereCountry
			  	},
			  	dataType: "json",
			  	beforeSend : function(){
			  		$('.loader').css('display','block');
			  	},
			  	success: function(response){

			  		$('.loader').css('display','none');

			  		$('#results').empty();

			  		$.each(response, function(value, key) {

			  			$li = $('<li>');
			  			$a = $('<a>').attr('href',key[1]).html(key[0]);
					    $('#results').append($li.append($a));
					});

			  		
			        //$('#results').html(response);
			    },
			    error: function(response){
			    	$('.loader').css('display','none');
			    	console.log('error');
			    }
			});
		}
	}); 
</script>

<div id="wrapper">

	<?php
		$query = new WP_Query( array( 'post_type' => 'architectes', 'posts_per_page' => -1));
		$posts = $query->posts;
		$arrayArchitectes = array();

		echo '<select name="architectes" id="order_architecte">';
		echo '<option value="" selected>Tous</option>';

		foreach ($posts as $post){
			$name = get_the_title();
			if(!in_array($name, $arrayArchitectes)){
				array_push($arrayArchitectes, $name);
				?><option value="<?php the_title(); ?>"><?php the_title(); ?></option><?php
			}
		}
		echo '</select>';

		$countries = $wpdb->get_results('
			SELECT distinct meta_value
			FROM '.$wpdb->posts.', '.$wpdb->postmeta.'
			WHERE post_type="references"
			AND meta_key = "country"
			ORDER BY meta_value ASC'
		);

		echo '<select name="country" id="order_country">';
		echo '<option value="" selected>Tous</option>';

		foreach ($countries as $country){
			?><option value="<?php echo $country->meta_value; ?>"><?php echo $country->meta_value; ?></option><?php
		}
		echo '</select>';
	?>

	<select name="date" id="order_date">
		<option value="desc" selected>Décroissant</option>
		<option value="asc">Croissant</option>
	</select>



	<img src="<?php bloginfo('template_directory') ?>/images/spinner.gif" alt="loader" class="loader"/>

	<br/><br/>

	<ul id="results"></ul>

</div>

<?php get_footer(); ?>