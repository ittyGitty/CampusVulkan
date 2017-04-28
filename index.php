
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="nettside for studenter ved Westerdals">
<meta name="author" content="Ine Målbakken">

    <title>Campus Vulkan</title>
    <link rel="stylesheet" type="text/css" href="/CSS/campusVulkan.css">
    
    
    <script type="text/javascript">

        var slideimages = new Array() // create new array to preload images
        slideimages[0] = new Image() // create new instance of image object
        slideimages[0].src = "/Bilder/vulkan1.jpg" // set image src property to image path, preloading image in the process
        slideimages[1] = new Image()
        slideimages[1].src = "/Bilder/vulkan2.jpg"
        slideimages[2] = new Image()
        slideimages[2].src = "/Bilder/vulkan3.jpg"

    </script>
    
    
</head>


    <body>
        
        <?php $page = 'one'; include('PHP/header.php'); ?>
        
        <div id="frontCover">
        
            <img id="slide" src="Bilder/vulkan1.jpg">
        
        
        </div>
        
        
        <script type="text/javascript">

            //variable that will increment through the images
            var step=0

            function slideit(){
             //if browser does not support the image object, exit.
             if (!document.images)
              return
             document.getElementById('slide').src = slideimages[step].src
             if (step<2)
              step++
             else
              step=0
             //call function "slideit()" every 2.5 seconds
             setTimeout("slideit()",2500)
            }

            slideit()

        </script>
    
        
        <?php require 'PHP/footer.php'; ?>
        
        
        

    </body>
    
    
 
    
</html>