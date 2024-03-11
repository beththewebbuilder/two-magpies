<?php
get_header();
?>

<div class="background-ring-container-right">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/coffee-ring.png" />
</div>
<div class="background-ring-container-left">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/coffee-ring.png" />
</div>

<!--header images-->
<div class="row g-0">
    <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3 hide-xs-screen">
        <div class="header-image">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/breakfast.jpg"/>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-4 col-xl-3">
        <div class="header-image">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/header.jpeg"/>
        </div>
    </div>
    <div class="col-sm-12 col-lg-4 col-xl-3 hide-small-screen">
        <div class="header-image">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/cafe.jpg"/>
        </div>
    </div>
    <div class="col-3 hide-mid-screen">
        <div class="header-image">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/cakes.jpg"/>
        </div>
    </div>
</div>

<div class="container pt-4">

    <h1 class="text-center secondary-font mb-4">Our Menu</h1>

    <?php echo $post->post_content; ?>
    
    <div class="content">
        <div class="content-title">Visit us</div>
        26A St James Street <br/>
        South Petherton <br/>
        Somerset
    </div>
    <div class="content">
        <u>Mon - Fri</u></br>
        9am - 2pm
    </div>
    <div class="content">
        <u>Sat</u></br>
        9am - noon
    </div>
    <div class="content">
        <u>Sun</u></br>
        Closed
    </div>

    <div class="content">
        <div class="content-title">Get in touch</div>
    </div>
    <div class="content">
        <a href="tel:07585 998667">07585 998667</a>
    </div>
    <div class="content">
        <a href="mailto:twomagpiesvillagecafe@outlook.com">twomagpiesvillagecafe@outlook.com</a>
    </div>

    <div class="content-break-icon"><i class="fa-brands fa-instagram"></i></div>

    <div class="content">
        <div class="content-title">Find us on Instagram</div>
    </div>

</div>

<!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>

<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
    /* curator-feed-default-feed-layout */
    (function(){
    var i,e,d=document,s="script";i=d.createElement("script");i.async=1;i.charset="UTF-8";
    i.src="https://cdn.curator.io/published/b8c9d0b7-00fb-480c-8de7-3fc403e6b527.js";
    e=d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
    })();
</script>
    
<?php
get_footer(); 
?>