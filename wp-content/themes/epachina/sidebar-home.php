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
                    <h1 class="post-title"><a href="/">全美IPO路演大师Weissman访问中国</a></h1>
                    <p><a href="/"><i>文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容文章内容</i></a></p>
                </div>
            </div>
             <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="http://hanxianlong.tk/a.jpg" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a href="/">三八妇女节职场幸福感系列讲座</a></h1>
                    <p><a href="/"><i>新年伊始，妇女节临近，JobExcel为您推出了EAP员工关怀——提升职场幸福感系列讲座与互动实践课程，我们邀请商务礼仪、形象设计、妆容修饰、音乐赏析、亲子沟通等领域内的专家及知名讲师，为企业员工提供最人性化的关怀，繁忙的工作之余，别忘放松自己的身心，提升自我品位修养。</i></a></p>
                </div>
            </div>
             <div class="post-entry bottom-dotted-line">
                <div class="featured-img"><img src="http://hanxianlong.tk/a.jpg" height="150px" width="150px"/></div>
                <div class="post-content">
                    <h1 class="post-title"><a href="/">将成功率提高一倍的10个基本销售技巧</a></h1>
                    <p><a href="/"><i>想要确保更多的潜在的高品质的顾客成为实际的终身付费的客户吗？以下十件事是你今天就能开始轻松将你的转换率提高一倍的诀窍，很有可能在这个季度，以及以后帮助你进入公司的“销售冠军圈”</i></a></p>
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
            <div class="widget-title-home bottom-solid-line"><h3><a href="#">精彩案例</a></h3></div>
            <div class=""><img src="http://www.astd.org/~/media/Images/Community-Featured-Image/TOUCHMAP.jpg"/></div>
            <div class="case-entry">
                <a href="/">避免工作和生活中十大错误</a><br/>
                <a href="/">专业：配合，比专业能力重要</a><br/>
                <a href="/">演示:打动客户的销售演示</a><br/>
            </div>
        </div>
        <div class="widget-wrapper case-item">
            <div class="widget-title-home bottom-solid-line"><h3><a href="#">资源精华</a></h3></div>
            <div class=""><img src="http://www.astd.org/~/media/Images/Community-Featured-Image/TOUCHMAP.jpg"/></div>
            <div class="case-entry">
                <a href="/">英文写作：商务英文写作</a><br/>
                <a href="/">商务演讲：魅力商务演讲</a><br/>
                <a href="/">文化沟通：跨文化沟通</a><br/>
            </div>
        </div>
        <div class="widget-wrapper right-advertise">
            <a href="/">  <img src="http://www.astd.org/~/media/Images/Marketing/011390%20ICE-retargeter-ad_600x250_v2.gif"/>
            </a>
        </div>
    </div>
    <hr class="line"/>

     <div class=" widget-wrapper clear">
       <div class="link-container">合作伙伴</div>
         <div id="links">
            <div id="buttonPrev"></div>
            <div id="imagesContainer">
                <ul id="frameView">
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 <li><a href="#"><img alt="" src="http://jobexcel.com/images/clients/moto.jpg"></a></li>
                 
                 
                </ul> 
             </div>
            <div id="buttonNext"></div>
        </div>