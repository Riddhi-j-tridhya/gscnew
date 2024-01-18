<?php get_header(); ?>
<div class="news-section container">
        <div class="title-block">
            <!-- Search Article -->
            <div class="title-inner">
                <div class="row">
                    <div class="col-sm-9 search-title">
                        <h1>Search For : <?php echo get_search_query(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Article -->
        <!-- Start loop -->
        <?php if (have_posts()) : ?>            

            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header"></header>
                    <div class="entry-summary">
                        <a href="<?php echo get_permalink(); ?>" class="readmore-list-link"><?php echo get_the_title(); ?></a>
                        <a href="<?php echo get_permalink(); ?>" class="news-readmore-link">Read More</a>
                    </div>
                </article>
            <?php endwhile; ?>
            <nav class="navigation pagination" role="navigation" aria-label="Posts">
                <div class="nav-links">
                    <?php
                    global $wp_query;

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query->max_num_pages,
                        'next_text' => '>',
                        'prev_text' => '<',
                    ));
                    wp_reset_query();
                    ?>
                </div>               
            </nav>
        <?php else: ?>    
            <p align="center">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
        <?php endif; ?>
        <!-- End Start loop -->
    </div>

	<style>
.search article {
    margin: 0 0 15px 0 !important;
    border: none;
    border-bottom: 1px solid #ccc !important;
    padding-bottom: 15px;
    padding-top: 20px;
    background: none !important;
}
	
	.search-title h1 {
    color: #000166 !important;
}
.news-section.container {
    padding-top: 60px !important;
    padding-bottom: 60px !important;
}

a.news-readmore-link {
    /* padding-left: 20px; */
    color: #000000;
    white-space: nowrap;
    align-items: flex-end;
    /* display: flex; */
    text-transform: uppercase;
    margin-left: 10px;
    font-weight: 600;
    padding: 0;
    width: inherit;
    height: inherit;
    padding-left: 60px;
}
.entry-summary {
    color: #444;
    display: flex;
    justify-content: space-between;
}
a.readmore-list-link {
    padding: 0px;
    color: #000000;
    width: inherit;
    height: inherit;
}
 .nav-links {
    width: 100%;
    margin: 40px auto;
    text-align: center;
}
span.page-numbers.current{
	background: #000166;
    color: #fff;
	font-weight: 400;
    font-size: 20px;
    padding: 4px 12px;
	line-height: 35px;
}
a.page-numbers{
	font-weight: 400;
    font-size: 20px;
    padding: 4px 12px;
    border: 1px solid #000166;
    color: #000166;
    line-height: 35px;
}
</style>
<?php get_footer(); ?>