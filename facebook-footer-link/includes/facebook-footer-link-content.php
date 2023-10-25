<?php

function ffl_add_footer($content) {

  global $ffl_options;

  //var_dump($ffl_options);

  $footer_output = '<hr/><br/>';
  $footer_output .= '<div class="footer_content">';
  $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a style="color:'.$ffl_options['link_color'].'" href="'.$ffl_options['facebook_url'].'" target="_new">Facebook</a>';
  $footer_output .= '</div>';

  $enable = $ffl_options['enable'] ?? false;
  $show = $ffl_options['show_in_feed'] ?? false;

  if($enable && $show) {
      return $content . $footer_output;
  }
  return $content;

}
add_filter('the_content', 'ffl_add_footer');

?>
