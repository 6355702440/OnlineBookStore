<?php
    include 'connection.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Book</title>
    <link rel="icon" href="images/icons/logos.png" type="image/png"/> 

    <!-- Bootstrat Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font Links -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">

    <!-- Css Links -->
    <link href='styling/download_page1.css' type='text/css' rel='stylesheet'/>
    <link href='styling/media-queries/media_download2.css' type='text/css' rel='stylesheet'/>
    <link href='styling/common1.css' type='text/css' rel='stylesheet'/>
    
    <style>
        @media(max-width: 600px){
            .container{
                margin: 2rem;
                padding: 0;
            }
            .dimg{
                margin: auto;
            }
            .pub_page{
                margin: auto;
            }
            .bookheading{
                text-align: left;
            }
            .author{
                margin-left: 2rem;
            }
        }
    </style>
</head>
<body>
   
    <?php
        require 'navigation.php';
    ?>

    <!-- Most Popular Books -->
    <!-- When the moon split -->
    <div class="container hide" id="moonsplit">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/bio3.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2011</p>
                    <p class="bookinfo" id="pages">PAGES: 320</p>
                </div>  
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">When the Moon Split: A biography of Prophet Muhammad</h1>
                <p class="author" >by <span> Safiur Rahman Mubarakpuri (Author)<span></p>
                <div class='block-content'>
                    The biography of the Prophet is a very noble and exalted subject by which Muslims learn about the rise of Islam, and how the Prophet Muhammad (S) was chosen by Allah to receive the divine revelation. You also learn about the hardships the Prophet and his Companions faced, and how they eventually succeeded with Allah's help. So, it is necessary to study the Prophet's life and follow it in all manners. We hope this study will help you to get the better understanding of the religion. In this sense, this is one of the best books which are meant to be read and read again.
                </div>      
                <!-- <a href="Books pdf/When the Moon Split- A biography of Prophet Muhammad.pdf"></a> -->
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href='registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/10ALnRlLYci_hV5TVm-Y0w9mR8ULYhgIh/preview '">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>
    
    <!-- You are a Badass -->
    <div class="container hide" id="badass" >
        <div class="row">
            <div class="col-sm-3  imgcontent">
               
                <img src="Books Image/growth3.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2013</p>
                    <p class="bookinfo" id="pages">PAGES: 689</p>
                </div>
                   
               
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">You Are a Badass: How to Stop Doubting Your Greatness and Start Living an Awesome Life</h1>
                <p class="author" >by Jen Sincero (Author)</p>
                <div class='block-content'>
                    In this refreshingly entertaining how-to guide, bestselling author and world-traveling success coach, Jen Sincero, serves up 27 bitesized chapters full of hilariously inspiring stories, sage advice, easy exercises, and the occasional swear word, helping you to: Identify and change the self-sabotaging beliefs and behaviors that stop you from getting what you want, Create a life you totally love. And create it NOW, Make some damn money already. The kind you've never made before.
                    By the end of You Are a Badass, you'll understand why you are how you are, how to love what you can't change, how to change what you don't love, and how to use The Force to kick some serious ass.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href='https://drive.google.com/file/d/1wBfRtYv5Qi2UzkXDRwAhAaJiXSkdEWej/preview'">Free Download</button>
                        <?php    
                    }
                ?>
                
            </div>
        </div>
    </div>

    <!-- 5 Seconds Rule -->
    <div class="container hide" id="rules">
        <div class="row">
            <div class="col-sm-3  imgcontent">
               
                <img src="Books Image/growth4.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2017</p>
                    <p class="bookinfo" id="pages">PAGES: 252</p>
                </div>
                   
               
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">The 5 Second Rule: Transform your Life, Work, and Confidence with Everyday Courage</h1>
                <p class="author" >by Mel Robbins (Author)</p>
                <div class='block-content'>
                    Throughout your life, you've had parents, coaches, teachers, friends and mentors who have pushed you to be better than your excuses and bigger than your fears.  What if the secret to having the confidence and courage to enrich your life and work is simply knowing how to push yourself? 
                    Using the science of habits, riveting stories and surprising facts from some of the most famous moments in history, art and business, Mel Robbins will explain the power of a “push moment”. 
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1tT4RNnUlUUpldOU4uOAfnZTlWgGVMABe/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Wings of Fire -->
    <div class="container hide" id="wingsoffire">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/ficlit1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2012</p>
                    <p class="bookinfo" id="pages">PAGES: 141</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Wings of fire</h1>
                <p class="author" >by Arun Tiwari (Author)</p>
                <div class='block-content'>
                    About the Author Dr APJ Abdul Kalam from 2002 to 2007 served as the 11th President of India. Greatly admired all over India, he was a scientist by profession, who played a leading role in developing the country's missile program. From humble roots in Rameswaram, Tamil Nadu, Dr Kalam in an inspirational autobiography 'The Wings of Fire' traces the rise and the mark he made in life. Mr. Arun Tiwari, a scientist, was a colleague of Dr Kalam.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>;
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1XHMUAIuPFVFxDAZhLA3mocYIkVy_6IRT/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Fiction and Literature -->

    <!-- Wings of Fire  -->
    
    <!-- Monk who sold his Ferrari -->
    <div class="container hide" id="monksoldferrari">
        <div class="row">
            <div class="col-sm-3 imgcontent">
                <img src="Books Image/ficlit2.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2005</p>
                    <p class="bookinfo" id="pages">PAGES: 208</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">The Monk who sold his Ferrari</h1>
                <p class="author" >by Robin S. Sharma (Author)</p>
                <div class='block-content'>
                    "The Monk Who Sold His Ferrari is a treasure — an elegant and
                    powerful formula for true success and happiness. Robin S. Sharma has
                    captured the wisdom of the ages and made it relevant for these turbulent
                    times. I couldn't put it down.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1GYZ3cHkrd_RZm1I3zWPFLOGqRuuG5DSZ/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- The Three Muskeeters -->
    <div class="container hide" id="3muskeeters">
        <div class="row">
            <div class="col-sm-3 imgcontent">
                <img src="Books Image/ficlit3.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 1998</p>
                    <p class="bookinfo" id="pages">PAGES: 762</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">The Three Musketeers</h1>
                <p class="author" >Alexandre Dumas, Pere (Author)</p>
                <div class='block-content'>
                   
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>;
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1BvOVQ6oCYf7-kL9ZU_sJPg1g0jQ7qtfR/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- William Shakespeare -->
    <div class="container hide" id="williamshakes">
        <div class="row">
            <div class="col-sm-3 imgcontent">
                <img src="Books Image/ficlit4.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2012</p>
                    <p class="bookinfo" id="pages">PAGES: 458</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Classic Poetry Series</h1>
                <p class="author" >William Shakespeare (Author)</p>
                <div class='block-content'>
                    an English poet and playwright, widely regarded as the greatest writer in the
                    English language and the world's pre-eminent dramatist. He is often called
                    England's national poet and the "Bard of Avon". His surviving works, including
                    some collaborations, consist of about 38 plays, 154 sonnets, two long narrative
                    poems, and several other poems. His plays have been translated into every
                    major living language and are performed more often than those of any other
                    playwright.

                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>;
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1w0LFJyoNNcBpbBGWMJOUh3MUCkTFAPzw/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- SCIENCE AND RESEARCH SECTION -->
    <!-- Problems in General Physics -->
    <div class="container hide" id="genphy">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/scires1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2011</p>
                    <p class="bookinfo" id="pages">PAGES: 402</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Irodov – Problems in General Physics</h1>
                <p class="author" >by IE Irodov (Author)</p>
                <div class='block-content'>
                    Problems in General Physics by IE Irodov was published by MIR publishers (Russia) in 1981. The book contains 1878 problems, their answers and hints to difficult ones. These problems are divided into six chapters - mechanics, thermodynamics, electrodynamics, waves, optics, and atomic and nuclear physics. Each chapter starts with a summary of relevant formulas. The problems are challenging, many of them require a good understanding of physics concepts and mathematical skills.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1XGCjhRJu_AOHAkcGC6IGWCYIe2Qhq9kM/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Space Time and Einstein -->
    <div class="container hide" id="ste">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/scires2.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2003</p>
                    <p class="bookinfo" id="pages">PAGES: 255</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Space, Time and Einstein</h1>
                <p class="author" >by J.B. Kennedy (Author)</p>
                <div class='block-content'>
                    The book introduces Einstein's revolutionary ideas in a clear and simple way, along with the concepts and arguments of philosophers, both ancient and modern that have proved of lasting value. he problems at the heart of the philosophy of space and time, such as change, motion, infinity, shape, and inflation, are examined and the seismic impact made by relativity theory and quantum theory is assessed in the light of the latest research.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/16RGOl23TvtI4HoR7uxg5yzeL29kb1PMX/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Braiding Sweetgrass -->
    <div class="container hide" id="braidsweet">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/scires3.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2013</p>
                    <p class="bookinfo" id="pages">PAGES: 473</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants</h1>
                <p class="author" >by Robin Wall Kimmerer (Author)</p>
                <div class='block-content'>
                    Braiding Sweetgrass is poised to be a classic of nature writing. As a botanist, Robin Wall Kimmerer asks questions of nature with the tools of science. As a member of the Citizen Potawatomi Nation, she embraces indigenous teachings that consider plants and animals to be our oldest teachers. Kimmerer brings these two lenses of knowledge together to take "us on a journey that is every bit as mythic as it is scientific, as sacred as it is historical, as clever as it is wise" (Elizabeth Gilbert). Drawing on her life as an indigenous scientist, a mother, and a woman, Kimmerer shows how other living beings offer us gifts and lessons, even if we've forgotten how to hear their voices.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1FCTQHm9j-kBdGg6cyQPOTnT9e95rbNx7/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Pure Mathematics -->
    <div class="container hide" id="puremaths">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/scires4.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2012</p>
                    <p class="bookinfo" id="pages">PAGES: 322</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Braiding Sweetgrass: Indigenous Wisdom, Scientific Knowledge and the Teachings of Plants</h1>
                <p class="author" >by Robin Porkess (Author)</p>
                <div class='block-content'>
                    This brand new series has been written for the University of Cambridge International Examinations course for AS and A Level Mathematics (9709). This title covers the requirements of P1.

                    The authors are experienced examiners and teachers who have written extensively at this level, so have ensured all mathematical concepts are explained using language and terminology that is appropriate for students across the world.

                    Students are provded with clear and detailed worked examples and questions from Cambridge International past papers, so they have the opportunity for plenty of essential exam practice.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1N_tm5cL9o41eOgTqEriAt4HqmXRtj4oy/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- TECHNOLOGY SECTION -->
    <!-- Coding Interview -->
    <div class="container hide" id="codeinter">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/tech1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2008</p>
                    <p class="bookinfo" id="pages">PAGES: 310</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Cracking the Coding Interview: 150 Programming Interview Questions and Solutions</h1>
                <p class="author" >by Gayle Laakmann (Author)</p>
                <div class='block-content'>
                    Now in the 4th edition, Cracking the Coding Interview gives you the interview preparation you need to get the top software developer jobs. This book provides:* 150 Programming Interview Questions and Solutions: From binary trees to binary search, this list of 150 questions includes the most common and most useful questions in data structures, algorithms, and knowledge based questions.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1qTu2otV883Z_yCUmbOkbXOh7242e2klK/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>


    <!-- Biography Section -->
    <!-- Just Mercy -->
    <div class="container hide" id="justmercy">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/bio1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2015</p>
                    <p class="bookinfo" id="pages">PAGES: 222</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Just Mercy: A Story of Justice and Redemption </h1>
                <p class="author" >by Bryan Stevenson (Author)</p>
                <div class='block-content'>
                    NEW YORK TIMES BESTSELLER • NOW A MAJOR MOTION PICTURE STARRING MICHAEL B. JORDAN AND JAMIE FOXX • A powerful true story about the potential for mercy to redeem us, and a clarion call to fix our broken system of justice—from one of the most brilliant and influential lawyers of our time.
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1OAqmteu7L4WGiUQe1xfn0iyArRpA6pdp/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Barack H. Obama -->
    <div class="container hide" id="obamabio">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/bio2.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2008</p>
                    <p class="bookinfo" id="pages">PAGES: 440</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">BARACK H. OBAMA: THE UNAUTHORIZED BIOGRAPHY </h1>
                <p class="author" >by Webster Griffin Tarpley (Author)</p>
                <div class='block-content'>
                    
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1lPsMPlmFn-BO9qMboC73dmqIEmz1zN82/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>


    <!-- Lifestyle -->
    <!-- 1) Climate Change and Migration -->
    <div class="container hide" id="climatechange">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/life1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2014</p>
                    <p class="bookinfo" id="pages">PAGES: 287</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Climate Change and Migration</h1>
                <p class="author" >by World Bank Group</p>
                <div class='block-content'>
                    
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1S48TQ9WLHI_kAKjgX-0elBBSgQAq8AzN/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- 2) The Complete Home Guide to Herbs, Natural Healing, and Nutrition -->
    <div class="container hide" id="nutrition">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/life3.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2010</p>
                    <p class="bookinfo" id="pages">PAGES: 317</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">The Complete Home Guide to Herbs, Natural Healing, and Nutrition</h1>
                <p class="author" >by Jill Rosemary Davies (Author)</p>
                <div class='block-content'>
                
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1yjmJYCqw9HFIyySdRR7vn2x4VrCF-j6i/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>


    <!-- Personal Growth -->
    <!-- 1) Psychology A Self-Teaching Guide -->
    <div class="container hide" id="Psychology">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/growth1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2002</p>
                    <p class="bookinfo" id="pages">PAGES: 289</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Psychology A Self-Teaching Guide</h1>
                <p class="author" >by Frank J. Bruno (Author)</p>
                <div class='block-content'>
                
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1le6JRU749XFlBQas531aa7AQwmgBM1q_/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- 2) Miracle Morning -->
    <div class="container hide" id="mirclemrng">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/growth2.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2002</p>
                    <p class="bookinfo" id="pages">PAGES: 289</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">Miracle Morning</h1>
                <p class="author" >by Hal Elrod (Author)</p>
                <div class='block-content'>
                    "Hal Elrod is a genius and his book The Miracle Morning has been magical in my life. What Hal has done is taken the best practices, developed over centuries of human consciousness development, and condensed the 'best of the best' into a daily morning ritual. A ritual that is now part of my day."
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1M4wQpuy8bNusdPkDTRFdkF3HjF6ha2KN/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>
    
    <!-- 3) You are a Badass -->

    <!-- 4) 5 Second Rules -->
    

    <!-- Religion -->
    <!-- 1) The Book of Secret Wisdom  -->
    <div class="container hide" id="secretwisdom">
        <div class="row">
            <div class="col-sm-3  imgcontent">
                <img src="Books Image/rel1.jpg" class="dimg">
                <div class="pub_page">
                    <p class="bookinfo" id="publisher"> PUBLISHED: 2017</p>
                    <p class="bookinfo" id="pages">PAGES: 35</p>
                </div>                 
            </div>
            <div class="col-md-9 desc">
                <h1 class="bookheading">The Book of Secret Wisdom - The Prophetic Record of Human Destiny and Evolution</h1>
                <p class="author" >by Zinovia Dushkova (Author)</p>
                <div class='block-content'>
                    
                </div>
                <?php
                    if(!isset($_SESSION['user_id'])){
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'registration/signin-form.php' ">Free Download</button>
                        <?php
                    }
                    else{
                        ?>
                        <button class="btn-download" onclick="window.location.href = 'https://drive.google.com/file/d/1aRQEw3eAsJvISoihf_wLj5eXrBlg-l8x/preview' ">Free Download</button>
                        <?php    
                    }
                ?>
            </div>
        </div>
    </div>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='js/download10.js' >
    //     $(document).ready(function(){
    //         $('.container').hide();
    //         var pathArray = window.location.href.split('#');
    //         console.log(pathArray[1]);

    //         // Show Popular Books
    //         if(pathArray[1] === "moonsplit"){
    //             $('#moonsplit').addClass("show");
    //             $('#moonsplit').show();
            
    //         }

    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#badass"){
    //             $('#badass').addClass("show");
            
    //         }

    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#rules"){
    //             $('#rules').addClass("show");
    //         }

    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#wingsoffire"){
    //             $('#wingsoffire').addClass("show");
    //         }


    //         // Show Fiction and Literature
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#wingsoffire"){
    //             $('#wingsoffire').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#monksoldferrari"){
    //             $('#monksoldferrari').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#3muskeeters"){
    //             $('#3muskeeters').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#williamshakes"){
    //             $('#williamshakes').addClass("show");
    //         }


    //         // Show Space time and Einstein Books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#genphy"){
    //             $('#genphy').addClass("show");
            
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#ste"){
    //             $('#ste').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#braidsweet"){
    //             $('#braidsweet').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#puremaths"){
    //             $('#puremaths').addClass("show");
    //         }


    //         // Show Technology Books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#codeinter"){
    //             $('#codeinter').addClass("show");
    //         }

    //         // Show Biography Books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#justmercy"){
    //             $('#justmercy').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#obamabio"){
    //             $('#obamabio').addClass("show");
    //         }

    //         // Lifestyle
    //         // Show Biography Books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#climatechange"){
    //             $('#climatechange').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#nutrition"){
    //             $('#nutrition').addClass("show");
    //         }

    //         // Personal Growth Books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#Psychology"){
    //             $('#Psychology').addClass("show");
    //         }
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#mirclemrng"){
    //             $('#mirclemrng').addClass("show");
    //         }

    //         // Religion books
    //         if(window.location.href === "http://localhost/PHP/Projects/OnlineBookStore/download.php#secretwisdom"){
    //             $('#secretwisdom').addClass("show");
    //         }
    //     });
    // </script>

    // <script>
    //     $(document).ready(function(){
    //         $('.overlay').hide();
    //         $(".btn-download").hover(function(){
    //             $('.overlay').show();
    //             $(".overlay").animate({
    //                 right:200,
    //                 // background-color: blue,
    //                 opacity:"show"
    //             }, 1500);
    //         });
    //     });
    </script>

    <style>
        .discover{
            visibility: hidden;
        }
    </style>
   
</body>
</html>