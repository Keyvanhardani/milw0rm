<?php error_reporting(0); get_header(); ?>


    <td><table style="text-align:left;" width="100%" border="0" align="center">


        <tbody>


  <tr class="style13">


  <?php if (have_posts()) : ?>


    <td width="12%" height="14" class="style13">&raquo; DATE</td>


	  <td width="70%" class="style13">&raquo; DESCRIPTION</td>


	  <td width="18%">&raquo; TAGS</td>


	  </tr>


      


	<?php while (have_posts()) : the_post(); ?>


  <tr class="submit">


    <td height="14" nowrap="nowrap" class="style14"><?php the_time('Y-m-d') ?></td>


    <td nowrap="nowrap"><a target="_self" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></td>


    <td nowrap="nowrap"><?php the_category(', ') ?></td>


  </tr><?php endwhile; ?>


  </tr></tbody></table>








<div class="navigation">


<?php if(function_exists('wp_pagenavi')) : ?>


     <?php wp_pagenavi() ?>


 	<?php else : ?>


<?php next_posts_link(__('Next','fusion')) ?>


<?php previous_posts_link(__('Back','fusion')) ?>


<?php endif; ?>


</div>


<div>&nbsp;</div>


 


 





<?php else : ?>





	<h3>Not Found</h3>


	<p>Sorry, but you are looking for something that isn't here.</p>


    <br /><br />





<?php endif; ?>


 </center>


 </div>


<?php get_footer(); ?>


