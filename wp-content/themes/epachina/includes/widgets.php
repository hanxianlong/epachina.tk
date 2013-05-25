<?php
/**
 * SubCategories widget class
 *
 * @since 2.8.0
 */
class WP_Widget_SubCategories extends WP_Widget {

	function __construct() {
		$widget_ops = array( 'classname' => 'widget_categories', 'description' => "显示当前文章所属分类的所有分类及顶级分类" );
		parent::__construct('SubCategories', __('SubCategories'), $widget_ops);
	}

	function widget( $args, $instance ) {
		extract( $args );
 
		$title = apply_filters('widget_title', empty( $instance['title'] ) ? __( 'SubCategories' ) : $instance['title'], $instance, $this->id_base);
		$c = ! empty( $instance['count'] ) ? '1' : '0';
		$h = ! empty( $instance['hierarchical'] ) ? '1' : '0';
		$s = ! empty( $instance['showTitle'] ) ? '1' : '0';
		$e = ! empty( $instance['excludeId'] ) ? $instance['excludeId'] : '-1';
		/*$categories =get_the_category();
		$cates = array();
		foreach($categories as $cate){
			$cates[] = $cate->term_id;
		}*/
 
                 $category = get_the_category();
                 if(count($category)==0){
                     return;
                 }
                $this_cat_ID = $category[0]->cat_ID;
    
                $this_category = get_category($this_cat_ID);  // 取得当前分类
               
                while($this_category->category_parent)   // 若当前分类有上级分类时，循环
                {
                 $this_category = get_category($this_category->category_parent);   
                }
                $root_id = $this_category->term_id; // 返回根分类的id号

		echo $before_widget;

		if ($s == '1' ){
			if ( $title )
				echo $before_title . $title . $after_title;
		}

		$cat_args = array('orderby' => 'id', 'show_count' => $c, 'hierarchical' => $h,'exclude'=>$e/*,'include'=>$cates*/,'child_of'=>$root_id);
?>
		<ul>
<?php
		$cat_args['title_li'] = '';
		wp_list_categories(apply_filters('widget_categories_args', $cat_args));
?>
		</ul>
<?php

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['count'] = !empty($new_instance['count']) ? 1 : 0;
		$instance['hierarchical'] = !empty($new_instance['hierarchical']) ? 1 : 0;
		$instance['showTitle'] = !empty($new_instance['showTitle']) ? 1 : 0;
		$instance['excludeId'] = !empty($new_instance['excludeId']) ? $new_instance['excludeId'] : -1;

		return $instance;
	}

	function form( $instance ) {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = esc_attr( $instance['title'] );
		$count = isset($instance['count']) ? (bool) $instance['count'] :false;
		$hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
		$showTitle = isset( $instance['showTitle'] ) ? (bool) $instance['showTitle'] : false;
		$excludeId = isset( $instance['excludeId'] ) ?  $instance['excludeId'] : -1;
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
		<p><label for="<?php echo $this->get_field_id('excludeId'); ?>">不显示的分类Id</label>
		<input  class="widefat" type="text" id="<?php echo $this->get_field_id('excludeId'); ?>" name="<?php echo $this->get_field_name('excludeId'); ?>" value="<?php echo $excludeId; ?>" />
		</p>

	<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('showTitle'); ?>" name="<?php echo $this->get_field_name('showTitle'); ?>"<?php checked( $showTitle ); ?> />
		<label for="<?php echo $this->get_field_id('showTitle'); ?>">显示标题</label><br />

	<p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>"<?php checked( $count ); ?> />
		<label for="<?php echo $this->get_field_id('count'); ?>"><?php _e( 'Show post counts' ); ?></label><br />

		<input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('hierarchical'); ?>" name="<?php echo $this->get_field_name('hierarchical'); ?>"<?php checked( $hierarchical ); ?> />
		<label for="<?php echo $this->get_field_id('hierarchical'); ?>"><?php _e( 'Show hierarchy' ); ?></label><br/>
		
	</p>
		</p>
<?php
	}
}
/**
 * WP_Widget_Recent_Category_Posts widget class
 *
 * @since 2.8.0
 */
class WP_Widget_Recent_Video_Posts extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_recent_video', 'description' => "最新视频列表" );
		parent::__construct('recent-video-posts', "最新视频列表", $widget_ops);
		$this->alt_option_name = 'widget_recent_video_entries';

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_recent_video_posts', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 			$number = 10;
		$cateIds = isset( $instance['cateIds'] ) ? $instance['cateIds'] :'';

		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true,'cat'=>$cateIds ) ) );
		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
                       <div class="video-item">
			<a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>">
                            <img src="<?php echo the_post_thumbnail_url(get_the_ID()); ?>" />
                                                    </a>
                                                    <div>
                                                    <a href="/?p=<?php the_ID() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                                    </div>
		<?php endwhile; ?>
                        
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_recent_video_posts', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
                $instance['cateIds'] = strip_tags($new_instance['cateIds']);

		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_video_posts']) )
			delete_option('widget_recent_video_posts');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_recent_video_posts', 'widget');
	}

	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
                $cateIds = isset( $instance['cateIds'] ) ?esc_attr($instance['cateIds']):'';
                
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

		<p><label for="<?php echo $this->get_field_id( 'cateIds' ); ?>">视频分类Id：</label>
		<input  id="<?php echo $this->get_field_id( 'cateIds' ); ?>" name="<?php echo $this->get_field_name( 'cateIds' ); ?>" type="text" value="<?php echo $cateIds; ?>" /></p>
