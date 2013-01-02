<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="row">			

	<div id="imgslide" class="carousel slide span8">
                <div class="carousel-inner">
                  <div class="item active left">
                    <img src="img/01.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                    </div>
                  </div>
                  <div class="item next left">
                    <img src="img/02.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>ullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="img/03.jpg" alt="">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justoid nibh ultricies vehicula ut id elit.</p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>

<script type="text/javacript">
	$('.carousel').carousel();
</script>

<!--************新闻中心***************-->
<div id="news" class="span4"> 
	<ul class="nav nav-list" style="list-style: disc;">
		<li class="nav-header head">
			<a href = "<?=get_category_link(get_cat_ID("新闻中心"))?>" >新闻中心 News <span class = "more">更多</span></a>
		</li>
		<li class="divider"></li>
<?php 
	$args = array(
	    'posts_per_page' => 7,
	    'paged' => 1,
	    'category_name' => "新闻中心",
	);
	$query = new WP_Query($args);
	$recent_posts = wp_get_recent_posts($query);
	while($query->have_posts()):
	    $query->next_post();
	    $post_id = $query->post->ID;
	    $post_title = urldecode($query->post->post_name);
	    $post_time = $query->post->post_date;
?>
	<li><a href = "<?=get_permalink($post_id);?>" title = "<?=$post_title;?>"><?=$post_title;?></a></li>
		<li class="divider"></li>
<?php endwhile; ?>
	</ul>
</div><!-- # news-->

</div> <!--- row -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
