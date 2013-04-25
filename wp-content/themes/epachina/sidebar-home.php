<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
<?php $options = get_option('responsive_theme_options');?>
   <div id="widgets" class="home-widgets clear">
        <div class="grid col-620 home-new-articles fit">
            <div class="widget-wrapper">
                <div class="widget-title-home bottom-solid-line"><h3>最新资讯</h3></div>
            </div>
            <?php wp_reset_query();
$query_string='posts_per_page=5&paged=1&category_name=show-on-home';
query_posts($query_string);
if (have_posts()) :
 ?>
		<?php while (have_posts()) : the_post(); ?>
            <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="<?php echo the_post_thumbnail_url(get_the_ID())?>" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a target="_blank" href="<?php echo get_permalink(get_the_id()) ?>"><?php the_title() ?></a></h1>
                    <p><a  target="_blank"  href="<?php echo get_permalink(get_the_id()) ?>"><?php the_excerpt() ?></a></p>
                </div>
            </div>
            <?php endwhile; 
endif; ?>
            <div class="more"><a href="/">更多详情》》</a></div>
        </div><!-- end of .col-300 -->
        
        <div class="grid col-250 right fit widget-home-right">
        <?php //responsive_widgets(); // responsive above widgets hook ?>
			<?php if (!dynamic_sidebar('home-widget-2')) : ?>
            <div class="widget-wrapper">
                <div class="widget-title-home"><h3><?php _e('Home Widget 2', 'responsive'); ?></h3></div>
                <div class="textwidget"><?php _e('This is your second home widget box. To edit please go to Appearance > Widgets and choose 7th widget from the top in area 7 called Home Widget 2. Title is also manageable from widgets as well.','responsive'); ?></div>
			</div><!-- end of .widget-wrapper -->
			<?php endif; //end of home-widget-2 ?>
            
        <?php //responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of .col-350 -->

       
    </div><!-- end of #widgets -->
    <hr class="line"/>
    <div class="cases">
        <div class="widget-wrapper case-item">
            <div class="widget-title-home bottom-solid-line"><h3><a href="/cat/blogs/">研究员观点</a></h3></div>
            <div class=""><img  style="height:65px;width:185px" src="http://epachina.org/wp-content/uploads/2013/05/111-150x150.jpg"/></div>
            <div class="case-entry">
                <?php wp_reset_query();
$query_string='posts_per_page=3&paged=1&category_name=blogs';
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
                <a href="<?php echo get_permalink(get_the_id());?>" title="<?php the_title() ?>" target="_blank"><?php echo mb_substr(get_the_title(),1,13,'utf8'); ?></a><br/> 
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="widget-wrapper case-item">
            <div class="widget-title-home bottom-solid-line"><h3><a href="/cat/profession-articles/">行业信息</a></h3></div>
            <div class=""><img style="height:65px;width:185px" src="http://www.jobexcel.com/uploads/allimg/130418/1_1948303231.jpg"/></div>
            <div class="case-entry">
                 <?php wp_reset_query();
$query_string='posts_per_page=3&paged=1&category_name=profession-articles';
query_posts($query_string);
if (have_posts()) :
    while (have_posts()) : the_post();
 ?>
                <a href="<?php echo get_permalink(get_the_id());?>" title="<?php the_title() ?>" target="_blank"><?php echo mb_substr(get_the_title(),1,13,'utf8'); ?></a><br/> 
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="widget-wrapper right-advertise">
           <?php echo $options['home_bottom_ad']; ?>
        </div>
    </div>
    <hr class="line"/>

     <div class=" widget-wrapper clear">
       <div class="link-container">合作伙伴</div>
         <div id="links">
            <div id="buttonPrev"></div>
            <div id="imagesContainer">
                <ul id="frameView">
                    <li><a target="_blank" title="暴风影音" href="//www.baofeng.com"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/baofeng.jpg"></a></li>
                 <li><a target="_blank" title="南都" href="//www.nbweekly.com"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/nandu.jpg"></a></li>
                 <li><a target="_blank" title="Poewr"  href="//www.powerltd.com"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/power.jpg"></a></li>
                 <li><a  target="_blank" title="环企" href="//www.gemag.com.cn"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/huanqi.jpg"></a></li>
                 <li><a target="_blank" title="听到"  href="//www.tndao.com"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/tingdao.jpg"></a></li>
                 <li><a target="_blank" title="湛庐文化" href="//blog.sina.com.cncheersbooks"><img alt="" src="<?php echo get_template_directory_uri(); ?>/logos/zhanlu.jpg"></a></li>
                </ul> 
             </div>
            <div id="buttonNext"></div>
        </div>