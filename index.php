<!--
index.php -- homepage assembled through php
Copyright (C) 2014 akaProxy
                   Author: Erik Nygren <erik@nygrens.eu>
                           John Daniel Bossér <daniel@bosser.com>
This file may be used under the terms of the MIT Licence
which can be found in the project root
-->
<!DOCTYPE html>
<html>
<head>
    <title>Hem | Blackebergs elevkår</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--script src="res/GASP/minified/TweenMax.min.js"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="js/slide.js"></script>
</head>
<body>
<!--
       _            ___                  
  __ _| |____ _    | _ \_ _ _____ ___  _ 
 / _` | / / _` |_  |  _/ '_/ _ \ \ / || |
 \__,_|_\_\__,_(_) |_| |_| \___/_\_\\_, |
                                    |__/ 
Det ser ut som Du är en sån som gillar titta under huven, så du är nog en av oss. 
Joina blackans programmeringsförening idag!
-->

    <?php require('imports/menu.php'); ?>
    <div id="container">
        <header id="slide">
            <div id="slider-info">
                <!--span class="left"></span-->
                <span class="texts">
                    <div class="info-box vissible">
                        <h2>INSPARK!</h2>
                        <p>1. Låt oss börja ett nytt awesome år på vår awsome skola vars elevkår jobbar på en awesome hemsida. Vi säljer biljätter i ljushallen. Kom och köp!</p>
                    </div>
                    <div class="info-box">
                        <h2>INSPARK!</h2>
                        <p>2. Låt oss börja ett nytt awesome år på vår awsome skola vars elevkår jobbar på en awesome hemsida. Vi säljer biljätter i ljushallen. Kom och köp!</p>
                    </div>
                    <div class="info-box">
                        <h2>INSPARK!</h2>
                        <p>3. Låt oss börja ett nytt awesome år på vår awsome skola vars elevkår jobbar på en awesome hemsida. Vi säljer biljätter i ljushallen. Kom och köp!</p>
                    </div>
                </span>
                <!--span class="right"></span-->
            </div>
            <div id="slider-images">
                <img class="relative active" alt="" src="http://lorempixel.com/1500/800/" width="1500" height="800">
                <img alt="" src="http://lorempixel.com/1501/400/" width="1501" height="400">
                <img alt="" src="http://lorempixel.com/1502/800/" width="1502" height="800">
            </div>
        </header>
        <div id="content">
            <main>
                <div id="heading" class="card">
                    <h1>Nyheter!</h1>
                </div>
                <div class="card post before-voting">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/400/400/people/"/></span>
                            <h2>Dolor sit amet</h2>
                            <p>
                                <span rel="author">Name Surename</span>
                                <span>2014-09-03 15:27</span>
                            </p>
                        </span>
                        <summary>Lorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
                <div id="external">
                    <div class="card">
                        <form class="card voting">
                            <!--h2>FRÅGA:</h2-->
                            <fieldset>
                                <legend>Vad tycker du om höjden på mjölkborden?</legend>
                                <p>Mycket klagomål har framförts kring höjden på matborden, nu vill vi veta vad du tycker!</p>
                                <span class="radio-choice">
                                    <input type="radio" id="radio-btn-1" name="height" value="perfect" checked>
                                      <label for="radio-btn-1">
                                          <div class="r-btn"></div>
                                          Det är bra som det är<br></label>
                                    <input type="radio" id="radio-btn-2" name="height" value="too high">
                                      <label for="radio-btn-2">
                                          <div class="r-btn"></div>
                                          För höga<br></label>
                                    <input type="radio" id="radio-btn-3" name="height" value="too low">
                                      <label for="radio-btn-3">
                                          <div class="r-btn"></div>
                                          För låga</label>
                                </span>
                            </fieldset>
                        </form>
                    </div>
                    <div class="card">
                        <h2 class="food">Matsedel:</h2>
                        <?php require('imports/food.php');?>
                    </div>
                    <div class="card">
                        <?php require('imports/instagram.php'); ?>
                    </div>
                </div>
                <div class="card post">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/399/399/people/"/></span>
                            <h2>Rorem ipsum</h2>
                            <p>
                                <span rel="author">Double-Name Surename</span>
                                <span>2014-09-03 15:28</span>
                            </p>
                        </span>
                        <summary>Rorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
                <div class="card post">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/402/402/people/"/></span>
                            <h2>Lorem ipsum dolor amet</h2>
                            <p>
                                <span rel="author">Longname Longsurename</span>
                                <span>2014-09-03 15:27</span>
                            </p>
                        </span>
                        <summary>Lorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
                <div class="card post">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/401/401/people/"/></span>
                            <h2>Rorem ipsum</h2>
                            <p>
                                <span rel="author">Sh Ort</span>
                                <span>2014-09-03 15:28</span>
                            </p>
                        </span>
                        <summary>Rorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
                <div class="card post">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/400/400/people/"/></span>
                            <h2>Lorem ipsum</h2>
                            <p>
                                <span rel="author">Longname Longsurename</span>
                                <span>2014-09-03 15:27</span>
                            </p>
                        </span>
                        <summary>Lorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
                <div class="card post">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/398/398/people/"/></span>
                            <h2>Helg!</h2>
                            <p>
                                <span rel="author">Sh Ort</span>
                                <span>2014-09-03 15:28</span>
                            </p>
                        </span>
                        <summary>Rorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
            </main>
        </div>
        
        <?php require('imports/footer.php'); ?>
    </div>
</body>
</html>