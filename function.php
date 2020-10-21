<html lang = "en">

<head>

    <title> Box </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- To link html with css -->
    <link rel = "stylesheet" href = "style_box.css" >

</head>

<body>

    <div class = "example" > 
        <h6> Example of HTML layout </h6> 
    </div>

    <!-- Box's header -->
    <header>
        <h2> <i> ---------  Welcome to Learning Port  -------- </i> </h2>
    </header>


    <!-- Box's section -->
    <div id = "box1" class = "container">
        <div class = "column1" >
        <h4> Image </h4> 
        <img class = "pic" src="assets/logo.jpg" >  
        </div>

        <div class = "column2" >
        <h4> Video </h4>
        <video class = "vid" controls>
            <source src = "assets/video.mp4" type = "video/mp4" >
        </div>
    </div>
    
    <!-- Box's footer -->
    <div class = "footer" role = "contentinfo" >
        <div class = "social-wrapper" >
            <ul>
                <li>
                    <a href = "https://www.facebook.com/lp.nur.3" class = "fb-1" target = "_blank" >
                        <img src = "assets/fb.png" >
                    </a>
                </li>

                <li> 
                    <a href = "https://twitter.com/LPtesting1"  class = "twt-1" target = "-blank" >
                        <img src = "assets/twt.png"  >
                    </a>
                </li> 

                <li> 
                    <a href = "https://www.instagram.com/nurlptest/?hl=en" class = "ig-1" target = "-blank" >
                        <img src = "assets/ig.png" >
                    </a>
                </li> 

                <li> 
                    <a href = "https://www.pinterest.com/NurLPtest/_saved/" class = "pin-1" target = "-blank" >
                        <img src = "assets/pinterest.png" >
                    </a>
                </li> 

                <li> 
                    <a href = "https://www.tiktok.com/en" class = "tik-1" target = "-blank" >
                        <img src = "assets/tiktok.png" >
                    </a>
                </li> 

                <li> 
                    <a href = "https://www.youtube.com/" class = "yt-1" target = "-blank" >
                        <img src = "assets/yt.png" >
                    </a>
                </li> 

            </ul>
        </div>
    
        <div class = "footer-nav" role = "navigation" >
            <p> Copyright &copy; <?php echo date ("Y"); ?> Learning Port. All rights reserved. </p>
        </div>
    </div>

</body>

</html>
