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
            <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="http://hanxianlong.tk/a.jpg" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a href="/">文章标题文章标题文章标题</a></h1>
                    <p><a href="/"><i>文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容</i></a></p>
                </div>
            </div>
             <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="http://hanxianlong.tk/a.jpg" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a href="/">文章标题文章标题文章标题</a></h1>
                    <p><a href="/"><i>文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容</i></a></p>
                </div>
            </div>
             <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="http://hanxianlong.tk/a.jpg" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a href="/">文章标题文章标题文章标题</a></h1>
                    <p><a href="/"><i>文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容</i></a></p>
                </div>
            </div>
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
            <div class="widget-title-home bottom-solid-line"><h3>精彩案例</h3></div>
            <div class=""><img src="http://www.astd.org/~/media/Images/Community-Featured-Image/TOUCHMAP.jpg"/></div>
            <div class="case-entry">
                <a href="/">New Cases Text</a><br/>
                <a href="/">Cases2</a><br/>
                <a href="/">Cases2</a><br/>
            </div>
        </div>
        <div class="widget-wrapper case-item">
            <div class="widget-title-home bottom-solid-line"><h3>资源精华</h3></div>
            <div class=""><img src="http://www.astd.org/~/media/Images/Community-Featured-Image/TOUCHMAP.jpg"/></div>
            <div class="case-entry">
                <a href="/">New Cases Text</a><br/>
                <a href="/">Cases2</a><br/>
                <a href="/">Cases2</a><br/>
            </div>
        </div>
        <div class="widget-wrapper right-ad"><img src="http://www.astd.org/~/media/Images/Marketing/011390%20ICE-retargeter-ad_600x250_v2.gif"/></div>
    </div>
    <hr class="line"/>

     <div class=" widget-wrapper clear">
       <div class="link-container">合作伙伴</div>
         <div id="links">
            <div id="buttonPrev"></div>
            <div id="imagesContainer">
                <ul id="frameView">
                 <li><a href="http://item.vancl.com/0191706.html"><img alt="" src="http://i2.vanclimg.com/www/company/13.png"></a></li><li><a href="http://item.vancl.com/0191630.html"><img alt="" src="http://i3.vanclimg.com/www/company/14.png"></a></li><li><a href="http://item.vancl.com/0192069.html"><img alt="" src="http://i5.vanclimg.com/www/company/11.png"></a></li><li><a href="http://item.vancl.com/0192408.html"><img alt="" src="http://i1.vanclimg.com/www/company/12.png "></a></li><li><a href="http://item.vancl.com/0192606.html"><img alt="" src="http://i4.vanclimg.com/www/company/15.png"></a></li><li><a href="http://home.vancl.com/27541-n10-s1.html"><img alt="" src="http://i5.vanclimg.com/www/company/16.png"></a></li><li><a href="http://miook.vancl.com/27535-s1.html"><img alt="" src="http://i1.vanclimg.com/www/company/17.png"></a></li><li><a href="http://item.vancl.com/0191706.html"><img alt="" src="http://i2.vanclimg.com/www/company/13.png"></a></li><li><a href="http://item.vancl.com/0191630.html"><img alt="" src="http://i3.vanclimg.com/www/company/14.png"></a></li><li><a href="http://item.vancl.com/0192069.html"><img alt="" src="http://i5.vanclimg.com/www/company/11.png"></a></li><li><a href="http://item.vancl.com/0192408.html"><img alt="" src="http://i1.vanclimg.com/www/company/12.png "></a></li><li><a href="http://item.vancl.com/0192606.html"><img alt="" src="http://i4.vanclimg.com/www/company/15.png"></a></li><li><a href="http://home.vancl.com/27541-n10-s1.html"><img alt="" src="http://i5.vanclimg.com/www/company/16.png"></a></li><li><a href="http://miook.vancl.com/27535-s1.html"><img alt="" src="http://i1.vanclimg.com/www/company/17.png"></a></li>
                 <li><a href="http://item.vancl.com/0191706.html"><img alt="" src="http://i2.vanclimg.com/www/company/13.png"></a></li><li><a href="http://item.vancl.com/0191630.html"><img alt="" src="http://i3.vanclimg.com/www/company/14.png"></a></li><li><a href="http://item.vancl.com/0192069.html"><img alt="" src="http://i5.vanclimg.com/www/company/11.png"></a></li><li><a href="http://item.vancl.com/0192408.html"><img alt="" src="http://i1.vanclimg.com/www/company/12.png "></a></li><li><a href="http://item.vancl.com/0192606.html"><img alt="" src="http://i4.vanclimg.com/www/company/15.png"></a></li><li><a href="http://home.vancl.com/27541-n10-s1.html"><img alt="" src="http://i5.vanclimg.com/www/company/16.png"></a></li><li><a href="http://miook.vancl.com/27535-s1.html"><img alt="" src="http://i1.vanclimg.com/www/company/17.png"></a></li><li><a href="http://item.vancl.com/0191706.html"><img alt="" src="http://i2.vanclimg.com/www/company/13.png"></a></li><li><a href="http://item.vancl.com/0191630.html"><img alt="" src="http://i3.vanclimg.com/www/company/14.png"></a></li><li><a href="http://item.vancl.com/0192069.html"><img alt="" src="http://i5.vanclimg.com/www/company/11.png"></a></li><li><a href="http://item.vancl.com/0192408.html"><img alt="" src="http://i1.vanclimg.com/www/company/12.png "></a></li><li><a href="http://item.vancl.com/0192606.html"><img alt="" src="http://i4.vanclimg.com/www/company/15.png"></a></li><li><a href="http://home.vancl.com/27541-n10-s1.html"><img alt="" src="http://i5.vanclimg.com/www/company/16.png"></a></li><li><a href="http://miook.vancl.com/27535-s1.html"><img alt="" src="http://i1.vanclimg.com/www/company/17.png"></a></li>
                </ul> 
             </div>
            <div id="buttonNext"></div>
        </div>