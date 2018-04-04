<?php get_header(); ?>
<div class="page-banner container-fluid no-padding">
                <!-- Container -->
                <div class="container">
                    <div class="banner-content">
                        <h3>Shop</h3>
                        <p>our vision is to be Earth's most customer centric company</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html" title="Home">Home</a></li>                         
                        <li class="active">Shop</li>
                    </ol>
                </div><!-- Container /- -->
</div>
<div id="content-vw" class="container">
    <div class="middle-align">
        <div class="col-md-3 col-sm-3 col-xs-12 widget-area no-right-padding">
                        <?php get_sidebar( 'shop' ); ?>
        </div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<?php 
            while ( have_posts() ) : the_post(); ?>
            	<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
                <h3><?php the_title(); ?></h3>
                <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
            <?php
            	//If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            ?>
        </div>
        <div class="clear"></div>    
    </div>
</div>

<?php get_footer(); ?>