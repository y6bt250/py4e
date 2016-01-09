<!DOCTYPE html>
<html>
    <head>
        <title>PythonLearn - Exploring Data</title>
        
        <link rel="stylesheet" href="assets/foundation/css/foundation.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/style.css" type="text/css" />
        <link rel="alternate" type="application/rss+xml" title="PythonLearn Podcast" href="http://www.pythonlearn.com/audiofeed.xml" />
        <script src="assets/foundation/js/vendor/jquery.min.js"></script>
        <script src="assets/foundation/js/foundation.js"></script>
        <script>
            jQuery(document).ready(function(){
                var elem = new Foundation.Tabs(jQuery('#vert-tabs'));
            });
            var lastScroll = 0;
            jQuery(window).scroll(function(){
                var w = jQuery(window);

                if (w.scrollTop() < lastScroll) {
                    jQuery(".title-bar").show();
                    lastScroll = w.scrollTop()+20;
                }
                if (w.scrollTop() > lastScroll){
                    jQuery(".title-bar").hide();
                    lastScroll = w.scrollTop()-20;	
                }
            });
        </script>
    </head>
    <body>
    <?php include("nav.php"); ?>

