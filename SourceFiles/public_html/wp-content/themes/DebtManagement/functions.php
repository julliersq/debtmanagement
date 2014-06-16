<?php

function register_my_menu() {
    register_nav_menus(array(
            'header-menu' => __('Header Menu'),
            'footer-column2' => __('Footer-Column2'),
            'footer-column3' => __('Footer-Column3'),
            'footer-column4' => __('Footer-Column4'),
            ) );
    
}

add_action('init', 'register_my_menu');

add_filter('show_admin_bar', '__return_false');


add_action('admin_menu', 'db_man_theme_options_page');

function db_man_theme_options_page() {
    $enterprise_apf_settings = add_options_page('Debt Management Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'db_man_build_options_page');
    //add_action("admin_head-{$enterprise_apf_settings}", 'enterprise_apf_head_script');
}

function db_man_build_options_page() {
    ?>
    <div id="theme-options-wrap">
        <div class="icon32" id="icon-tools"> <br /> </div>
        <h2>Theme Settings</h2>
        <p>Update various settings throughout your website.</p>
        <form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields('db_man_theme_options'); ?>
    <?php do_settings_sections(__FILE__); ?>
            <p class="submit">
                <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
            </p>
        </form>
    </div>
    <?php
}

add_action('admin_init', 'db_man_register_and_build_fields');

function db_man_register_and_build_fields() {
    register_setting('db_man_theme_options', 'db_man_theme_options', 'validate_setting');

    add_settings_section('homepage_settings', 'Contact Information', 'section_homepage', __FILE__);

    function section_homepage() {
        
    }

    
    add_settings_field('contactDesc', 'Contact Description', 'contactDesc_callback', __FILE__, 'homepage_settings');
    add_settings_field('companyName', 'Company Name', 'companyName_callback', __FILE__, 'homepage_settings');    
    add_settings_field('address1', 'Address 1', 'address1_callback', __FILE__, 'homepage_settings');    
    add_settings_field('address2', 'Address 2', 'address2_callback', __FILE__, 'homepage_settings');  
    add_settings_field('freePhone', 'Free Phone', 'freePhone_callback', __FILE__, 'homepage_settings');  
    add_settings_field('telephone', 'Telephone', 'telephone_callback', __FILE__, 'homepage_settings');  
    add_settings_field('email', 'Email', 'email_callback', __FILE__, 'homepage_settings');          
}

function validate_setting($db_man_theme_options) {
    return $db_man_theme_options;
}

function contactDesc_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[contactDesc]' type='text' value='{$db_man_theme_options['contactDesc']}' />";
}

function companyName_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[companyName]' type='text' value='{$db_man_theme_options['companyName']}' />";
}

function address1_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[address1]' type='text' value='{$db_man_theme_options['address1']}' />";
}

function address2_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[address2]' type='text' value='{$db_man_theme_options['address2']}' />";
}

function freePhone_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[freePhone]' type='text' value='{$db_man_theme_options['freePhone']}' />";
}

function telephone_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[telephone]' type='text' value='{$db_man_theme_options['telephone']}' />";
}

function email_callback() {
    $db_man_theme_options = get_option('db_man_theme_options');
    echo "<input name='db_man_theme_options[email]' type='text' value='{$db_man_theme_options['email']}' />";
}


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
?>