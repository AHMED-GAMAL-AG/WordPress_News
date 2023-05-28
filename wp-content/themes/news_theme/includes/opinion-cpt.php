<?php
// Register Custom Post Type Opinion
function create_opinion_cpt()
{

    $labels = array(
        'name' => _x('مقالات الرأي', 'Post Type General Name', 'news-app'),
        'singular_name' => _x('مقالة رأي', 'Post Type Singular Name', 'news-app'),
        'menu_name' => _x('مقالات الرأي', 'Admin Menu text', 'news-app'),
        'name_admin_bar' => _x('opinion', 'Add New on Toolbar', 'news-app'),
        'archives' => __('opinion Archives', 'news-app'),
        'attributes' => __('opinion Attributes', 'news-app'),
        'parent_item_colon' => __('Parent Opinion:', 'news-app'),
        'all_items' => __('جميع مقالات الرأي', 'news-app'),
        'add_new_item' => __('إضافة رأي جديد', 'news-app'),
        'add_new' => __('إضافة رأي جديد', 'news-app'),
        'new_item' => __('New Opinion', 'news-app'),
        'edit_item' => __('تعديل الرأي', 'news-app'),
        'update_item' => __('تعديل', 'news-app'),
        'view_item' => __('عرض مقال الرأي', 'news-app'),
        'view_items' => __('عرض مقالات الرأي', 'news-app'),
        'search_items' => __('البحث عن مقالة رأي', 'news-app'),
        'not_found' => __('غير موجود', 'news-app'),
        'not_found_in_trash' => __('غير موجود في سلة المحذوفات', 'news-app'),
        'featured_image' => __('الصورة البارزة', 'news-app'),
        'set_featured_image' => __('اختيار صورة بارزة', 'news-app'),
        'remove_featured_image' => __('حذف الصورة البارزة', 'news-app'),
        'use_featured_image' => __('اختيار صورة بارزة', 'news-app'),
        'insert_into_item' => __('إضافة إلى مقالات الرأي', 'news-app'),
        'uploaded_to_this_item' => __('رفع إلى مقال الرأي هذا', 'news-app'),
        'items_list' => __('قائمة الآراء', 'news-app'),
        'items_list_navigation' => __('مقالات الرأي في شريط التنقل', 'news-app'),
        'filter_items_list' => __('تصفية مقالات الرأي', 'news-app'),
    );
    $args = array(
        'label' => __('opinion'),
        'description' => __('إضافة مقالات رأي للموقع'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'author', 'comments'),
        // 'taxonomies'  => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_post_type('opinion', $args);
}
add_action('init', 'create_opinion_cpt');
