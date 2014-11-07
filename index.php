<?php
/*
 * index.php -- homepage assembled through php
 *
 * Copyright (C) 2014 akaProxy
 *                    Author: Erik Nygren <erik@nygrens.eu>
 *                            John Daniel Bossér <daniel@bosser.com>
 *
 * This file may be used under the terms of the MIT Licence
 * which can be found in the project root
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hem | Blackebergs elevkår</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php require('imports/menu.php'); ?>
    <div id="container">
        <header id="slide">
        </header>
        <div id="content">
            <main>
                <div id="heading" class="card">
                    <h2>Nyheter!</h2>
                </div>
                <div class="card post before-voting">
                    <div class="container">
                        <span class="info">
                            <span class="img-container"><img src="http://lorempixel.com/400/400/people/"/></span>
                            <h2>Lorem ipsum</h2>
                            <p>
                                <span rel="author">Name Surename</span>
                                <span>2014-09-03 15:27</span>
                            </p>
                        </span>
                        <summary>Lorem ipsum dolor sit amet, in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</summary>
                    </div>
                </div>
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
            </main>
        </div>
        
        <?php require('imports/footer.php'); ?>
    </div>
</body>
</html>