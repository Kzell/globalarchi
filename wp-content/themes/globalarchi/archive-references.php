<?php get_header(); ?>
<script type="text/javascript">
	$(function() {

		referencesAjax();

		$('select').on('change',function(){
			date = $('#order_date').find('option:selected').attr('value');
			architecte = $('#choose_architecte').find('option:selected').attr('value');

			referencesAjax(date, architecte);
		});

		function referencesAjax(dateOrder, whereArchitecte){
			$.ajax({
			  	url: templateDir + '/loopHandler.php',
			  	type: "POST",
			  	data : {
			  		order : dateOrder,
			  		architecte : whereArchitecte
			  	},
			  	beforeSend : function(){
			  		$('.loader').css('display','block');
			  	},
			  	success: function(response){
			  		$('.loader').css('display','none');
			        $('#results').html(response);
			    },
			    error: function(response){
			    	$('.loader').css('display','none');
			    	console.log('error');
			    }
			});
		}
	}); 
</script>

<?php
	$query = new WP_Query( array( 'post_type' => 'architectes', 'posts_per_page' => -1));
	$posts = $query->posts;

	echo '<select name="architectes" id="choose_architecte">';
	echo '<option value="" selected>Tous</option>';

	foreach ($posts as $post){
		?><option value="<?php the_title(); ?>"><?php the_title(); ?></option><?php
	}
	echo '</select>';
?>

<select name="orderby" id="order_date">
	<option value="desc" selected>Décroissant</option>
	<option value="asc">Croissant</option>
</select>



<img src="<?php bloginfo('template_directory') ?>/images/spinner.gif" alt="loader" class="loader"/>

<br/><br/>

<div id="results"></div>

<?php get_footer(); ?>