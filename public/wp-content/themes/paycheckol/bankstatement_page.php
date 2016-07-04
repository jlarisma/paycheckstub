<?php /*Template Name: Bank statemanet SAF-Paystub*/ 

get_header(); 	
?>
    <link rel="stylesheet" type="text/css" href="/wp-content/<?php echo get_theme_roots(); ?>/paycheckol/css/form.css">
    <style>
        iframe {
            width:100%;
            height:1px;
            overflow:hidden;
        }
        #tabs>div.ui-tabs-panel{
            background-image: none;
            width:98%;
        }
    </style>

    
<?php //get_template_part('includes/breadcrumbs'); ?>
<?php get_template_part('includes/top_info'); ?>

<?php
	  $baseDir =str_replace('/wp-content/themes', '', get_theme_root()) . "/"; // wordpress home dir;
	    require_once($baseDir.'paystub/_pages.inc');
        
	    require_once($baseDir.'paystub/util.php');
	  $paystubPath = $baseDir. 'paystub/';	  
	  $pdf_pagesInclude = paystub_get_pages($paystubPath);
      $baseUrl = site_url();
	  $pdf_pagesUrl = paystub_get_pages($baseUrl);
	  $prevUrl = $baseUrl. "/paystub/ajax_preview_stub.php";
?>

<div id="content" class="clearfix fullwidth">
 <div id="left-area">
<?
echo 'Hello ' . htmlspecialchars($_GET["nam"]) . '!';
?>
     <!--adding by karlmc15-->
<?php include "/home/nginx/domains/paycheckstubonline.com/public/wp-content/themes/paycheckol/inc/adding_form.inc" ;
//echo  "/inc/adding_form.inc"; 
?>
<!--adding by karlmc15-->
 
    <?php the_content(); ?>

 </div><!-- end #left-area -->
</div> <!-- end #content .clearfix fullwidth-->
<?php get_footer(); ?>
    <script>
        // auto height
        function calcHeight(ifr)
        {
            //find the height of the internal page
            //alert(1);

            var the_height= ifr.contentWindow.document.body.scrollHeight;
            //change the height of the iframe
            $(ifr).css('height',the_height+"px");
            return the_height;
        }
    </script>