
 <?php
function career_post_type() {
    $labels = array(
            'name' => 'Careers',
            'singular_name'=>'Career',
            'add_new' => 'Add Item',
            'all_items' => 'All Items',
            'add_new_item' => 'Add Item',
            'edit_item' => 'Edit Item',
            'new_item' => 'New Item',
            'view_item' => 'View Item',
            'search_item' => 'Search Career',
            'not_found' => 'No items found',
            'not_found_in_trash' => 'No items found in trash',
            'parent_item_colon' => 'Parent Item'
            );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'career' ),
        'capability_type'    => 'post',
        'hierarchical'       => true,
        'has_archive'        => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'revision'),
        'menu_icon'   => 'dashicons-star-filled',
        'exclude_from_search' => true,
    );
 
    register_post_type( 'career', $args );
}
 