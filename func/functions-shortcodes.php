<?php 

function get_tel_func( $atts ){
    if ($main_tel = get_field('option_tel','option')) $out = $main_tel;
        else $out = '';
    return $out;
}
add_shortcode('get_tel', 'get_tel_func');

function get_email_func( $atts ){
    if ($main_email = get_field('option_email','option')) $out = $main_email;
        else $out = '';
    return $out;
}
add_shortcode('get_email', 'get_email_func');

function get_work_examples_func( $atts ){
    return get_gallery('Примеры выполненных работ');
}
add_shortcode('get_work_examples', 'get_work_examples_func');

function get_why_we_func( $atts ){
    ob_start();
	get_template_part( 'inc/inc-why-we' );
    $out = ob_get_contents();
    ob_end_clean(); 
    return $out;	
}
add_shortcode('get_why_we', 'get_why_we_func');

function get_post_grid_func($atts) {
    $a = shortcode_atts( array(
        'title' => '',
        'type' => 'product',
        'count' => '-1'
    ), $atts, 'get_post_grid' );
    return get_post_grid($a['type'],$a['count'],$a['title']);
}
add_shortcode('get_post_grid','get_post_grid_func');

function get_partners_func( $atts ){
	return '
<div class="b-partners-logo">
    <div class="b-partners-logo__title">Мы работаем с этими компаниями</div>
    <div class="b-partners-logo__body">
        <div class="b-partners-logo__items js-partners-logo">
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-1.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-2.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-3.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-4.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-5.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-6.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-1.png"></div></div>
            <div class="b-partners-logo__item"><div class="b-partners-logo__inner"><img src="'.get_template_directory_uri().'/img/tmp/logo-2.png"></div></div>
        </div>
        <div class="b-partners-logo__arrow-prev"></div>
        <div class="b-partners-logo__arrow-next"></div>
    </div>
</div>';

}
add_shortcode('get_partners', 'get_partners_func');
