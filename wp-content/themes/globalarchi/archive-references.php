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
<div id="content" class="references_list">

<div class="wrapper">
	<section id="logo">
		<div class="inner">
			<h1>
				<img src="<?php bloginfo('template_directory');?>/images/design/logo.png" alt="" />
				<span><?php bloginfo( 'description' ); ?></span>
			</h1>
		<div class="filters">
		<form>
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
		</form>
		
		
			<img src="<?php bloginfo('template_directory') ?>/images/spinner.gif" alt="loader" class="loader"/>
			<a href="#" class="show_list">Affichage en liste</a>
			<a href="#" class="show_blocks">Affichage en blocs</a>
		</div><!--End filters-->
				</div><!--End inner-->
	</section>
<ul id="results"></ul>


<section id="main" class="box-wrap antiscroll-wrap">
			<div id="content" class="box">
				<ul class="photos_list antiscroll-inner">
					<li>
						<a href="<?php the_permalink() ?>">
							<article>
								<div class="title">
									<span><?php echo get_field('date') ?></span>
									<h2><?php the_title(); ?></h2>
								</div><!--END .title-->
								<img alt="#" src="<?php echo get_field('picture') ?>" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">												<span>02</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb2.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
																								<span>03</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb3.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
																							<span>04</span>				
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb4.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">												<span>05</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb5.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>06</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb6.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>07</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb1.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>08</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb2.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>09</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb3.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>10</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb4.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>11</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb5.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>12</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb6.jpg" />
							</article>
						</a>
					</li>
<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>13</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb1.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>14</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb2.jpg" />
							</article>
						</a>
					</li>
					<li>
						<a href="projet.html">
							<article>
								<div class="title">
									<span>15</span>
									<h2>Direction régionale des impôts</h2>
								</div><!--END .title-->
								<img alt="#" src="images/visuals/photo_thumb3.jpg" />
							</article>
						</a>
					</li>
				</ul>
			</div><!--END #content-->
		</section><!--END #main-->
</div>

<?php get_footer(); ?>