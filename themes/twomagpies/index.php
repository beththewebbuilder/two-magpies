<?php
get_header();
?>

<div class="background-ring-container-right">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/coffee-ring.png" />
</div>
<div class="background-ring-container-left">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/coffee-ring.png" />
</div>
<div class="header-image">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/header.jpeg"/>
</div>

<div class="container pt-4">
    <div class="row">
        <div class="col-12">
            <div class="content">
                Friendly little café in the heart of the beautiful village of South Petherton, serving coffee, breakfast, lunch and more!
            </div>
        </div>

        <div class="col-sm-12 col-md-6">
            <div class="content-break-icon"><i class="fa-solid fa-burger"></i></div>
            <div class="content">
                Are you looking for a coffee on the go, or delicious home made lunch before heading back to work? We’ve got you covered with our take away options!
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="content-break-icon"><i class="fa-solid fa-gift"></i></div>
            <div class="content">
                Hosting a birthday party or baby shower? Get in touch to find out about booking out our cafe for afternoon tea and cake!
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="content-break-icon"><i class="fa-solid fa-cookie-bite"></i></div>
            <div class="content">
                Want some of our delicious baked goods delivered directly to your door? Get in touch to hear more about our order postal cookie and brownies!
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="content-break-icon"><i class="fa-solid fa-coffee"></i></div>
            <div class="content">
                HOMEMADE CAKES
                <br/>
                WEEKLY SPECIALS
                <br/>
                TAKE AWAY
                <br/>
                EVENING EVENTS
                <br/>
                EVENTS CATERING
            </div>
        </div>
    </div>
    
    
    
    


    <div class="button-container text-center mt-4 mb-4">
        <a class="btn btn-pink" href="<?php echo get_site_url(); ?>/menu">View our menu</a>
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