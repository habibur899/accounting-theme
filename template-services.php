<?php
/*
 * Template Name: Service
 * */
get_header();
?>
<?php
get_template_part('/template-part/breadcrumb');
?>
<div class="pt-80">
<?php get_template_part('/template-part/services');?>
</div>
<?php
get_template_part('/template-part/about');
get_template_part('/template-part/price');
get_template_part('/template-part/newslater');

?>

<?php get_footer() ?>
