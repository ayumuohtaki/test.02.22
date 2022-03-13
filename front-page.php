
<?php get_header(); ?>

   <div id="scroll-cover">
    <section class="section-contents" id="blog">
      <div class="wrapper">
<?php $term_obj = get_term_by( 'slug', 'blog', 'category' ); ?>
        <span class="section-title-en"><?php the_field( 'english_title', $term_obj->taxonomy. '_'. $term_obj->term_id ); ?></span>
        <h2 class="section-title"><?php echo $term_obj->name; ?></h2>
        <p class="section-lead"><?php echo $term_obj->description; ?></p>
        <ul class="news-front">
<?php
$news_posts = get_specific_posts( 'post' , 'category' , 'blog', 5 );
if( $news_posts->have_posts() ):
    while( $news_posts->have_posts() ): $news_posts->the_post();
?>
          <li class="news-item">
            <a class="detail-link" href="<?php the_permalink(); ?>">
              <div class="common-image">
                <div class="mask">
                <?php the_post_thumbnail(); ?>
                </div>
              </div>
              <!-- <time class="time"><?php the_time('Y.m.d'); ?></time> --> <!-- 投稿数が増えてきたら投稿日時を追加 -->
              <p class="title"><?php the_title(); ?></p>
              <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            </a>
          </li>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
          
        </ul>
        <div class="section-buttons animate__animated animate__pulse count10">
          <button type="button" class="button button-ghost zoomInClickTrigger" onclick="javascript:location.href = '<?php echo esc_url( get_term_link( $term_obj ) ); ?>';"><?php echo $term_obj->name; ?>一覧を見る</button>
        </div>
      </div>
    </section>
   </div>
<?php get_footer(); ?>