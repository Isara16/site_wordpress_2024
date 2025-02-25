<?php
/**
 * Categories 
 */
if (!get_the_category()) {
    return;
}
$categories = [];

?>
<div class="o-blog-post__category a-separator o-neuron-post__meta-icon">
    <?php if ($neuron_posts_style_meta_icon == 'yes') : ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
    <?php endif; ?>
    <ul>
        <?php foreach (get_the_category() as $category) : 
            // Prevent Double Category
            if ( in_array( $category, $categories ) ) {
                return;
            }      
        ?>
            <li><a class="o-neuron-post__meta" href="<?php echo esc_url(get_category_link($category->term_id)) ?>"><?php echo esc_attr($category->name) ?></a></li>
        <?php $categories[] = $category; endforeach; ?>
    </ul>
</div>
