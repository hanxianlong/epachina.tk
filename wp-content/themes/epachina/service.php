<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Service
 *
 * @file           Service
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>
   <style type="text/css">
            .serviceHeader{
                 margin:20px 0 20px 0; padding:0; height:60px;
            }  
            .serviceHeader img{border:0; width:181px;}
           .serviceHeader a{height:55px; border:0; margin:0; padding:0; border-bottom:2px solid #ccc; display:inline-block;line-height:55px; vertical-align:bottom;}
           .serviceHeader a.current,
                .serviceHeader a:hover{height:60px; vertical-align:middle; border-bottom-color:#0081d0; line-height:56px;  }
            .serviceBorder{z-index:100;
                border-left:10px solid #e1e1e1;
                border-top:10px solid #e1e1e1;
                border-right:10px solid #e1e1e1;
                border-bottom:10px solid #e1e1e1;
                width:880px;
                box-shadow:5px 5px 10px #575757;
            }
            .serviceContainer{border-top:1px solid #616161;width:840px; z-index:0; padding:20px;}
            .serviceContainer h1{ margin:0; letter-spacing:0;
                font-size:30px; font-weight:800; font-family:"Cambria","黑体","Microsoft Yahei",SimSun; color: #b20f0f;          }
            .serviceContainer h2{margin:0;font-size:20px; font-weight:normal; font-family:"Myriad Pro","Microsoft Yahei",SimSun; color:#e1e1e1;  }
            .serviceContent,.serviceContent p,.serviceContent li{font-family:"Cambria","Microsoft Yahei"}
            .serviceContent { padding:20px 60px;}
        </style>
        
        
<?php if (have_posts()) : ?>

        <?php
        the_post();
            global $post;
            
            $name= $post->post_name;
            echo $post->content;
        ?>
	<div class="serviceHeader">
           <a href="/consult/ceo/" <?php if($name=='ceo') echo 'class="current"'; ?> ><img src="/wp-content/themes/epachina/images/ceo.png"/></a><a href="/consult/critical/"  <?php if($name=='critical') echo 'class="current"'; ?>><img src="/wp-content/themes/epachina/images/event.png"/></a><a href="/consult/lead/"  <?php if($name=='lead') echo 'class="current"'; ?>><img src="/wp-content/themes/epachina/images/lead.png"/></a><a href="/consult/executive/"  <?php if($name=='executive') echo 'class="current"'; ?>><img src="/wp-content/themes/epachina/images/workshop.png"/></a><a href="/consult/idea/"  <?php if($name=='idea') echo 'class="current"'; ?>><img src="/wp-content/themes/epachina/images/idea.png"/></a></div>
        <div class="serviceBorder">
            <div class="serviceContainer">
                <?php echo the_content(); ?>
            </div>
        </div> 
         

<?php endif; ?>  
      
        

<?php get_footer(); ?>
