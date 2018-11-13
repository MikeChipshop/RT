<footer id="colophon" role="contentinfo">
    <section class="social-block">
        <h1>Follow us on Google+, Facebook, Twitter and Houzz</h1>
        <ul>
          <li><a target="_blank" rel="noreferrer" href="https://business.google.com/dashboard/l/00218186411982608153?hl=en" title="Find RT Alkin on Google+"><i class="fab fa-google-plus-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://www.facebook.com/RTAlkinLeadworkandRoofing" title="Find RT Alkin on Facebook"><i class="fab fa-facebook-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://twitter.com/rtalkinleadwork" title="Follow RT alkin on Twitter"><i class="fab fa-twitter-square"></i></a></li>
          <li><a target="_blank" rel="noreferrer" href="https://www.houzz.co.uk/pro/rtalkinleadwork/rt-alkin-leadwork" title="Find RT Alkin on Houzz"><i class="fab fa-houzz"></i></a></li>
      </ul>
    </section>
    <section class="rt_get-in-touch" itemscope itemtype="http://schema.org/LocalBusiness">

        <h1>Get in Touch</h1>
        <div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
            <img src="https://www.rtalkinleadworkandroofing.co.uk/wp-content/themes/RTAlkin/images/rt-alkin-logo.png" width="250" itemprop="url">
        </div>
        <div class="rt_footer-contact-lists">
            <ul>
                <li itemprop="name"><?php the_field('business_name','option'); ?></li>
                <li>Tel: <a href="tel:<?php the_field('business_telephone','option'); ?>"><span itemprop="telephone"><?php the_field('business_telephone','option'); ?></span></a></li>
                <li>Email: <a href="mailto:<?php the_field('business_email','option'); ?>" itemprop="email"><?php the_field('business_email','option'); ?></a></li>
            </ul>
            <ul itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <li itemprop="streetAddress"><?php the_field('business_address','option'); ?></li>
                <li itemprop="addressLocality"><?php the_field('business_address_line-two','option'); ?></li>
                <li itemprop="postalCode"><?php the_field('business_postcode','option'); ?></li>
            </ul>
        </div>
    </section>

    </footer><!-- #colophon -->
    </div><!-- #container -->
<div id="site-generator">
    &copy <?php the_date(Y); ?> <?php bloginfo( 'name');  ?>
    &nbsp;|&nbsp;&nbsp;Site by <a href="http://francesca-designed.me" rel=”noreferrer”>francesca-designed.me</a> | <a href="https://miniman-webdesign.co.uk" rel="noreferrer" target="_blank">Miniman</a>

</div>


<?php wp_footer(); ?>
<?php if ( is_page_template( 'tpl_location-pages.php' ) ): ?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_oWa8xmTOpD0ISjI5rQUXBEEM77aWSQc&sensor=false"></script>
<?php endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
 WebFont.load({
    google: {
      families: ['Lato:900', 'Vollkorn']
    }
  });
</script>


</body>
</html>
