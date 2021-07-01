<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="karantinayogya">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/192.png">
    <meta name="generator" content="karantinayogya">
    <meta name="theme-color" content="#3367D6"/>
    <link rel="canonical" href="https://karantinayogya.org/sikepo/">
    <title>Si-KEPO || Sistem Informasi Capaian Kinerja dan Evaluasi Pencapaian Output</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/favicon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap4/css/bootstrap.min.css">

    <!-- Favicons -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
      <link rel="manifest" href="manifest.json">
  </head>
  <body>
        <script>
        var cpath = "<?php echo base_url();?>";
    if ('serviceWorker' in navigator) {
      console.log('CLIENT: service worker registration in progress.');
      navigator.serviceWorker.register(cpath+'sw.js').then(function() {
        console.log('CLIENT: service worker registration complete.');
      }, function() {
        console.log('CLIENT: service worker registration failure.');
      });
    } else {
      console.log('CLIENT: service worker is not supported.');
    } 
  </script>