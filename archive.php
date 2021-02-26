<?php error_reporting(0); get_header(); ?>
    <td><table style="text-align:left;" width="100%" border="0" align="center">
        <tbody>
  <tr class="style13">
  <?php if (have_posts()) : ?>
    <td width="12%" height="14" class="style13">&raquo; DATE</td>
	  <td width="70%" class="style13">&raquo; DESCRIPTION</td>
	  <td width="18%">&raquo; AUTHOR</td>
	  </tr>
      
 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h3 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h3 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h3 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
  <tr class="submit">
    <td height="14" nowrap="nowrap" class="style14"><?php the_time('Y-m-d') ?></td>
    <td nowrap="nowrap"><a target="_blank" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></td>
    <td nowrap="nowrap"><?php the_category(', ') ?></td>
  </tr><?php endwhile; ?>
  </tr></tbody></table>


<div class="navigation">
<?php next_posts_link(__('Next','fusion')) ?>
<?php previous_posts_link(__('Back','fusion')) ?>
</div>
 

 


	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h3 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h3>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h3 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h3 class='center'>No posts found.</h2>");
		}

	endif;
?><br /><br />



 </center>
	</div>
<?php get_footer(); ?>