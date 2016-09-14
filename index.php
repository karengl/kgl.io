<!DOCTYPE html>
<html>
    <head>
        <title>kgl</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="site.css" type="text/css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" type="text/css"
          rel="stylesheet">
        <script type="text/javascript">
            var first = "kglee"
            var last = "ucsc.edu"
        </script>
    </head>

    <body>
        <?php $page = 'one'; include('navigation.php'); ?>

        <div class="bgimg-1">
            <div class="display-middle" style="white-space:nowrap;">
                <span class="header02">KGL</span>
            </div>
        </div>

        <!-- About -->
        <div class="content" id="about">
            <h3 class="center">ABOUT</h3>
            <p>Student majoring in Computer Science. Hobbies include: drawing,
               3D modeling, crocheting, and playing video games</p>
        </div>

        <div class="bgimg-2">
            <div class="display-middle">
                <span class="header">PORTFOLIO</span>
            </div>
        </div>

        <div id="wrap">
        <!-- Portfolio -->
        <div class="content" id="portfolio">
            <h3 class="center">MY WORK</h3>
            <div class="row-padding">
                <div class="img-container c4">
                    <img src="img/3Dcup.jpg" style="width:100%"
                      class="hover-opacity" alt="">
                </div>
                <div class="img-container c4">
                    <img src="img/3Dcloth.jpg" style="width:100%"
                      class="hover-opacity" alt="">
                </div>
                <div class="img-container c4">
                    <img src="img/small_3Dwater.jpg" style="width:100%"
                      class="hover-opacity" alt="">
                </div>
                <div class="img-container c4">
                    <img src="img/small_3Dshroomcave.jpg" style="width:100%"
                      class="hover-opacity" alt="">
                </div>
                <div class="img-container c4">
                    <img src="img/sanjnchop.jpg" style="width:100%"
                      class="hover-opacity" alt="">
                </div>
            </div>

            <div id="modal01" class="modal">
                <span id="close" class="closebtn">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
                <span id="previous" class="previousbtn">&#10094;</span>
                <span id="next" class="nextbtn">&#10095;</span>
            </div>
        </div>

        <div class="bgimg-3" style="position:relative;">
            <div class="display-middle">
                <span class="header">CONTACT</span>
            </div>
        </div>

        <!-- Contact -->
        <div class="content">
            <p class="center">Email:
            <script type="text/javascript">
                document.write('<a href="mailto:'+first + '@' + last + '">'
                                + first + '@' + last+'<\/a>');
            </script>
            </p>

            <p class="center">
            <a href="https://www.linkedin.com/in/karen-lee-a2a02311b"
               class="icon-button linkedin"><i class="icon-linkedin
                fa fa-linkedin"></i><span></span></a>
            <a href="https://www.github.com/karengl/kgl.io" class="icon-button
              github"><i class="icon-github fa fa-github"></i><span></span></a>
            <a href="http://altkglee.tumblr.com/" class="icon-button tumblr">
              <i class="icon-tumblr fa fa-tumblr"></i><span></span></a>
            </p>
        </div>

        <footer>
        <p>&copy; <script>document.write(new Date().getFullYear())</script></p>
        </footer>
        </div>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
