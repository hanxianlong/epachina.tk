<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Video Template
 *
   Template Name:  Video Page
 *
 * @file           sidebar-video.php
 * @package        Responsive 
 * @author         hanxianlong
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/content-sidebar-half-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
        <div id="content" >
		<?php $options = get_option('responsive_theme_options'); ?>
		<?php if ($options['breadcrumb'] == 0): ?>
		<?php echo responsive_breadcrumb_lists(); ?>
        <?php endif; ?>
		<div style="clear:both">
		<?php 
		
$query_string='posts_per_page=1&page_id=149';
query_posts($query_string);
if (have_posts()) :
                    the_post();
                the_content();
                   endif;
		?>
		</div>
		<?php

global $cat;
$searchCondition = 'cat';

if(isset($_GET['scat']))
{
    $cat = $_GET['scat'];
    $searchCondition='category_name';
}

if(!isset($cat))
	$cat= 12;
//echo '$cat:'.$cat;
wp_reset_query();
$query_string='posts_per_page=20&paged='.$paged . '&'.$searchCondition.'='.$cat;

query_posts($query_string);
if (have_posts()) :
 ?>
		<?php while (have_posts()) : the_post(); ?>
	<div class="video-item">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img src="<?php echo the_post_thumbnail_url(get_the_ID())?>" height="190px" width="220px" />
			</a>
			<div>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
	</div>
        <?php endwhile; ?>
	 <?php pagenavi(); ?>
	<?php else : ?>

        <h1 class="title-404">很抱歉，暂无视频,请稍后回来。</h1>
<?php endif; ?>  
      
        </div><!-- end of #content -->
<script language="javascript">
	jQuery(".video-item").hover(function(){jQuery(this).fadeTo(0.8,0.5)}).mouseleave(function(){jQuery(this).fadeTo(0.8,1);});
</script>
<?php get_footer(); ?>
