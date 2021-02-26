<?php error_reporting(0); get_header(); ?>


    <td><table style="text-align:left;" width="100%" border="0" align="center">



<tbody><tr>



</center><td>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="des">DESCRIPTION</span> : <?php the_title(); ?></div>



        <div class="des">AUTHOR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php the_category(', ') ?></div>



        <div class="des">DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php the_time('Y-m-d') ?></div>



============================================================================================================



        <?php the_content(); ?>



============================================================================================================











</td></tr>



	<?php endwhile; else: ?>



<?php endif; ?>



</td> </tr>



</tbody></table>



</body></html>

<div class="footer">

<?php get_footer(); ?>

</div>