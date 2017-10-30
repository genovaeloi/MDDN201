<?php
/**
    Template Name: Challenges
 */
?>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- jquery -->
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


			<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/petDashboard.css"/>

<?php get_header(); ?>

<!-- pet-tab ends-->

		<div id="pet-tab">
		<div id="daily">
			<a href="https://localhost/blog/">
				<img id="challenge" src="https://localhost/wp-content/uploads/2017/10/DCBtn.png">
		</a>
		</div>

			<img class="radial" id="bar1" src="https://localhost/wp-content/uploads/2017/10/radial1.png">
			<img class="radial" id="bar2" src="https://localhost/wp-content/uploads/2017/10/radial2.png">
			<img class="radial" id="bar3" src="https://localhost/wp-content/uploads/2017/10/radial3.png">
			<img class="radial" id="bar4" src="https://localhost/wp-content/uploads/2017/10/radial4.png">

			<div id="avatar" >
					<img  id="avatar-img" src="https://localhost/wp-content/uploads/2017/10/redMon.gif">
			</div>

		</div>
<!-- pet-tab ends-->



		<div class="button-tab">
			<div id="carousel-example-generic" class="carousel slide" >
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li class="Btn-img" id="Btn1" data-target="#carousel-example-generic" data-slide-to="0" ></li>
		    <li class="Btn-img" id="Btn2" data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li class="Btn-img" id="Btn3" data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li class="Btn-img" id="Btn4" data-target="#carousel-example-generic" data-slide-to="3"></li>
		    <li class="Btn-img" id="Btn5" data-target="#carousel-example-generic" data-slide-to="4"></li>

		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
					<?php $loop = new WP_Query( array( 'orderby' => 'challenges', 'order' => 'ASC' ) ); ?>
					  <?php while( $loop->have_posts() ) : $loop->the_post();?>

					    <!-- variables -->
					    <?php
					        $challenge_type        = get_field('challenge_type');
					        $challenges_title        = get_field('challenges_title');
					        $challenges_description   = get_field('challenges_description');
					        $challenge_status     = get_field('challenge_status ');

					    ?>


		      <div class="carousel-caption">

		      </div>
		    </div>

		    <div class="item">
		      <!-- <img src="..." alt="..."> -->
		       <h2><?php echo $challenge_type ; ?></h2>
		      	<p>Praesent euismod tincidunt sem vitae finibus.</p>
		        <p>Praesent euismod tincidunt sem vitae finibus.</p>
		        <p>Praesent euismod tincidunt sem vitae finibus.</p>
		      <div class="carousel-caption">

		      </div>
		    </div>
		    <div class="item">
		      <!-- <img src="..." alt="..."> -->
		       <h2><?php the_title(); ?></h2>
		      	<p>Praesent euismod tincidunt sem vitae finibus.</p>
		        <p>Praesent euismod tincidunt sem vitae finibus.</p>
		        <p>Praesent euismod tincidunt sem vitae finibus.</p>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
		      <div class="carousel-caption">

		      </div>
		    </div>
			</div>

		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>


		</div>


	</body>
<?php wp_footer(); ?>
