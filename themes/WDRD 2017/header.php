<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      <?php
      	/*
      	 * Print the <title> tag based on what is being viewed.
      	 */
      	global $page, $paged;
      	wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
      	// Add the blog description for the home/front page.
      	$site_description = get_bloginfo( 'description', 'display' );
      	// Add a page number if necessary:
      	if ( $paged >= 2 || $page >= 2 )
      		echo ' | ' . sprintf( __( 'Page %s', ' ' ), max( $paged, $page )
        );
    	?>
    </title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/8228808c-823c-4bbf-acc6-972f35722f91.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_stylesheet_directory_uri();?>/print.css" />
  	<!-- <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_directory_uri();?>/style.min.css" /> -->
  	<!-- <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_stylesheet_directory_uri();?>/print.min.css" /> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="header">
      <div class="wrap">

        <div class="layout-aside small-center">
          <a href="<?php echo home_url()?>">
            <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" id="logo" />
          </a>
        </div>

        <div class="layout-main">
          <div id="nav-container">
            <h1 class="nav-header">
              <a class="header-link" href="<?php echo home_url()?>">
                Catherine Woodard
              </a>
            </h1>

            <div class="navigation-mobile">
              <a class="open-mobile-menu" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icon"><path d="M28 8H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2zm0 10H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2zm0 10H4c-1.1 0-2-.9-2-2s.9-2 2-2h24c1.1 0 2 .9 2 2s-.9 2-2 2z"/></svg>
                Menu
              </a>
              <a class="close-mobile-menu" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="svg-icon"><path d="M18.404 16l9.9 9.9-2.404 2.404-9.9-9.9-9.9 9.9L3.696 25.9l9.9-9.9-9.9-9.898L6.1 3.698l9.9 9.899 9.9-9.9 2.404 2.406-9.9 9.898z"/></svg>
                Close
              </a>
              <div class="mobile-navigation-menu">
                <a class="mobile-navigation-item" href="/about/">About</a>
                <a class="mobile-navigation-item" href="/poems/">Poems</a>
                <a class="mobile-navigation-item" href="/publications/">Publications</a>
                <a class="mobile-navigation-item" href="/news/">News</a>
                <a class="mobile-navigation-item" href="/events/">Events</a>
                <a class="mobile-navigation-item" href="/contact/">Contact</a>
                <a class="mobile-navigation-item" href="https://twitter.com/cathywoodard">
                  <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve">
                    <g>
                      <path d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
                        c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
                        c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
                        c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
                        c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
                        c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
                        c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
                        C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                    </g>
                  </svg>
                  Twitter
                </a>
                <a class="mobile-navigation-item" href="https://www.instagram.com/catherinewoodard/">
                  <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 97.395 97.395" xml:space="preserve">
                    <g>
                      <path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
                        V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
                        h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
                        c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
                        c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
                        H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
                        c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
                    </g>
                  </svg>
                  Instagram
                </a>
                <a class="mobile-navigation-item" href="https://www.facebook.com/catherinewoodardwriter">
                  <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" xml:space="preserve">
                    <g>
                      <path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
                        C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
                        h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/>
                    </g>
                  </svg>
                  Facebook
                </a>
              </div>
            </div>

            <div class="navigation-internal">
              <a class="navigation-item" href="/about/">About</a>
              <a class="navigation-item" href="/poems/">Poems</a>
              <a class="navigation-item" href="/publications/">Publications</a>
              <a class="navigation-item" href="/news/">News</a>
              <a class="navigation-item" href="/events/">Events</a>
              <a class="navigation-item" href="/contact/">Contact</a>
            </div>

            <div class="navigation-external">
              <a class="navigation-item" href="https://twitter.com/cathywoodard">
                <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" xml:space="preserve">
                  <g>
                    <path d="M512.002,97.211c-18.84,8.354-39.082,14.001-60.33,16.54c21.686-13,38.342-33.585,46.186-58.115
                      c-20.299,12.039-42.777,20.78-66.705,25.49c-19.16-20.415-46.461-33.17-76.674-33.17c-58.011,0-105.042,47.029-105.042,105.039
                      c0,8.233,0.929,16.25,2.72,23.939c-87.3-4.382-164.701-46.2-216.509-109.753c-9.042,15.514-14.223,33.558-14.223,52.809
                      c0,36.444,18.544,68.596,46.73,87.433c-17.219-0.546-33.416-5.271-47.577-13.139c-0.01,0.438-0.01,0.878-0.01,1.321
                      c0,50.894,36.209,93.348,84.261,103c-8.813,2.399-18.094,3.687-27.674,3.687c-6.769,0-13.349-0.66-19.764-1.888
                      c13.368,41.73,52.16,72.104,98.126,72.949c-35.95,28.176-81.243,44.967-130.458,44.967c-8.479,0-16.84-0.496-25.058-1.471
                      c46.486,29.807,101.701,47.197,161.021,47.197c193.211,0,298.868-160.062,298.868-298.872c0-4.554-0.104-9.084-0.305-13.59
                      C480.111,136.775,497.92,118.275,512.002,97.211z"/>
                  </g>
                </svg>
              </a>
              <a class="navigation-item" href="https://www.instagram.com/catherinewoodard/">
                <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 97.395 97.395" xml:space="preserve">
                  <g>
                    <path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
                      V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
                      h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
                      c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
                      c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
                      H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
                      c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"/>
                  </g>
                </svg>
              </a>
              <a class="navigation-item" href="https://www.facebook.com/catherinewoodardwriter">
                <svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" xml:space="preserve">
                  <g>
                    <path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
                      C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
                      h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
