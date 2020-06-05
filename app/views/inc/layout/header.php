<?php require APPROOT . '/helpers/cookies.php'; ?>
<?php $detect = new Mobile_Detect; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
  <meta http-equiv="cache-control" content="max-age=259200, public" />
  <link rel="icon" type="image/png" href="<?php echo PUBLICASSETS; ?>/imgs/site/favicon.png" />
  <title><?php echo $meta_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <link rel="stylesheet" href="<?php echo SITEURL; ?>/css/styles.min.css?v=<?php echo CSS_VERSION; ?>">
</head>
<body class="page-<?php echo $page; ?> <?php echo $detect->isMobile() ? 'mobile' : 'browser' ?> <?php echo $detect->isMobile() || $detect->isTablet() ? 'touch' : '' ?>" >

<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->

<input type="hidden" class="template-directory-uri-value" data-template-directory-uri="<?php //echo get_template_directory_uri(); ?>" />
<input type="hidden" class="site-url-value" data-site-url="<?php //echo esc_url( site_url() ); ?>" />
<input type="hidden" class="environment-value" data-environment="<?php echo ENVIRONMENT; ?>" />

<?php require APPROOT . '/views/inc/layout/header-menu.php'; ?>

<div class="site-wrapper">
<div class="site-content">
