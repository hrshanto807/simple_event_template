<?php get_header() ?>
<div id="container" class="box">
    <div id="obsah" class="content box">
      <div class="in">
        <div id="new-article">
          <div id="corner">
            <?php while(have_posts()):the_post()?>
            <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
            <div class="f-left article-img"><?php the_post_thumbnail('simple_event_post_thumbnails_size');?>
             
            </div>
            <?php echo '<p class="f-left">'.get_the_content().'</P>';?>            
            <div class="clear"></div>
            <?php endwhile;?>
          </div>
        </div>      
        <a href="<?php esc_url(site_url())?>" class="older">&laquo; Older articles</a> </div>
    </div>
    <?php get_sidebar();?>    
  </div>
</div>
<?php get_footer() ?>