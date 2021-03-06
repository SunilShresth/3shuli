<?php /* 
* Template Name: contactTemplate 
* Template Post Type: post, page, product
*/
?>

<?php mesmerize_get_header(); ?>

    <div class="cont">
        <div class="<?php mesmerize_page_content_wrapper_class(); ?> descr">
            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'page');
            endwhile;
            ?>
        </div>
    </div>


<style>
  .cont{
    color:#262626;
    text-align: justify;
  }
  .center{e
    text-align: center;
  }
  .descr{
    position: relative;
    padding-top:60px;
    padding-bottom:60px;
  }

</style>