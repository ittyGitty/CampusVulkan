
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

        var slideimages = new Array() // Ny array for å preloade bilder
        slideimages[0] = new Image() // nytt bildeobjekt
        slideimages[0].src = "/Bilder/vulkan1.jpg" // set image src property to image path, preloading image in the process
        slideimages[1] = new Image()
        slideimages[1].src = "/Bilder/vulkan2.jpg"
        slideimages[2] = new Image()
        slideimages[2].src = "/Bilder/vulkan3.jpg"

    </script>
   
    
</head>


    <body>
        
        <?php $page = 'one'; include('PHP/header.php'); ?>
      
        
        
      <!-- *DETTE FUNGERER MEN UTEN EFFEKT*

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

        </script> -->
        
        
    
        
       <!-- <script type="text/javascript">    *DENNE FÅR JEG IKKE TIL Å FUNGERE*
        
        var slideImages = new Array(); // Ny array for å preloade bilder
            slideImages[0] = new Image(); // nytt bildeobjekt
            slideImages[0].src = "/Bilder/vulkan1.jpg"; // set image src property to image path, preloading image in the process
            slideImages[1] = new Image();
            slideImages[1].src = "/Bilder/vulkan2.jpg";
            slideImages[2] = new Image();
            slideImages[2].src = "/Bilder/vulkan3.jpg";
            
        curIndex = 0;
        imgDuration = 3000;
        
        function slideShow() {
            document.getElementById('slider').className += "fadeOut";
            setTimeout(function() {
                document.getElementById('slider').src = slideImages[curIndex];
                document.getElementById('slider').className = "";
                },1000);
            
        curIndex++;
        if (curIndex == imgArray.length) 
        { curIndex = 0; }
            
        setTimeout(slideShow, imgDuration);
        }
        slideShow();
            
        </script> -->
        
        
        
        
        <div id="slider"></div>
        
        <script src="/JS/slideShow.js"></script>
        
        
        

        
        <?php require 'PHP/footer.php'; ?>
        
        
        

    </body>
    
    
 
    
</html>