<?php	}
}
/**
 * WP_Widget_Recent_Category_Posts widget class
 *
 * @since 2.8.0
 */
class WP_Widget_Recent_Category_Posts extends WP_Widget {
	function __construct() {
		$widget_ops = array('classname' => 'widget_recent_entries', 'description' => "显示指定分类下的文章" );
		parent::__construct('recent-category-posts', "近期文章(指定分类)", $widget_ops);
		$this->alt_option_name = 'widget_recent_category_entries';

		add_action( 'save_post', array($this, 'flush_widget_cache') );
		add_action( 'deleted_post', array($this, 'flush_widget_cache') );
		add_action( 'switch_theme', array($this, 'flush_widget_cache') );
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('widget_recent_category_posts', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( ! isset( $args['widget_id'] ) )
			$args['widget_id'] = $this->id;

		if ( isset( $cache[ $args['widget_id'] ] ) ) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
		if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
 			$number = 10;
		$cateIds = isset( $instance['cateIds'] ) ? $instance['cateIds'] :'';
                $show_title_only = isset( $instance['show_title_only'] ) ? $instance['show_title_only'] : false;

		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true,'cat'=>$cateIds ) ) );
		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
	<?php if($show_title_only) echo '<ul>'; //仅显示标题(以li输入内容)?>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
                    <?php if($show_title_only): //仅显示标题(以li输入内容)?>
                        <li>
				<a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a>
			</li>
                     <?php else: //显示标题及发布时间等信息，以Div显示更为复杂的信息?>
                     <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                       <h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php  the_title_attribute();?>"><?php the_title(); ?></a></h1>

                       <div class="post-meta">
                           <?php printf(__('Posted in %s', 'responsive'), get_the_category_list(', ')); ?>
                           <?php the_tags(__('Tagged with:', 'responsive') . ' ', ', ', ''); ?> 
                           <?php responsive_post_meta_data(); ?>
                       <?php if ( comments_open() ) : ?>
                               <span class="comments-link">
                               <span class="mdash">&mdash;</span>
                           <?php comments_popup_link(__('No Comments &darr;', 'responsive'), __('1 Comment &darr;', 'responsive'), __('% Comments &darr;', 'responsive')); ?>
                               </span>
                           <?php endif; ?> 
                       </div><!-- end of .post-meta -->

                       <div class="post-entry">
                           <?php if ( has_post_thumbnail()) : ?>
                               <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                                               <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
                               </a>
                           <?php endif; ?>
                           <?php the_excerpt(); ?>
                           <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                       </div><!-- end of .post-entry -->
                   </div><!-- end of #post-<?php the_ID(); ?> -->
                   <?php endif; ?>
		<?php endwhile; ?>
                   <?php if($show_title_only) echo '</ul>'; //仅显示标题(以li输入内容)?>
		<?php echo $after_widget; ?>
<?php
		// Reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		endif;
		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_set('widget_recent_category_posts', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
                $instance['cateIds'] = strip_tags($new_instance['cateIds']);
                $instance['show_title_only'] = (bool) $new_instance['show_title_only'];

		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['widget_recent_category_entries']) )
			delete_option('widget_recent_category_entries');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('widget_recent_category_posts', 'widget');
	}

	function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
                $cateIds = isset( $instance['cateIds'] ) ?esc_attr($instance['cateIds']):'';
                $show_title_only = isset( $instance['show_title_only'] ) ? (bool) $instance['show_title_only'] : false;
                
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
		<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

		<p><label for="<?php echo $this->get_field_id( 'cateIds' ); ?>">分类Id列表：</label>
		<input  id="<?php echo $this->get_field_id( 'cateIds' ); ?>" name="<?php echo $this->get_field_name( 'cateIds' ); ?>" type="text" value="<?php echo $cateIds; ?>" /></p>
             	<p><input class="checkbox" type="checkbox" <?php checked( $show_title_only ); ?> id="<?php echo $this->get_field_id( 'show_title_only' ); ?>" name="<?php echo $this->get_field_name( 'show_title_only' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'show_title_only' ); ?>">仅显示标题(以ul显示)</label></p><?php
	}
}

register_widget('WP_Widget_SubCategories');
register_widget('WP_Widget_Recent_Video_Posts');
register_widget('WP_Widget_Recent_Category_Posts');

?>
