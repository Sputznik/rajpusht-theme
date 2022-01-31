<?php


add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('rajpusht-style', get_stylesheet_directory_uri().'/assets/css/style.css', array('sp-core-style'), time() );
});

add_action('wp_head','rjp_google_analytics', 20);

function rjp_google_analytics() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-58346TYQWC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-58346TYQWC');
</script>
<?php
}


?>
