<?php
/**
 * Супер таб
 */

?>

<!-- Общий контейнер для табов -->
<div class="tabs">
   
   <!--  Контейнер с вкладками   -->
   <ul class="tab-header">
   <?php
$categories = get_categories(array(
    'taxonomy' => 'category',

	'orderby' => 'name',
	'order' => 'ASC'
));
$index = 1; 
$ctaegory_super = array();
$active = array('active','',''); 
foreach( $categories as $category ){
    ?>
    <li class="tab-header__item js-tab-trigger-super <?php echo $active[$index-1]; ?>" data-tab="<?php echo $index; ?>">
          <?php echo  $category->name; ?>
          <?php 
          $ctaegory_super[] = $category->slug;
          ?>
        </li>
<?
 $index++; 

 
}
?>	
   </ul>
   <!--  Контейнер с блоками, которые содержат контент вкладок   -->
   <ul class="tab-content">
<?php
   $args = array(
    'post_type' => 'post',                               
    'post_status' => 'publish', 
    'posts_per_page' => 3,                           
);
$index = 1; 
$active = array('active','','');

$query = new WP_Query($args);
if( $query->have_posts() ){
    while( $query->have_posts() ){            
        $query->the_post(); ?> 
       <li class="tab-content__item js-tab-content-super <?php echo $active[$index-1]; ?>" data-tab="<?php echo $index; ?>">
        

       <?php
   $args_super = array(
    'post_type' => 'post',                               
    'post_status' => 'publish', 
    'category_name' => $ctaegory_super[$index-1],
                            
);
$query_super = new WP_Query($args_super);
if( $query_super->have_posts() ){
    while( $query_super->have_posts() ){            
        $query_super->the_post(); ?> 
<?php the_content();?>
<?php         
    }       
}
wp_reset_postdata();
?>
      </li> 

<?php
        $index++;        
    }       
}
wp_reset_postdata();
?>


   </ul>
</div>