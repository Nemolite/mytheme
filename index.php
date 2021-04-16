<?php
/**
 * Основной стартовый файл темы
 */
?>
<?php get_header(); ?>

<body>

<!-- Общий контейнер для табов -->
<div class="tabs">
   
   <!--  Контейнер с вкладками   -->
   <ul class="tab-header">
      <li class="tab-header__item js-tab-trigger active" data-tab="1">Первая</li>
      <li class="tab-header__item js-tab-trigger" data-tab="2">Вторая</li>
      <li class="tab-header__item js-tab-trigger" data-tab="3">Третья</li>
   </ul>
   
   <!--  Контейнер с блоками, которые содержат контент вкладок   -->
   <ul class="tab-content">
<?php
   $args = array(
    'post_type' => 'mytab',                               
    'post_status' => 'publish', 
    'posts_per_page' => 3,                           
);
$index = 1; 
$active = array('active','',''); 
$query = new WP_Query($args);
if( $query->have_posts() ){
    while( $query->have_posts() ){            
        $query->the_post(); ?> 
       <li class="tab-content__item js-tab-content <?php echo $active[$index-1]; ?>" data-tab="<?php echo $index; ?>">
        <?php the_content(); ?>
      </li> 

<?php
        $index++;        
    }       
}
wp_reset_postdata();
?>


   </ul>
</div>


</body>

<?php get_footer(); ?>