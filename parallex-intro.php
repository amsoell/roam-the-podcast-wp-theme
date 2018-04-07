<?php

if (empty($meta['subtitle'])) {
    $meta['subtitle'] = '';
}
if (empty($meta['bg'])) {
    $meta['bg'] = '';
}
?>
<div class="page-intro">

  <div class="header-space" style="height: 72px;"></div>

  <div id="page-sample" class="page-top page-section parallax-section">
    <div class="parallax-bg" data-bottom-top="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" data-anchor-target="#page-sample" style="background-image:url(<?php echo esc_html($meta['bg']); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title"><img src="/wp-content/uploads/2018/04/ROAM-white-transparent.png" alt="" width="50%" /></h2>
            <p class="subtitle"><?php echo esc_html($meta['subtitle']); ?></p>
          </div> <!-- .col-md-12 -->
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .parallax-bg -->
  </div> <!-- .page-top -->

</div> <!-- .page-intro -->

