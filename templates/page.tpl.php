  <script type="text/javascript">
      $(document).ready(function() {
      $('.show_hide').showHide({       
      speed: 500,
      changeText: 1        
        });
    })
   </script>
<div class="cu-identity">
  <div class="container">
    <div id="cu-identity-wrap">
      <div id="cu-identity-content">
        <a id="insignia-link" href="http://www.cornell.edu/"><img src="/sites/all/themes/dcapsskeleton/images/lib.gif" alt="Cornell University" border="0" /></a>
        <div id="unit-signature-links">
          <a id="cornell-link" href="http://www.library.cornell.edu/">Cornell University Library</a>
        </div>
        <div id="search-navigation" class="mobile-hide">
          <ul>
            <li><a href="http://www.library.cornell.edu/accessiblesearch/">Search Library</a></li>
            <li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
          </ul>
        </div>
      </div><!-- cu-identity-content -->
    </div><!-- cu-identity-wrap -->
  </div>
</div>
<header>
        <div class="container">
            <div class="sixteen columns">
              <h1><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></h1>
                  <div class="search">
                    <?php print render($page['search_area']); ?> 

                  </div>
            </div>
        </div>
</header>
      <nav>
        <div class="container">
            <div class="sixteen columns">
 <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => NULL)); ?>            </div>
        </div>
      </nav>





<div class="main-content">
  <div class="container">
     <?php print $breadcrumb; ?> 
    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar  = render($page['sidebar']);
      ?>

    <!--if there is a sidebar, then create two columned layout-->
   
       <?php if ($sidebar): ?>

     <div class="four columns sidebar">
        <?php print $sidebar; ?>
      <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => NULL)); ?>
    
      </div>



      <div class="eleven columns offset-by-one">
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php if ($title): ?>
            <h2><?php print $title; ?></h2>
        <?php endif; ?>

        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        
        <?php if(!empty($page['content'])) : ?>

          <?php if(drupal_is_front_page()) {
              unset($page['content']['system_main']['default_message']);
            }?>

          <?php print render($page['content']); ?>

      </div>
    <?php endif; ?>
</div>
    <!-- otherwise render a one-column layout -->
      <?php else :?>
        <div class="sixteen columns">
          <?php print render($page['highlighted']); ?>
          <!--<?php print $breadcrumb; ?>-->
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php if ($title): ?>
              <h2><?php print $title; ?></h2>
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          
          <?php if(!empty($page['content'])) : ?>

            <?php if(drupal_is_front_page()) {
                unset($page['content']['system_main']['default_message']);
              }?>

            <?php print render($page['content']); ?>

          <?php endif; ?>
        </div>
    <?php endif; ?>

  </div>
</div>
<footer>
  <div class="container">
    <div class="sixteen columns">
      <?php print render($page['footer']); ?>
      <?php if ( user_is_logged_in() ) { print '<p class="login">Hi <a href="/user" title="View your dashboard">'. $user->name .'</a> (<a href="/user/logout" title="Logout">Logout</a>)</p>'; } else { print '<p class="login"><a id="login" href="/user" title="Login here">Login</a></p>'; } ?>
    </div>
  </div>
</footer>

<?php print render($page['bottom']); ?>