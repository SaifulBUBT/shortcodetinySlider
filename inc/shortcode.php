<?php
// function shortcodeslider_uppercase($attributes, $content = '')
// {
//   return strtoupper(do_shortcode($content));
// }
// add_shortcode('upper', 'shortcodeslider_uppercase');


// function shortcodeslider_button($attributes, $content = '')
// {
//   $default = array(
//     'type' => 'primary',
//     'url'  => ''
//   );

//   $button_atts = shortcode_atts($default, $attributes);

//   return ('<a target="_blank" class="btn btn--' . $button_atts['type'] . ' full-width" href="' . $button_atts['url'] . '">' . do_shortcode($content) . '</a>');
// }
// add_shortcode('button', 'shortcodeslider_button');



// function philosophy_youtube($attributes, $content = '')
// {
//   return ('<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $content . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
// }
// add_shortcode('youtube', 'philosophy_youtube');











//********** code for tiny slider********* */

function tiny_image_size()
{
  add_image_size('tiny-slider', 800, 600, true);
}
add_action('init', 'tiny_image_size');

function tinys_shortcode_tslider($attibutes, $content = '')
{
  $defaults = array(
    'height' => 600,
    'width'  => 800,
    'id'    => ''
  );
  $tslider_atts = shortcode_atts($defaults, $attibutes);

  $content = do_shortcode($content);
  $shortcode_output = <<<EOD
<div class="slider" id="{$tslider_atts['id']}" style="width:{$tslider_atts['width']}; height:{$tslider_atts['height']}; background: #ddd;">
    {$content}
</div>
EOD;
  return $shortcode_output;



  //   return ('<div id="' . $tslider_atts['id'] . '" style="width: ' . $tslider_atts['width'] . '; height: ' . $tslider_atts['height'] . '; background: red;">
  //   ' . $content . '
  // </div>');



}
add_shortcode('tslider', 'tinys_shortcode_tslider');


function tinys_shortcode_tslide($attributes)
{
  $defaults = array(
    'id'      => '',
    'caption' => '',
    'size'    => 'tiny-slider'
  );
  $tslide_atts = shortcode_atts($defaults, $attributes);

  $image_url = wp_get_attachment_image_src($tslide_atts['id'], $tslide_atts['size']);

  // return ('<div class="slide">
  //   <img src="' . $image_url[0] . '" />
  //   <p>' . $tslide_atts['caption'] . '</p>
  // </div>');

  $output = <<<EOD
<div class="slide">
  <img src= {$image_url[0]} alt={$tslide_atts['caption']} />
  <p>{$tslide_atts['caption']}</p>
</div>
EOD;
  return $output;
}
add_shortcode('tslide', 'tinys_shortcode_tslide');
