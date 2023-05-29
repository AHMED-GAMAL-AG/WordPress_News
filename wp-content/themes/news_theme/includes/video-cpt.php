<?php

function create_video_cpt()
{

    $labels = array(
        'name' => _x('مقاطع الفيديو', 'Post Type General Name', 'news-app'),
        'singular_name' => _x('مقطع فيديو', 'Post Type Singular Name', 'news-app'),
        'menu_name' => _x('مقاطع الفيديو', 'Admin Menu text', 'news-app'),
        'name_admin_bar' => _x('video', 'Add New on Toolbar', 'news-app'),
        'archives' => __('video Archives', 'news-app'),
        'attributes' => __('video Attributes', 'news-app'),
        'parent_item_colon' => __('Parent video:', 'news-app'),
        'all_items' => __('جميع مقاطع الفيديو', 'news-app'),
        'add_new_item' => __('إضافة فيديو جديد', 'news-app'),
        'add_new' => __('إضافة فيديو جديد', 'news-app'),
        'new_item' => __('New video', 'news-app'),
        'edit_item' => __('تعديل الفيديو', 'news-app'),
        'update_item' => __('تعديل', 'news-app'),
        'view_item' => __('عرض الفيديو', 'news-app'),
        'view_items' => __('عرض مقاطع الفيديو', 'news-app'),
        'search_items' => __('البحث عن مقطع فيديو', 'news-app'),
        'not_found' => __('غير موجود', 'news-app'),
        'not_found_in_trash' => __('غير موجود في سلة المحذوفات', 'news-app'),
        'featured_image' => __('الصورة البارزة', 'news-app'),
        'set_featured_image' => __('اختيار صورة بارزة', 'news-app'),
        'remove_featured_image' => __('حذف الصورة البارزة', 'news-app'),
        'use_featured_image' => __('اختيار صورة بارزة', 'news-app'),
        'insert_into_item' => __('إضافة إلى مقاطع الفيديو', 'news-app'),
        'uploaded_to_this_item' => __('رفع إلى مقطع الفيديو هذا', 'news-app'),
        'items_list' => __('قائمة الآراء', 'news-app'),
        'items_list_navigation' => __('مقاطع الفيديو في شريط التنقل', 'news-app'),
        'filter_items_list' => __('تصفية مقاطع الفيديو', 'news-app'),
    );
    $args = array(
        'label' => __('video'),
        'description' => __('إضافة مقالات فيديو للموقع'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-video',
        'supports' => array('title', 'editor', 'thumbnail', 'comments'),
        'taxonomies'  => array('category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
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

    register_post_type('video', $args);
}
add_action('init', 'create_video_cpt');
