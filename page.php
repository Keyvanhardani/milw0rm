<?php error_reporting(0); get_header(); ?>
    <td><table style="text-align:left;" width="100%" border="0" align="center">
        <tbody><tr><td>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
	<?php endwhile; endif; ?>
    </td></tr></tbody></table>
    
	<?php
    global $wp_query;
    if( empty($wp_query->post->post_parent) ) 
      {
         $parent = $wp_query->post->ID;
      } 
    else 
     {
         $parent = $wp_query->post->post_parent;
     } ?>
 
	<?php if(wp_list_pages("title_li=&child_of=$parent&echo=0" )): ?>
        <div id="submenu">
         <ul>
          <?php wp_list_pages("title_li=&child_of=$parent" ); ?>
         </ul>
        </div>
    <?php endif; ?>
    
   
 </center>
 </div>
<?php get_footer(); ?>