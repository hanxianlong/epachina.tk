<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * whitepaper
 *
   Template Name:  white paper
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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/reveal.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/serif.css" id="theme">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/zenburn.css">
    <style>
       .reveal section img {border: none;}
       .slidesHeight{height:450px;position:relative;}
      #content{margin-bottom:0px;}
      #wrapper{margin-bottom:0px;}
      #fullScreenControl{cursor:pointer;position:absolute; top:15px;z-index:100; right:10px;}
    </style> 
    <div id="fullScreenControl">全屏观看</div>
        <div id="content" class="slidesHeight" >
           
             <div class="reveal page center">
      <div class="slides">
          <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/1-1.png"/>
        </section>
        <section class="future stack" style="top: -20px; display: none;">
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/2-1.png"/>
               </section>
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/2-2.png"/>
               </section>
        </section>
           <section class="future stack" style="top: -20px; display: none;">
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/3.png"/>
               </section>
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/3-1.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/3-2.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/3-3.png"/>
               </section>
                <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/3-4.png"/>
               </section>
        </section>
             <section class="future stack" style="top: -20px; display: none;">
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-1.png"/>
               </section>
               <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-1.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-2.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-3.png"/>
               </section>
                <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-4.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-5.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-6.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-7.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-8.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-9.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-10.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-11.png"/>
               </section>
                 <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/4-12.png"/>
               </section>
        </section>
           <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/5.png"/>
               </section>
           <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/6.png"/>
               </section>
            <section class="past" style="top: -20px; display: none;" class="past">
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/slides/7.png"/>
               </section>
    <?php /*    <section style="top: -20px; display: none;" class="past">
          <h1>Knewone</h1>
          <h3>Lean Web Startup: </h3>
          <h4>A Programmer's Perspective</h4>
          <p>
            <small>Created by <a href="http://weibo.com/coocooba" class="roll"><span data-title="@_李路">@_李路</span></a></small>
          </p>
        </section>

        <section style="top: -20px; display: none;" class="stack past">
          <section style="top: -20px;">
            <h2>Summary</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/no-waste.png">
          </section>
          <section style="top: -20px;">
            <ol>
              <li>Start</li>
              <li>Stage</li>
              <li>Stack</li>
            </ol>
          </section>
        </section>

        <section style="top: -251px; display: none;" class="past">
          <h2>1. Start</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/start_point.jpg">
        </section>

        <section style="top: 0px; display: none;" class="stack past">
          <section style="top: -20px;">
            <h3>Vision</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/vision.jpg">
            <p>
              How to get startup ideas?
            </p>
            <p>
              <q cite="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/startupideas.html">
                Live in the future, then build what seems interesting.
              </q>
            </p>
          </section>
          <section class="painting" style="top: -20px;">
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/painting.jpg">
            <p>
              <q cite="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/Zen and the Art of Motorcycle Maintenance">
                You want to know how to paint a perfect painting? It's easy. Make yourself perfect and then just paint naturally.
              </q>
            </p>
          </section>
        </section>

        <section style="top: 0px; display: block;" class="stack past">
          <section style="top: -20px;">
            <h3>Take Flight</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/runway.gif">
            <p>How long is your runway?</p>
          </section>
          <section class="crash" style="top: -20px;">
            <h3>Or Crash</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/crash.jpg">
            <p>How many pivots can you do?</p>
          </section>
        </section>

        <section style="top: 0px; display: block;" class="stack past" data-previous-indexv="0">
          <section style="top: -295.5px; display: block;" class="">
            <h3>Team</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/team.png">
            <p>Always be Observing and Make Decisions
          </p></section>
          <section style="top: -306px; display: block;" class="future">
            <h3>Start Small, Stay Small</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/small.png">
          </section>
          <section style="top: -286.5px; display: block;" class="future">
            <h3>How to become a member?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/contribute.jpg">
            <p>Be a Broad-Based Contributor</p>
          </section>
        </section>

        <section style="top: 0px; display: block;" class="stack past" data-previous-indexv="0">
          <section class="programmer" style="top: -300px; display: block;">
            <h3>Programmer</h3>
            <pre><code class="haskell xml">
  qsort :: Ord a =&gt; [a] -&gt; [a]
  qsort [] = []
  qsort (p:xs) = qsort [x | x<span class="tag">&lt;<span class="title">-xs,</span> <span class="attribute">x</span> &lt; <span class="attribute">p</span>] ++ [<span class="attribute">p</span>] ++ <span class="attribute">qsort</span> [<span class="attribute">x</span> | <span class="attribute">x</span>&lt;<span class="attribute">-xs</span>, <span class="attribute">x</span> &gt;</span>= p]
            </code></pre>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/programmer.png">
            <ul>
              <li>Be a Hacker</li>
              <li>Living on the Edge</li>
              <li>Have Sense</li>
            </ul>
          </section>
          <section style="top: -350px; display: block;" class="future">
            <h3>How to be a hacker?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/hacker.jpg">
            <p>
              <q cite="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/Richard Stallman">
                What they had in common was mainly love of excellence and programming. They wanted to be able to do something in a more exciting way than anyone believed possible.
              </q>
            </p>
          </section>
        </section>

        <section style="top: -350px; display: block;" class="present">
          <h2>2. Stage</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/stage.jpg">
        </section>

        <section style="top: -350px; display: block;" class="future">
          <h3>Loop</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/lean.png">
        </section>

        <section style="top: 0px; display: block;" class="stack future">
          <section style="top: -20px;">
            <h3>Build</h3>
            <h4>Make Minimum Viable Products</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/mvp.png">
          </section>
          <section style="top: -20px;">
            <h3>What's the MVP?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/mvp2.png">
          </section>
          <section class="diy" style="top: -20px;">
            <h3>And How to do?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/diy.jpg">
          </section>
        </section>

        <section style="top: 0px; display: block;" class="stack future">
          <section style="top: -20px;">
            <h3>Measure</h3>
            <h4>Customer Behaviour</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/customers.jpg">
          </section>
          <section style="top: -20px;">
            <h3>Do they love u?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/love.jpg">
          </section>
          <section style="top: -20px;">
            <h3>Do they pay u?</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/money.jpg">
          </section>
        </section>

        <section style="top: -20px; display: none;" class="stack future">
          <section class="learning" style="top: -20px;">
            <h3>Learn</h3>
            <h4>What Customers Want</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/learn.jpg">
          </section>
          <section class="optimizing" style="top: -20px;">
            <h3>Learn from Data</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/optimizing.jpg">
            <ul>
              <li>Tracking</li>
              <li>Sorting</li>
              <li>Optimizing</li>
            </ul>
          </section>
          <section class="management" style="top: -20px;">
            <h3>Management</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/kiss.jpg">
          </section>
        </section>

        <section style="top: -20px; display: none;" class="future">
          <h2>3. Stack</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/stack.jpg">
        </section>

        <section style="top: -20px; display: none;" class="stack future">
          <section style="top: -20px;">
          <h3>Framework</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/omakese.jpg">
          <h4>Omakase</h4>

          </section>
          <section style="top: -20px;">
            <h3>Ruby on Rails</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/rails.png">
            <ul>
              <li>Programmer Happiness</li>
              <li>Sustainable Productivity</li>
              <li>Community</li>
            </ul>
          </section>
          <section style="top: -20px;">
            <h3>Github</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/github.png">
            <h4>Build software better, together</h4>
          </section>
        </section>

        <section style="top: -20px; display: none;" class="stack future">
          <section style="top: -20px;">
          <h3>Frontend</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/frontend.jpg">
          <ul>
            <li>Modernize your product</li>
            <li>Be responsive</li>
            <li>How to design the interface?</li>
            <li>Never reinvent the wheels</li>
          </ul>
          </section>
          <section style="top: -20px;">
            <h3>Responsive Design</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/responsive.png">
            <h4>Mobile first</h4>
          </section>
          <section style="top: -20px;">
            <h3>Twitter Bootstrap</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/bootstrap.png">
            <h4>Front-end framework for faster and easier web development</h4>
          </section>
        </section>

        <section style="top: -20px; display: none;" class="stack future">
          <section style="top: -20px;">
          <h3>Backend</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/backend.jpg">
          <ul>
            <li>Database for startups</li>
            <li>How to deploy?</li>
            <li>Monitor running status</li>
            <li>Premature optimization is the root of all evil</li>
          </ul>
          </section>
          <section style="top: -20px;">
            <h3>Cloud</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/cloud.jpg">
            <p>SASS, PAAS and Storage help startups</p>
          </section>
          <section style="top: -20px;">
            <h3>MongoDB</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/mongo.jpg">
            <h4>Nosql Database</h4>
          </section>
        </section>

        <section style="top: -20px; display: none;" class="future">
          <h2>THE END</h2>
          <p>Contact: <a href="mailto:lilu@knewone.com" class="roll"><span data-title="lilu@knewone.com">lilu@knewone.com</span></a></p>
          <p>Powered by <a href="https://github.com/hakimel/reveal.js" class="roll"><span data-title="Reveal.js">Reveal.js</span></a></p>
        </section>
**/ ?>
      </div>
    <div class="progress" style="display: block;"><span style="width: 611.7647058823529px;"></span></div><aside class="controls" style="display: block;"><div class="navigate-left enabled"></div><div class="navigate-right enabled"></div><div class="navigate-up"></div><div class="navigate-down"></div></aside><div class="state-background"></div><div class="pause-overlay"></div></div>

    <script src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/head.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/reveal.min.js"></script>
    <script>
      Reveal.initialize({
      history: true,
      theme: 'serif',
      transition: 'page',
      dependencies: [
      { src: '<?php echo get_template_directory_uri(); ?>/whitepaper/resources/classList.js', condition: function() { return !document.body.classList; } },
      { src: '<?php echo get_template_directory_uri(); ?>/whitepaper/resources/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
      ]
      });
      
      (function($){
            $("#fullScreenControl").click(function(){
              $("#header,#footer").toggle();
              $("#content").toggleClass("slidesHeight");
              Reveal.initialize();
              var thisText = "全屏观看";
              if($(this).text()=="全屏观看") thisText="恢复";
              $(this).text(thisText);
            });
      })(jQuery);

    </script><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/whitepaper/resources/highlight.js"></script>
    
    
        </div><!-- end of #content -->
<?php get_footer(); ?>
