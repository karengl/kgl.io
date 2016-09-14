<html>
    <head>
        <title>kgl</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="site.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
        <?php $page = 'two'; include('navigation.php'); ?>

        <div id="wrap">
        <div id="main">
        <h1><strong>Portfolio</strong></h1>

        <ul id="filters">
            <li><span class="filter active" data-filter=".code, .2D, .3D,
              .crochet">All</span></li>
            <li><span class="filter" data-filter=".code">Code</span></li>
            <li><span class="filter" data-filter=".2D">2D</span></li>
            <li><span class="filter" data-filter=".3D">3D</span></li>
            <li><span class="filter" data-filter=".crochet">Crochet</span></li>
        </ul>
        <br>

        <div id="portfoliolist">
            <div class="portfolio code" data-cat="code">
                <h2>Code</h2>
                <div>
                    <span class="droptext">Spellcheck</span>
                    <div class="dropdetail">
                    <a href="https://gist.github.com/karengl/f94092127feffd8b7a56a35edc20e6e0">View on Github</a>
                    </div>
                </div>
                <div>
                    <span class="droptext">Roots</span>
                    <div class="dropdetail">
                    <p>A Java program for class that finds the real roots of a
                       polynomial function within a specified range. The code does
                       not check input.</p>
                    <a href="https://github.com/karengl/kgl.io/tree/master/Roots">
                      View on Github</a>
                    </div>
                </div>
            </div>

            <div class="portfolio 2D" data-cat="2D">
                <h2>2D</h2>
                <p>
                <div class="row-padding">
                    <div class="img-container crop">
                        <img src="img/sanjnchop.jpg" style="width:100%"
                          class="hover-opacity" alt="One Piece - Sanji and Chopper">
                    </div>
                </div>
            </div>

            <div class="portfolio 3D" data-cat="3D">
                <h2>3D</h2>
                <p>
                <div class="row-padding">
                    <div class="img-container">
                        <img src="img/3Dcup.jpg" style="width:100%"
                          class="hover-opacity" alt="Cup">
                    </div>
                    <div class="img-container">
                        <img src="img/3Dcloth.jpg" style="width:100%"
                          class="hover-opacity" alt="Cloth">
                    </div>
                    <div class="img-container">
                        <img src="img/small_3Dwater.jpg" style="width:100%"
                          class="hover-opacity" alt="">
                    </div>
                    <div class="img-container">
                        <img src="img/small_3Dshroomcave.jpg" style="width:100%"
                          class="hover-opacity" alt="">
                    </div>
                </div></p>
            </div>

            <div class="portfolio crochet" data-cat="crochet">
                <h2>Crochet</h2>
                <p>
                <div class="row-padding">
                    <div class="img-container">
                        <img src="img/turtle01.jpg" style="width:100%"
                          class="hover-opacity" alt="Turtle">
                    </div>
                </div></p>
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
        <footer>
            <p class="center">
            <a href="https://www.linkedin.com/in/karen-lee-a2a02311b"
               class="icon-button linkedin"><i class="icon-linkedin
                fa fa-linkedin"></i><span></span></a>
            <a href="https://www.github.com/karengl/kgl.io" class="icon-button
              github"><i class="icon-github fa fa-github"></i><span></span></a>
            <a href="http://altkglee.tumblr.com/" class="icon-button tumblr">
              <i class="icon-tumblr fa fa-tumblr"></i><span></span></a>
            </p>

            <div style="clear:both;">
            <span>&copy; <script>document.write(new Date().getFullYear())
            </script></span>
            </div>
        </footer>
        </div>

        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="jquery.mixitup.min.js"></script>
        
    </body>
</html>
