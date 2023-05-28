<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first_theme
 */

?>

	<footer class="site-footer footer-section" id="footer-section">
      <div class="site-wrapper">
        <!---->
        <div class="footer-holder">
          <div class="best-tour-plan2 site-branding">

          <!-- if statement for Footer Logo -->
          <?php if(!empty(get_theme_mod('footer_image'))){ ?>
            <img src="<?php echo get_theme_mod( 'footer_image' ); ?>" alt="Footer Logo Image">
          <?php } ?>
        </p>
          </div>
          <div class="all-categories">
            <span>
              <h4>ALL CATEGORIES</h4>
            </span>
            <?php
              wp_nav_menu(
              array(

              'theme_location' => 'footer-menu-1',
              'container'      => '',
              'before'      => '<p>',
              'after'      => '</p>',
              'items_wrap'     => '<span>%3$s</span>',
            )
          );
          ?> 
          </div>
                <div class="all-categories">
                <span>
                  <h4>ADDITIONAL INFORMATION
                  </h4>
                  </span>
                  <?php
                  wp_nav_menu(
                  array(

                  'theme_location' => 'footer-menu-2',
                  'container'      => '',
                  'before'      => '<p>',
                  'after'      => '</p>',
                  'items_wrap'     => '<span>%3$s</span>',
                )
              );
                ?>


                <!-- <span>
                  <span class="social-icons">
                    <h4>Social Network</h4>
                    <span>
                      <a href=""><img src="./asset/icons/bx_bxl-facebook-circle.png" alt=""></a>
                      <a href=""><img src="./asset/icons/entypo-social_youtube-with-circle.png" alt=""></a>
                      <a href=""><img src="./asset/icons/whh_circleinstagram.png" alt=""></a>
                    </span>
                    
                  </span>
                </span> -->
              </div>

          <div class="all-categories">
            <span>
              <h4>LEGAL INFORMATION
              </h4>
            </span>
            <?php
              wp_nav_menu(
              array(

              'theme_location' => 'footer-menu-3',
              'container'      => '',
              'before'      => '<p>',
              'after'      => '</p>',
              'items_wrap'     => '<span>%3$s</span>',
            )
          );
          ?> 
          </div>
        </div>
        <!---->
          <div class="contact-section">
            <div class="details">
              <span>
                <h4>CONTACT DETAILS
                <p><?php echo get_theme_mod( 'footer_contact_details_form' )?></p>
                </h4>
              </span>
                  <!-- if statement for Footer Address Text -->
                  <span>
                  <?php if(!empty(get_theme_mod('footer_business_hours')) || get_theme_mod('footer_business_hours') !== " "){ ?>
                    <p>
                      <img src="wp-content/themes/first_theme/asset/icons/location.png" alt=""><?php echo get_theme_mod( 'footer_address_text' ); ?>
                    </p>
                  <?php } ?>

                    <!-- if statement for Footer Business Hours-->

                    <?php if(!empty(get_theme_mod('footer_address_text')) || get_theme_mod('footer_address_text') !== " "){ ?>
                    <p>
                      <img src="wp-content/themes/first_theme/asset/icons/location.png" alt=""><?php echo get_theme_mod( 'footer_business_hours' ); ?>
                    </p>
                    <?php } ?>
                    

                    <p><img src="wp-content/themes/first_theme/asset/icons/ic_round-email.png" alt=""><?php echo get_theme_mod( 'footer_email' )?></p>
                  </span>
            </div>


          <div class="contact-form-section">
            <span>
              <h4>SEND US A MESSAGE 
              </h4>
            </span>
            
            <span class="contact-form">
              <form class="first-form" action="" method="post">
                <input class="name-input" type="text" name="" placeholder="Your Full Name*" id="">
                <!---->
                <input class="number-input" type="number" name="number" placeholder="Phone Number*" id="">
              </form>
              <form class="second-form" action="" method="post">
                <input class="message-input" type="text" name="" placeholder="Message" id="">
              </form>
              <span class="submit-button">
                <button type="submit">Send</button>
                <p>* Required Fields</p>
              </span>

              
            </span>
          </div>
        </div>
        <!---->
        <div class="last-section">
          <span>
          <?php
              wp_nav_menu(
              array(

              'theme_location' => 'footer-menu-4',
              'container'      => '',
              'before'      => '<p>',
              'after'      => '</p>',
              'items_wrap'     => '<span>%3$s</span>',
            )
          );
          ?> 
          </span>

          <span>
            <img src="wp-content/themes/first_theme/asset/images/image3.png" alt="">
          </span>
        </div>


      </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
