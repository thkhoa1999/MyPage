<?php
function create_post_banner() {
    $bannerlabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('banner','Tên nhiều banner'),
    'singular_name' => _x('banner','Tên một banner'),
    'add_new' => __ ('Thêm banner'),
    'add_new_item' => __('Thêm banner mới'),
    'edit_item' => __('Sửa banner'),
    'new_item' => __('Thêm banner mới'),
    'all_items' => __('Tất cả banner'),
    'view_item' => __('Xem banner'),
    'search_item' => __('Tìm banner'),
    'not_found' => __('Hiện tại chưa có banner nào'),
    'not_found_in_trash' => __('Không có banner nào trong sọt rác'),
    'menu_name' => 'banner'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $bannerlabels,
        'description' => 'Quản lý các banner trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type('banner_code',$args);
}
add_action ('init','create_post_banner');

function create_post_content() {
    $contentlabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('content','Tên nhiều content'),
    'singular_name' => _x('content','Tên một content'),
    'add_new' => __ ('Thêm content'),
    'add_new_item' => __('Thêm content mới'),
    'edit_item' => __('Sửa content'),
    'new_item' => __('Thêm content mới'),
    'all_items' => __('Tất cả content'),
    'view_item' => __('Xem content'),
    'search_item' => __('Tìm content'),
    'not_found' => __('Hiện tại chưa có content nào'),
    'not_found_in_trash' => __('Không có content nào trong sọt rác'),
    'menu_name' => 'content'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $contentlabels,
        'description' => 'Quản lý các content trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 4,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type('content_code',$args);
}
add_action ('init','create_post_content');


function create_post_sub() {
    $sublabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('sub','Tên nhiều sub'),
    'singular_name' => _x('sub','Tên một sub'),
    'add_new' => __ ('Thêm sub'),
    'add_new_item' => __('Thêm sub mới'),
    'edit_item' => __('Sửa sub'),
    'new_item' => __('Thêm sub mới'),
    'all_items' => __('Tất cả sub'),
    'view_item' => __('Xem sub'),
    'search_item' => __('Tìm sub'),
    'not_found' => __('Hiện tại chưa có sub nào'),
    'not_found_in_trash' => __('Không có sub nào trong sọt rác'),
    'menu_name' => 'sub'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $sublabels,
        'description' => 'Quản lý các sub trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type('sub_code',$args);
}
add_action ('init','create_post_sub');


function create_post_sub2() {
    $sub2labels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('sub2','Tên nhiều sub2'),
    'singular_name' => _x('sub2','Tên một sub2'),
    'add_new' => __ ('Thêm sub2'),
    'add_new_item' => __('Thêm sub2 mới'),
    'edit_item' => __('Sửa sub2'),
    'new_item' => __('Thêm sub2 mới'),
    'all_items' => __('Tất cả sub2'),
    'view_item' => __('Xem sub2'),
    'search_item' => __('Tìm sub2'),
    'not_found' => __('Hiện tại chưa có sub2 nào'),
    'not_found_in_trash' => __('Không có sub2 nào trong sọt rác'),
    'menu_name' => 'sub2'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $sub2labels,
        'description' => 'Quản lý các sub2 trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type('sub2_code',$args);
}
add_action ('init','create_post_sub2');


function create_post_sub3() {
    $sub3labels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('sub3','Tên nhiều sub3'),
    'singular_name' => _x('sub3','Tên một sub3'),
    'add_new' => __ ('Thêm sub3'),
    'add_new_item' => __('Thêm sub3 mới'),
    'edit_item' => __('Sửa sub3'),
    'new_item' => __('Thêm sub3 mới'),
    'all_items' => __('Tất cả sub3'),
    'view_item' => __('Xem sub3'),
    'search_item' => __('Tìm sub3'),
    'not_found' => __('Hiện tại chưa có sub3 nào'),
    'not_found_in_trash' => __('Không có su3 nào trong sọt rác'),
    'menu_name' => 'sub3'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $sub3labels,
        'description' => 'Quản lý các sub3 trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type('sub3_code',$args);
}
add_action ('init','create_post_sub3');