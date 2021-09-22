<?php
add_editor_style(get_stylesheet_directory_uri() . '/assets/application.css');
add_editor_style(get_stylesheet_directory_uri() . '/lib/css/style.min.css');
function global_navs()
{
    $business = get_page_by_path('business');
    $about = get_page_by_path('about');
    $recruit = get_page_by_path('recruit');
    $page_for_posts = get_option( 'page_for_posts' );
    return [
        [
            'title' => 'Home',
            'title_ja' => 'ホーム',
            'link' => get_home_url()
        ],
        [
            'title' => $business->post_title,
            'title_ja' => get_field('subtitle',$business->ID),
            'link' => get_permalink($business)
        ],
        [
            'title' => $about->post_title,
            'title_ja' => get_field('subtitle',$about->ID),
            'link' => get_permalink($about)
        ],
        [
            'title' => $recruit->post_title,
            'title_ja' => get_field('subtitle',$recruit->ID),
            'link' => get_permalink($recruit)
        ],
        [
            'title' => get_the_title( $page_for_posts ),
            'title_ja' => get_field('subtitle',$page_for_posts),
            'link' => get_permalink($page_for_posts)
        ],
    ];
}
function footer_navs()
{
    $business = get_page_by_path('business');
    $about = get_page_by_path('about');
    $recruit = get_page_by_path('recruit');
    $page_for_posts = get_option( 'page_for_posts' );
    $contact = get_page_by_path('contact');
    $privacy = get_page_by_path('privacy');
    return [
        [
            'title' => 'Home',
            'title_ja' => 'ホーム',
            'link' => get_home_url()
        ],
        [
            'title' => $business->post_title,
            'title_ja' => get_field('subtitle',$business->ID),
            'link' => get_permalink($business)
        ],
        [
            'title' => $about->post_title,
            'title_ja' => get_field('subtitle',$about->ID),
            'link' => get_permalink($about)
        ],
        [
            'title' => $recruit->post_title,
            'title_ja' => get_field('subtitle',$recruit->ID),
            'link' => get_permalink($recruit)
        ],
        [
            'title' => get_the_title( $page_for_posts ),
            'title_ja' => get_field('subtitle',$page_for_posts),
            'link' => get_permalink($page_for_posts)
        ],
        [
            'title' => $contact->post_title,
            'title_ja' => get_field('subtitle',$contact->ID),
            'link' => get_permalink($contact)
        ],
        [
            'title' => $privacy->post_title,
            'title_ja' => get_field('subtitle',$privacy->ID),
            'link' => get_permalink($privacy)
        ],
    ];
}

?>