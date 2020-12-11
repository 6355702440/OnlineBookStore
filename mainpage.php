<?php
    include 'connection.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many E-Books</title>
    <link rel="icon" href="images/icons/logos.png" type="image/png"/> 

    
    <!-- Icon link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font Links -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Lora&display=swap" rel="stylesheet">

    <!-- Css Links -->
    <link href='styling/page_content.css' type='text/css' rel='stylesheet'/>
    <link href='styling/media-queries/media_download2.css' type='text/css' rel='stylesheet'/>
    <!-- <link href='styling/media_queries/media_page_content.css' type='text/css' rel='stylesheet'/> -->


    <style>
        .navimage{
            margin-top: 0;
        }
        @media(max-width: 600px){
            html, body{
                width: 100%;
                margin:0;
                padding: 0;
                /* overflow-x: hidden;  */
            }
            *{
                box-sizing: border-box;
            }
            .side-nav{
                display: none;
            }

            
            /* Navigation Image */
            .navimage{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                background-image: url('images/background/navimage.PNG');;
                background-position: center;
                background-repeat: no-repeat;
                margin: 0;
            }
            
            /* Page Content CSS */
            .division{
                display: grid;
                grid-template-columns: 1fr;
            }
            .contain{
                width: 100%;
                padding-left: 0;
            }
            .image{
                margin-bottom: 10rem;
                
            }
            .heading{
                text-align: center;
                margin: 0px;
                padding: 0;
            }

            .row{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .hello{
                display: none;
            }

            .discover:focus .hello{
                display: block;
            }

           
        }

    


    </style>
</head>

<body>     
    
    <!-- Navigation Bar -->
    <?php require 'navigation.php'?>
   


   
    <div class="navimage"><span>Lots of e-books 100% Free</span></div>
    
    <!-- <div class="hello">Hello</div> -->

    <!-- Side Bar -->
    <div class="col-md-2 bg-dark side-nav">
        <?php require 'side-bar.php'?>
    </div>
    
  

    <!-- Page Content -->
    <div class="col-md-10 division" id="defaultcontent">

        <!-- Give Alert Message -->
        <div id="alertContent"></div>
        <h1 class="heading">Most Popular Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4" id="mostpop1" >
                    <img src="Books Image/bio3.jpg" class=" center">
                    <div class='img-text text-center'><a href="download.php#moonsplit">BUY NOW</a></div>
                </div>
                <div class="image col-md-4" id="mostpop2">
                    <img src="Books Image/growth3.jpg" class="img-rounded">
                    <div class='img-text text-center'><a href="download.php#badass">BUY NOW</a></div>
                </div>
                <div class="image col-md-4" id="mostpop3" >
                    <img src="Books Image/growth4.jpg">
                    <div class='img-text text-center'><a href="download.php#rules">BUY NOW</a></div>
                </div>                
            </div>
            <div class="row " id="rows">
                <div class="image col-md-4" >
                    <img src="Books Image/ficlit1.jpg">
                    <div class='img-text text-center'><a href="download.php#wingsoffire">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Fiction and Literature -->
    <div class="col-md-10 division " id="Ficandlitcontent">
        <div>
            <h1 class="heading">Fiction And Literature</h1>
            <div class="contain">                     
                <div class="row" id="rows">
                    <div class="image col-md-4" id="fictlit1" >
                        <img src="Books Image/ficlit1.jpg" class="img-rounded">
                        <div class="img-text text-center"><a href="download.php#wingsoffire">BUY NOW</a></div>
                    </div>
                    <div class="image col-md-4" id="fictlit2">
                        <img src="Books Image/ficlit2.jpg" class="img-rounded">
                        <div class="img-text text-center"><a href="download.php#monksoldferrari">BUY NOW</a></div>
                    </div>
                    <div class="image col-md-4" id="fictlit3">
                        <img src="Books Image/ficlit3.jpg">
                        <div class="img-text text-center"><a href="download.php#3muskeeters">BUY NOW</a></div>
                    </div>
                    
                </div>
                <div class="row" id="rows">
                    <div class="image col-md-4" >
                        <img src="Books Image/ficlit4.jpg">
                        <div class="img-text text-center"><a href="download.php#williamshakes">BUY NOW</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Science and Research -->
    <div class="col-md-10  division" id="sciandrescontent">
    
        <h1 class="heading">Science And Research</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/scires1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#genphy">BUY NOW</a></div>
                </div>
                <div class="image col-md-4">
                    <img src="Books Image/scires2.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#ste">BUY NOW</a></div>
                </div>
                <div class="image col-md-4" >
                    <img src="Books Image/scires3.jpg">
                    <div class="img-text text-center"><a href="download.php#braidsweet">BUY NOW</a></div>
                </div>
            </div>

            <div class="row" id="rows">
                <div class="image  col-md-4" >
                    <img src="Books Image/scires4.jpg">
                    <div class="img-text text-center"><a href="download.php#puremaths">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Technology -->
    <div class="col-md-10  division" id="techcontent">
    
        <h1 class="heading">Technology</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/tech1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#codeinter" >BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Biography -->
    <div class="col-md-10  division" id="biocontent">
    
        <h1 class="heading">Biography Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/bio1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#justmercy">BUY NOW</a></div>
                </div>
                <div class="image col-md-4">
                    <img src="Books Image/bio2.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#obamabio">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Lifestyle -->
    <div class="col-md-10  division" id="lifecontent">
        <h1 class="heading">Lifestyle Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/life1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#climatechange">BUY NOW</a></div>
                </div>
                
                <div class="image col-md-4" >
                    <img src="Books Image/life3.jpg">
                    <div class="img-text text-center"><a href="download.php#nutrition">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Personal Growth -->
    <div class="col-md-10  division" id="prsnlgrowthcontent">
        <h1 class="heading">Personal Growth Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/growth1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#Psychology">BUY NOW</a></div>
                </div>
                
                <div class="image col-md-4" >
                    <img src="Books Image/growth2.jpg">
                    <div class="img-text text-center"><a href="download.php#mirclemrng">BUY NOW</a></div>
                </div>

                <div class="image col-md-4" >
                    <img src="Books Image/growth3.jpg">
                    <div class="img-text text-center"><a href="download.php#badass">BUY NOW</a></div>
                </div>
            </div>
            <div class="row"  id="rows">
                <div class="image col-md-4" >
                    <img src="Books Image/growth4.jpg">
                    <div class="img-text text-center"><a href="download.php#rules">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Business -->
    <div class="col-md-10  division" id="businesscontent">
        <h1 class="heading">Business Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                    <h4>No books found for this category<h4>
                <!-- <div class="image col-md-4">
                    <img src="Books Image/rel1.jpg" class="img-rounded">
                    <div class="img-text text-center">BUY NOW</div>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Religion -->
    <div class="col-md-10  division" id="relcontent">
        <h1 class="heading">Religion Books</h1>
        <div class="contain">                     
            <div class="row" id="rows">
                <div class="image col-md-4">
                    <img src="Books Image/rel1.jpg" class="img-rounded">
                    <div class="img-text text-center"><a href="download.php#secretwisdom">BUY NOW</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/mainpage7.js"></script>
    <style>
        @media(max-width:600px){
            .col-md-10{
                width: 100%;
            }
            #rows{
                margin: 0;
            }
        }
    
    </style>
    
</body>
</html>
