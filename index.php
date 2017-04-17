
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
    
</head>


    <body>
        
        <?php $page = 'one'; include('PHP/header.php'); ?>
        
        <div id="frontCover">
        
            <img id="skolen" src="Bilder/p%C3%A5fuglen.jpg">
        
        
        </div>
    
        
        <?php require 'PHP/footer.php'; ?>
        
        
        
        
               <script type="text/javascript" src="/JS/jquery-3.2.1.js"></script>
    <script type="text/javascript">

        (function(){
            
            var documentElem = $(document),
                nav = $('meny'),
                lastScrollTop = 0;
            
            documentElem.on('scroll', function(){
                var currentScrollTop = $(this).scrollTop();
                
                //scroll down
                if (currentScrollTop > lastScrollTop) nav.addClass('hidden');
                
                //scroll up
                else nav.removeClass('hidden');
                
                lastScrollTop = currentScrollTop; 
            });
            
        })();





</script>
    

    </body>
    
    
 
    
</html>