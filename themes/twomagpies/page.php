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
    <div class="content">
        <div class="content-title">Occasion Cake Price List</div>
        <ul>
            <li>Decorative cupcakes £15 per 6</li>
            <li>Mini cake & 2 cupcakes £25</li>
            <li>Mini cake & 8 cupcakes £40</li>
            <li>Brownie stacks £35</li>
            <li>6 inch cakes start from £55</li>
            <li>7 inch cakes start from £65</li>
            <li>8 inch cakes start from £85</li>
        </ul>
        <small class="text-center">All prices are starting prices, additional costs for toppers and additional decorations</small>
    </div>    
    <div class="content">
        <div class="content-title">Traybake and Cookie Price List</div>
        <ul>
            <li>Rocky Road start from £15</li>
            <li>Brownie start from £20</li>
            <li>Blondie start from £20</li>
            <li>Millionaires start from £15</li>
        </ul>
        Multiple toppings/flavours available </br>
        <small>All traybakes are decorated to a minimal design unless otherwise specified</small>
    </div>

    <div class="menu-list">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/menus/menu_1.jpeg"/>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/menus/menu_2.jpeg"/>
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/menus/menu_3.jpeg"/>
    </div>

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