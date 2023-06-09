<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'first-theme' ); ?></a>

	<header id="masthead" class="site-header nav">
    <div class="nav-bg" id="nav-bg">
        <div class="site-wrapper">
          <div class="nav-top">
            <div class="nav-enquiry">
              <p>Questions? Need Help?</p>
              <p>
                Call us on <a href="tel: +(123)-456-1500">+(123)-456-1500</a>
              </p>
            </div>
            <div class="nav-btp-loyalty">
              <div class="nav-btp">
                <p>
                  <svg
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M3 8.25C3.41421 8.25 3.75 8.58579 3.75 9V15.75H14.25V9C14.25 8.58579 14.5858 8.25 15 8.25C15.4142 8.25 15.75 8.58579 15.75 9V16.5C15.75 16.9142 15.4142 17.25 15 17.25H3C2.58579 17.25 2.25 16.9142 2.25 16.5V9C2.25 8.58579 2.58579 8.25 3 8.25Z"
                      fill="#333333"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0.75 5.25C0.75 4.83579 1.08579 4.5 1.5 4.5H16.5C16.9142 4.5 17.25 4.83579 17.25 5.25V9C17.25 9.41421 16.9142 9.75 16.5 9.75H1.5C1.08579 9.75 0.75 9.41421 0.75 9V5.25ZM2.25 6V8.25H15.75V6H2.25Z"
                      fill="#333333"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9 4.5C9.41421 4.5 9.75 4.83579 9.75 5.25V16.5C9.75 16.9142 9.41421 17.25 9 17.25C8.58579 17.25 8.25 16.9142 8.25 16.5V5.25C8.25 4.83579 8.58579 4.5 9 4.5Z"
                      fill="#333333"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.625 2.25C5.32663 2.25 5.04048 2.36853 4.8295 2.5795C4.61853 2.79048 4.5 3.07663 4.5 3.375C4.5 3.67337 4.61853 3.95952 4.8295 4.1705C5.04048 4.38147 5.32663 4.5 5.625 4.5H7.99052C7.89896 4.26046 7.78306 3.99706 7.63971 3.73644C7.16799 2.87876 6.52043 2.25 5.625 2.25ZM9 5.25C9.73544 5.10291 9.73538 5.10266 9.73533 5.10239L9.73491 5.10028L9.73409 5.09627L9.73157 5.0842C9.72949 5.07438 9.72662 5.06104 9.7229 5.04441C9.71548 5.01118 9.7047 4.96474 9.69025 4.90697C9.66141 4.79157 9.61774 4.63007 9.5568 4.43764C9.43579 4.05549 9.24248 3.53801 8.95404 3.01356C8.39451 1.99624 7.35457 0.75 5.625 0.75C4.92881 0.75 4.26113 1.02656 3.76884 1.51884C3.27656 2.01113 3 2.67881 3 3.375C3 4.07119 3.27656 4.73887 3.76884 5.23116C4.26113 5.72344 4.92881 6 5.625 6H9C9.2247 6 9.43755 5.89926 9.58001 5.72549C9.72246 5.55173 9.7794 5.32272 9.73533 5.10239L9 5.25Z"
                      fill="#333333"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.04596 3.01356C9.60549 1.99624 10.6454 0.75 12.375 0.75C13.0712 0.75 13.7389 1.02656 14.2312 1.51884C14.7234 2.01113 15 2.67881 15 3.375C15 4.07119 14.7234 4.73887 14.2312 5.23116C13.7389 5.72344 13.0712 6 12.375 6H9C8.7753 6 8.56245 5.89926 8.41999 5.72549C8.27754 5.55173 8.2205 5.32324 8.26456 5.10291L9 5.25C8.26456 5.10291 8.26451 5.10318 8.26456 5.10291L8.26479 5.10177L8.26509 5.10028L8.26591 5.09627L8.26843 5.0842C8.27051 5.07438 8.27338 5.06104 8.2771 5.04441C8.28452 5.01118 8.2953 4.96474 8.30975 4.90697C8.33859 4.79157 8.38226 4.63007 8.4432 4.43764C8.56421 4.05549 8.75752 3.53801 9.04596 3.01356ZM10.0095 4.5H12.375C12.6734 4.5 12.9595 4.38147 13.1705 4.1705C13.3815 3.95952 13.5 3.67337 13.5 3.375C13.5 3.07663 13.3815 2.79048 13.1705 2.5795C12.9595 2.36853 12.6734 2.25 12.375 2.25C11.4796 2.25 10.832 2.87876 10.3603 3.73644C10.2169 3.99706 10.101 4.26046 10.0095 4.5ZM9.73518 5.39835C9.73513 5.39859 9.73514 5.39855 9.73518 5.39835V5.39835Z"
                      fill="#333333"
                    />
                  </svg>
                </p>
                <p>BTP Gift Card</p>
              </div>
              <div class="nav-loyalty">
                <p>
                  <svg
                    width="18"
                    height="17"
                    viewBox="0 0 18 17"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M9.00002 0.75C9.28549 0.75 9.5462 0.912054 9.67255 1.16803L11.8157 5.50985L16.6085 6.21039C16.8909 6.25167 17.1254 6.44967 17.2135 6.72118C17.3015 6.99268 17.2278 7.29062 17.0233 7.48977L13.5559 10.867L14.3742 15.6382C14.4225 15.9196 14.3068 16.204 14.0758 16.3718C13.8448 16.5396 13.5386 16.5617 13.2859 16.4288L9.00002 14.1749L4.71411 16.4288C4.46142 16.5617 4.1552 16.5396 3.92422 16.3718C3.69324 16.204 3.57755 15.9196 3.62582 15.6382L4.44413 10.867L0.976722 7.48977C0.772259 7.29062 0.698554 6.99268 0.786587 6.72118C0.874621 6.44967 1.10913 6.25167 1.39155 6.21039L6.18433 5.50985L8.32749 1.16803C8.45385 0.912054 8.71456 0.75 9.00002 0.75ZM9.00002 3.19444L7.35505 6.52697C7.2459 6.7481 7.03501 6.90145 6.79099 6.93712L3.11133 7.47495L5.77332 10.0677C5.95023 10.24 6.03097 10.4884 5.98923 10.7318L5.36116 14.3938L8.65093 12.6637C8.86947 12.5488 9.13057 12.5488 9.34911 12.6637L12.6389 14.3938L12.0108 10.7318C11.9691 10.4884 12.0498 10.24 12.2267 10.0677L14.8887 7.47495L11.2091 6.93712C10.965 6.90145 10.7541 6.7481 10.645 6.52697L9.00002 3.19444Z"
                      fill="#333333"
                    />
                  </svg>
                </p>
                <p>Loyalty Program</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-main">
        <div class="site-wrapper">
          <div class="best-tour-plan">
            <!--First div-->
            <div class="site-branding logo-search" id="logo-search" >
               <?php the_custom_logo(); ?>
               <form class="flex" action="" method="get">
               <input
                  class="search-input" id="nav-search-input"
                  type="search"
                  placeholder="Search Location"
                  name="search"
                  id=""
                />
                <button class="search-button">
                  <img src="wp-content/themes/first_theme/asset/icons/FindButton.png" alt="" />
                </button>
              </form>
              </div><!-- .site-branding -->
            



            <!--Second div-->
            <div class="menu" id="dropdown">
              <span>
                <svg
                  width="34"
                  height="34"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_11_227)">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M7 31C7 29.8954 7.89543 29 9 29C10.1046 29 11 29.8954 11 31C11 32.1046 10.1046 33 9 33C7.89543 33 7 32.1046 7 31Z"
                      fill="black"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M18 31C18 29.8954 18.8954 29 20 29C21.1046 29 22 29.8954 22 31C22 32.1046 21.1046 33 20 33C18.8954 33 18 32.1046 18 31Z"
                      fill="black"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 11C0 10.4477 0.447715 10 1 10H5C5.47663 10 5.88701 10.3364 5.98055 10.8037L6.82043 15H23C23.298 15 23.5805 15.1329 23.7705 15.3626C23.9605 15.5922 24.0381 15.8946 23.9823 16.1873L22.3809 24.5848C22.2437 25.2754 21.868 25.8958 21.3195 26.3373C20.7738 26.7766 20.0916 27.011 19.3914 27H9.68864C8.98837 27.011 8.3062 26.7766 7.76048 26.3373C7.21225 25.8959 6.83664 25.2759 6.69933 24.5857C6.69927 24.5854 6.69939 24.5859 6.69933 24.5857L5.02879 16.2392C5.02201 16.2116 5.01638 16.1835 5.01195 16.1551L4.18032 12H1C0.447715 12 0 11.5523 0 11ZM7.22073 17L8.66084 24.1952C8.70656 24.4254 8.83179 24.6322 9.01461 24.7793C9.19743 24.9265 9.42619 25.0047 9.66084 25.0002L9.68 25H19.4L19.4192 25.0002C19.6538 25.0047 19.8826 24.9265 20.0654 24.7793C20.2474 24.6328 20.3723 24.4273 20.4185 24.1984L21.7913 17H7.22073Z"
                      fill="black"
                    />
                  </g>
                  <circle cx="24" cy="10" r="10" fill="#EC1F46" />
                  <path
                    d="M26.45 12.15V13H21.78V12.23L24.23 9.54C24.5433 9.19333 24.77 8.88 24.91 8.6C25.0567 8.31333 25.13 8.03 25.13 7.75C25.13 7.39 25.0267 7.11667 24.82 6.93C24.6133 6.73667 24.3133 6.64 23.92 6.64C23.26 6.64 22.6 6.9 21.94 7.42L21.57 6.66C21.85 6.4 22.2067 6.19333 22.64 6.04C23.0733 5.88 23.51 5.8 23.95 5.8C24.63 5.8 25.1667 5.97 25.56 6.31C25.96 6.65 26.16 7.11 26.16 7.69C26.16 8.10333 26.07 8.49667 25.89 8.87C25.71 9.23667 25.41 9.64667 24.99 10.1L23.09 12.15H26.45Z"
                    fill="white"
                  />
                  <defs>
                    <clipPath id="clip0_11_227">
                      <rect
                        width="24"
                        height="24"
                        fill="white"
                        transform="translate(0 10)"
                      />
                    </clipPath>
                  </defs>
                </svg>
              </span>

              <span class="flex gap">
                <img src="wp-content/themes/first_theme/asset/images/Ellipse1.png" alt="" />
                <p>Nathan</p>
                <button class="button">
                  <img src="wp-content/themes/first_theme/asset/images/Vector(Stroke).png" alt="" />
                </button>
              </span>

              <span> </span>
            </div>
          </div>
        </div>
      </div>
	
		<nav id="site-navigation" class="main-navigation nav-bottom">

      <div class="site-wrapper">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'first-theme' ); ?>
        </button>
        <?php
              wp_nav_menu(
              array(

              'theme_location' => 'primary-menu',
              'container'      => 'div',
              'container_class'=>  'nav-buttom-list',
              'container_id'   =>   'nav-buttom-list-menu',
              'menu_id'        => 'primary-menu',
              'items_wrap'     => '<ul class="list-menu">%3$s</ul>',
            )
          );
          ?> 
    </div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->


