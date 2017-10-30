<?php
/**
    Template Name: Blog
 */
?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/calendar.css"/>
<?php get_header(); ?>

<!-- calendar starts-->
	<div class="calendar">
			<div class="month">
	  <ul>
	    <li class="prev">&#10094;</li>
	    <li class="next">&#10095;</li>
	    <li>
	      August<br>
	      <span style="font-size:18px">2017</span>
	    </li>
	  </ul>
	</div>

	<ul class="weekdays">
	  <li>Mo</li>
	  <li>Tu</li>
	  <li>We</li>
	  <li>Th</li>
	  <li>Fr</li>
	  <li>Sa</li>
	  <li>Su</li>
	</ul>

	<ul class="days">
	  <li>1</li>
	  <li>2</li>
	  <li>3</li>
	  <li>4</li>
	  <li>5</li>
	  <li>6</li>
	  <li>7</li>
	  <li>8</li>
	  <li>9</li>
	  <li><span class="active">10</span></li>
	  <li>11</li>
	  <li>12</li>
	  <li>13</li>
	  <li>14</li>
	  <li>15</li>
	  <li>16</li>
	  <li>17</li>
	  <li>18</li>
	  <li>19</li>
	  <li>20</li>
	  <li>21</li>
	  <li>22</li>
	  <li>23</li>
	  <li>24</li>
	  <li>25</li>
	  <li>26</li>
	  <li>27</li>
	  <li>28</li>
	  <li>29</li>
	  <li>30</li>
	  <li>31</li>
	</ul>

	</div>
<!-- calenedar ends-->


<!-- blog starts-->
	<h2>blog</h2>
<!-- 	<?php $loop = new WP_Query( array( 'orderby' => 'blog', 'order' => 'ASC' ) ); ?>
  <?php while( $loop->have_posts() ) : $loop->the_post();?>

	<!-- variables -->
	<?php
			$blog_entry        = get_field('blog_entry');

	?>

	<div class="textBox">

		<?php echo $blog_entry; ?>
	</div>


<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>

<!-- blog ends-->

<?php get_footer(); ?>
