<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>html,body{background:#0D0D0F !important;}</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background:#0D0D0F !important;">
<?php wp_body_open(); ?>
<?php do_action( 'si_header' ); ?>
