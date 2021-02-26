<?php error_reporting(0); ?>



<br />



<div class="footer">



Copyright &copy; <?php print date('Y'); ?> <a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?></a><br>

made by Keyvan Hardani<br>

<!-- Display the Blog's Administartor Email Obfuscated (def: ambiguous, harder to interpret). -->
<?php 
	/**
<a href="mailto:<?php echo antispambot(get_bloginfo('admin_email'), 1); ?>" title="Email Blog's Administrator">Email Administrator</a>
**/
?>

</div>



</td></tr></tbody></table>



</body>



</html>



