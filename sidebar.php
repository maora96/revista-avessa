<?php 
if ( ! is_active_sidebar('main-sidebar')) {
    return;
}

?>

<!-- WIDGETS - SIDEBAR -->

<hr>

<section class="widget">
    <div class="widget-box">

    <?php dynamic_sidebar('main-sidebar'); ?>

    </div>

</section>
</section>
