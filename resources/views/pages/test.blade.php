<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Unite Gallery - Default Theme - No Text Panel</title>

   
    
    
</head>

<body>
    
    <h2>Default Theme - No Text Panel</h2>
    <script type='text/javascript' src='gal/unitegallery/js/jquery-11.0.min.js'></script>   
    <script type='text/javascript' src='gal/unitegallery/js/unitegallery.min.js'></script>  

    <link rel='stylesheet' href='gal/unitegallery/css/unite-gallery.css' type='text/css' />
    
    <script type='text/javascript' src='gal/unitegallery/themes/default/ug-theme-default.js'></script>
    <link rel='stylesheet'        href='gal/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
    
    <div id="gallery" style="display:none;">
    
        <img alt="Preview Image 1"
             src="gal/images/thumbs/thumb1.jpg"
             data-image="gal/images/big/image1.jpg"
             data-description="Preview Image 1 Description">
        
        <img alt="Preview Image 2"
             src="gal/images/thumbs/thumb2.jpg"
             data-image="gal/images/big/image2.jpg"
             data-description="Preview Image 2 Description">

        
             
        
             
    </div>
    
    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery({
                theme_enable_text_panel: false
            });

        });
        
    </script>


</body>
</html>