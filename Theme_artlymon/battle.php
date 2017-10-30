<?php
/**
    Template Name: battle
     */
?>
<?php get_header(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/battle.css"/>



<div class="botContent">

      <a class="link" href="../html/opponent.html">
        <div id="blog">
          <img id="blog-img" src="https://localhost/wp-content/uploads/2017/10/find.png">
          <h2 class="button-text-right"> Find Opponent </h2>

        </div>
      </a>

      <div class="pageBreaker">

      </div>

      <a class="link" href="../html/match.html">
        <div id="battle" >
          <h2 class="button-text-left"> Match History </h2>
          <img id="battle-img" src="https://localhost/wp-content/uploads/2017/10/list.png">


        </div>
      </a>

<?php wp_footer(); ?>
