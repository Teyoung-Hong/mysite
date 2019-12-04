<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charet'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lish</title>

  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single.css" type="text/css" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- links -->
  <script data-ad-client="ca-pub-8287269453823622" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130548866-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130548866-4');
</script>

</head>
<body <?php body_class(); ?>>
  <!-- header -->
  <header>
    <div class="wrap_header clearfix">
      <div class="header_title"><a href="<?php echo home_url(); ?>">Lish</a></div>
      <a href="<?php echo home_url('/about'); ?>" style="color: white;">About</a>
    </div>
  </header>
