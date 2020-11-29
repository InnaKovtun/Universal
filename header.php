<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <title>Universal college</title>
    <?php wp_head();?>
  </head>
  <body>

  <header>
    <div class="header-main-info">
      
      <div class="header-title-section">

        <div>
          <a href="<?php echo home_url();?>" class="header-title-link">
            <div class="header-title" ><?php bloginfo('name');?></div>
          </a>
        </div>
          
        <p class="header-subtitle">Free PSD Website Tamplate</p>
      </div>

      <div class="header-moreinfo-section">
        
        <nav class="header-info-nav">
          <ul class="header-info-navlist">
            <li class="header-info-item">
              <a class="header-info-link" href="<?php echo home_url();?>">Libero</span></a>
              <span class="pseudo-line">|</span>
            </li>
            <li class="header-info-item">
              <a class="header-info-link" href="<?php echo home_url();?>">Maecenas</a>
              <span class="pseudo-line">|</span>
            </li>
            <li class="header-info-item">
              <a class="header-info-link" href="<?php echo home_url();?>">Mauris</span></a>
              <span class="pseudo-line">|</span>
            </li>
            <li class="header-info-item">
              <a class="header-info-link" href="<?php echo home_url();?>">Suspendisse</a>
            </li>
          </ul>
        </nav>
        <div class="header-contact-info">
          <p class="header-contact-num">Tel: xxxxx xxxxxxxxxx</p>
          <span class="pseudo-line">|</span>
          <p class="header-contact-mail">Mail: info@domain.com</p>
        </div>
      </div>
    </div>

    </div>
    <nav class="navbar">
        <div class="nav navbar-nav" id="menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'menu_class' => 'navbar-nav mr-auto top-menu'
          )); ?>
        </div>
        
        <form class="form-inline my-2 my-md-0">
          <input class="search-input" type="text" placeholder="Search this website...">
          <button class="search-button">Search</button>
        </form>
    </nav>
    
  </header>
