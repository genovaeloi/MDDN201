<?php
/**
    Template Name: Homepage
 */
?>
<?php get_header(); ?>
<!-- top div starts-->
		<div class="content">
			<div class="topContent">

				<div class="profile">
					<a class="link" href="https://localhost/challenges/">
						<button class="button">
							<img src="https://localhost/wp-content/uploads/2017/10/pet.png">
						</button>
					</a>
					<div class="user-stats"></div>
						<h4 class="profile-tag">Name:</h4>
						<input class="profile-input" type="text" name="fullname" size="10" />

						<h4 class="profile-tag">Age:</h4>
						<input class="profile-input" type="text" name="fullname" size="5" />
				</div>
			</div>
<!-- top div ends-->

<!-- buttons starts-->

			<div class="botContent">



				<a class="link" href="https://localhost/blog/">
					<div id="blog" >
						<img id="blog-img" src="https://localhost/wp-content/uploads/2017/10/Asset-3.png">

						<h1 class="button-text-right"> Blog </h1>

					</div>
				</a>

				<div class="pageBreaker">

				</div>

				<a class="link" href="https://localhost/battle/">
					<div id="battle" >
						<h1 class="button-text-left"> Battle </h1>
						<img id="battle-img" src="https://localhost/wp-content/uploads/2017/10/bat.png">


					</div>
				</a>



		</div>
<!-- buttons ends-->



<?php get_footer(); ?>
