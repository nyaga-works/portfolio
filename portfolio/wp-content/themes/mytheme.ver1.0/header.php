<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
<title><?php is_front_page() ? bloginfo('name') : wp_title('|', true, 'right').bloginfo('name'); ?></title>
<meta name="description" content="<?php is_front_page() ? bloginfo('description') : wp_title('|', true, 'right').bloginfo('description'); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/fav.ico" rel="shortcut icon" />

<!--ogp-->
<meta property="og:image" content="">
<meta property="og:type" content="website">
<meta property="og:url" content=""> 
<meta property="og:title" content="">
<!-- css -->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<?php wp_deregister_script('jquery'); ?>
<?php wp_head(); ?>
<!--jquery-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.3.4.1.min.js"></script>
</head>

<body>
<header class="header">
  <h1 class="header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>" alt="logo"></a></h1>
  <div class="nav__toggle js-toggle"><span></span><span></span><span></span></div>
  <div class="nav__content js-toggle-content">
    <div class="nav__content__wrap">
      <nav class="gnav">
        <ul class="gnav__item__list">
          <li class="gnav__item"><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li class="gnav__item"><a href="<?php echo home_url(); ?>/news/">NEWS</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>


<main class="main">