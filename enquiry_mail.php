<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <title>Careers at Magzane</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
      <meta name="author" content="Magzane IT Services Pvt Ltd.">
      <meta name="robots" content="index,follow"/>
      <meta name="msapplication-TileColor" content="#ff214f">
      <meta name="description" content="Careers at Magzane">
      <meta name="keywords" content="Careers at Magzane">
      <meta property="og:title" content="Careers at Magzane">
      <meta property="og:description" content="Careers at Magzane">
      <meta property="og:image" content="https://www.magzane.com/images/careers.jpg">
      <meta property="og:url" content="https://www.magzane.com/careers.html">
      <meta name="twitter:card" content="summary_large_image">
      <meta property="og:site_name" content="Magzane IT Services Pvt Ltd." />
      <link rel="shortcut icon" href="images/favicon.png">
      <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
      <link rel="stylesheet" href="css/animate.css" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/et-line-icons.css" />
      <link rel="stylesheet" href="css/font-awesome.min.css" />
      <link rel="stylesheet" href="css/themify-icons.css">
      <link rel="stylesheet" href="css/swiper.min.css">
      <link rel="stylesheet" href="css/justified-gallery.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css" />
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
      <link rel="stylesheet" href="css/bootsnav.css">
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/responsive.css" />
      <!--[if IE]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->
      <script type="application/ld+json">
         [
         {
         "@context": "http://schema.org",
         "@type": "LocalBusiness",
         "name": "Careers",
         "description": "Careers at Magzane",
         "url": "https://www.magzane.com/careers.html",
         "sameAs": ["https://twitter.com/magzaneit","https://www.facebook.com/magzaneit","https://www.youtube.com/channel/UCIMRlo2T0dY1psA06tz7Fwg"],
         "image": {
            "@type": "ImageObject",
            "url": "https://www.magzane.com/images/magzane.png",
            "height": "151",
            "width": "44"
         },
         "telephone": ["7997995020","7337337585"],
         "email": "info@magzane.com",
         "address": {
            "@type": "PostalAddress",
            "streetAddress": "19-4-281/G/383, Meer Sagar, Bahadurpura",
            "addressLocality": "Hyderabad",
            "addressRegion": "Telangana",
            "postalCode": "500053",
            "addressCountry": "IN"
         },
         "logo": {
            "@type": "ImageObject",
            "url": "https://www.magzane.com/images/magzane.png",
            "height": "151",
            "width": "44"
         },
         "priceRange" : "2000 - 2000000",
         "aggregateRating" : {
         "@type": "AggregateRating",
         "worstRating": 0,
         "bestRating": 5,
         "ratingValue": "5",
         "ratingCount": 1816,
         "reviewCount": 1816
                    }
         },
         {
           "@context": "http://schema.org/",
           "@type": "Service",
           "serviceType": "Careers",
           "provider": {
             "@type": "LocalBusiness",
             "name": "Careers",
                  "description": "Careers at Magzane",
                  "url": "https://www.magzane.com/careers.html",
                  "image":  "https://www.magzane.com/images/careers.jpg",
                  "telephone": ["7997995020","7337337585"],
                  "email": "info@magzane.com",
                  "address": {
                     "@type": "PostalAddress",
            "streetAddress": "19-4-281/G/383, Meer Sagar, Bahadurpura",
            "addressLocality": "Hyderabad",
            "addressRegion": "Telangana",
            "postalCode": "500053",
            "addressCountry": "IN"
                  },
                  "priceRange" : "2000 - 2000000",
                  "aggregateRating" : {
                  "@type": "AggregateRating",
                  "worstRating": 0,
                  "bestRating": 5,
                  "ratingValue": "5",
                  "ratingCount": 1816,
                  "reviewCount": 1816
                             }
                  }
           }
         ]
      </script>
</head>
<body>
 <?php
  if (isset($_POST["Email"])) {
    $Email = $_POST["Email"]; // sender
    $Contact = $_POST["Contact"];
    $Message = $_POST["Message"];
	$Name = $_POST["Name"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $Message = wordwrap($Message, 70);
    // send mail
    mail("info@fusestarengineers.com","Web Enquiry:$Contact",$Message,"From: $Email\n $Name");
	}
  ?>

<?php

    echo "<section class=section><div class=container align=center>
<div class=row><h2> Thanks for your message! Our executive will call you shortly<br/><a href=index.html>Go Back To Home</a></h2></div></div></section>";

?>  
</body>
</html>