<?php
// Start the session
session_start();

// Check if the user is authenticated
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Redirect back to the login page
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  
<title>Arowadas Terminal</title>
<meta charset="utf-8"/>
         <style>
              #particles-js {
            position: absolute;
            width: 100%;
            height: 400%;
            background-color: transparent;
            z-index: -1;
          }

          #search-input {
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
    }
    
    #search-button {
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      border-radius: 5px;
      padding: 10px 15px;
      margin-left: 10px;
    }

    #passwordenter{
      padding: 10px;
      font-size: 19px;
      border-radius: 5px;
      border-color: white;
      border-width: 1px;
      background-color: transparent;
      color: white;
    }

    #passwordbutton{
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      border-radius: 5px;
      padding: 10px 15px;
      margin-left: 10px;
    }
    #adminportal, #modportal{
      background-color: rgb(30, 30, 30);
      border-radius: 10px;
      width: 70%;

      display: none;
    }

           
    .adminbutton{
      background-color: #4CAF50;
      border: none;
      color: white;
      font-size: 20px;
      cursor: pointer;
      border-radius: 5px;
      padding: 10px 15px;
      margin-left: 10px;
      margin-bottom: 15px;
    }
    .shutdown{
      background-color: red;
    }
    #incorrectpassword{
      color: rgb(230, 51, 51);
      font-size: 20px;
    }
        /* Default favicon for all screen sizes
          link[rel="icon"] {
          display: none; /* Hide the default favicon
         } */
        
        

        /* Favicon for small screens
        @media (max-width: 767px) {
            link[rel="icon"][type="image/x-icon"] {
                display: inline-block;
            }
        } */

        /* Favicon for medium screens
        @media (min-width: 768px) and (max-width: 1023px) {
            link[rel="icon"][type="image/png"][sizes="32x32"] {
                display: inline-block;
            }
        } */

        /* Favicon for large screens
        @media (min-width: 1024px) {
            link[rel="icon"][type="image/png"][sizes="64x64"] {
                display: inline-block;
            }
        } */
        
    </style>
     <style>
  /* NO VIDEO CONTROLS GETAWAY AD*/
  video::-webkit-media-controls {
    display: none !important;
  }
  video::-webkit-media-controls-enclosure {
    display: none !important;
  }
  video::-webkit-media-controls-panel {
    width: 0px !important;
    height: 0px !important;
    display: none !important;
  }
</style>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="Access to Arowadas Terminal | Website code | Integration projects | Redirection Site" name="description"/>
<meta content="arowadas terminal, arowadas, webcode, integproj, bts" name="keywords"/>
<meta content="Arowadas" name="author"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link rel="icon" type="image/x-icon" href="/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
<link href="/terminal/css/global.css" rel="stylesheet" type="text/css"/>
<link href="/terminal/css/cybriagames.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="/terminal/css/popup.css">



</head>
<body>
     <script src="/terminal/js/header.js"></script>
     <!--<script src="/js/popup.js" defer></script>-->
     <script src="/terminal/js/settings.js" defer></script>
     <script src="/terminal/js/sorting.js" defer></script>>
<main>
     <div id="particles-js"></div>
     <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
   particlesJS('particles-js', {
     particles: {
       number: { value: 80, density: { enable: true, value_area: 800 } },
       color: { value: '#ffffff' },
       shape: { type: 'circle', stroke: { width: 0, color: '#000000' }, polygon: { nb_sides: 5 }, image: { src: 'terminal/img/github.svg', width: 100, height: 100 } },
       opacity: { value: 0.5, random: false, anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false } },
       size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
       line_linked: { enable: true, distance: 150, color: '#ffffff', opacity: 0.4, width: 1 },
       move: { enable: true, speed: 6, direction: 'none', random: false, straight: false, out_mode: 'out', bounce: false, attract: { enable: false, rotateX: 600, rotateY: 1200 } }
     },
     interactivity: {
       detect_on: 'canvas',
       events: { onhover: { enable: true, mode: 'repulse' }, onclick: { enable: true, mode: 'push' }, resize: true },
       modes: { grab: { distance: 400, line_linked: { opacity: 1 } }, bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 }, repulse: { distance: 200, duration: 0.4 }, push: { particles_nb: 4 }, remove: { particles_nb: 2 } }
     },
     retina_detect: true
   });
</script>
<!-- GETAWAY AD -->
<!--<div id="ad-container" style="width: 728px; height: 327.5px;">
  <a id="video-link" href="/terminal/games/getaway-shootout-new">
    <video id="ad-video" width="100%" height="100%" loop muted>
     <source src="/img/vid/opium.mp4" type="video/mp4">
      <source src="/img/vid/drivemad.mp4" type="video/mp4">
     <source src="/img/vid/stickmanhook.mp4" type="video/mp4">
     <source src="/img/vid/fnaf2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </a>
</div>-->

<!--Password Box-->

<div id="mainsect">
<br>
<form id="search-container">
  <div id="logo-title">
    <h1>Arowadas Terminal</h1>
  </div>
  <input id="search-input" placeholder="Search For A Game">
<!--<button id="search-button" onclick="performSearch()">Search</button> -->
</form>
<!--
  <script>
    function addEmojiToSearch() {
      const emoji = '🔰';
      const searchInput = document.getElementById('search-input');
      
      // Copy emoji to clipboard
      navigator.clipboard.writeText(emoji);

      // Focus on search bar and paste emoji
      searchInput.focus();
      document.execCommand('paste');
    }
  </script>
-->
<div id="gamesContainer">
  
<div class="game">
<a href="/terminal/games/2048" onclick="setRedirectFlag()">
<img alt="2048" src="/terminal/img/2048.png"/>
<p class="game-title">2048</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/twitch-tetris" onclick="setRedirectFlag()">
<img alt="twitch-tetris" src="/terminal/img/twitch-tetris.png"/>
<p class="game-title">Twitch Tetris</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/impossible-quiz" onclick="setRedirectFlag()">
<img alt="The Impossible Quiz" src="/terminal/img/the-impossible-quiz.jpg"/>
<p class="game-title">The Impossible Quiz</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/tube-jumpers" onclick="setRedirectFlag()">
<img alt="tube jumpers" src="/terminal/img/tube-jumpers.jpg"/>
<p class="game-title">Tube Jumpers</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/cookie-clicker" onclick="setRedirectFlag()">
<img alt="cookie clicker" src="/terminal/img/cookie-clicker.png"/>
<p class="game-title">Cookie Clicker</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/1" onclick="setRedirectFlag()">
<img alt="1" src="/terminal/img/1.png"/>
<p class="game-title">1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/worldshardestgame2" onclick="setRedirectFlag()">
<img alt="worlds hardest game 2" src="/terminal/img/worlds-hardest-game-2.jpg"/>
<p class="game-title">World's Hardest Game 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/hacker-typer" onclick="setRedirectFlag()">
<img alt="hacker typer" src="/terminal/img/hackertyper.png"/>
<p class="game-title">HackerTyper</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/duck-life-2" onclick="setRedirectFlag()">
<img alt="duck life 2" src="/terminal/img/duck-life-2.jpg"/>
<p class="game-title">Duck Life 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ducklife3" onclick="setRedirectFlag()">
<img alt="duck life 3" src="/terminal/img/duckife3.png"/>
<p class="game-title">Duck Life 3 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ducklife4" onclick="setRedirectFlag()">
<img alt="duck life 4" src="/terminal/img/ducklife4.png"/>
<p class="game-title">Duck Life 4 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ducklife5" onclick="setRedirectFlag()">
<img alt="duck life 5" src="/terminal/img/ducklife5.jpeg"/>
<p class="game-title">Duck Life 5 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ballistic-chickens" onclick="setRedirectFlag()">
<img alt="ballistic chickens" src="/terminal/img/ballistic-chickens.png"/>
<p class="game-title">Ballistic Chickens</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-transfer-2" onclick="setRedirectFlag()">
<img alt="riddle transfer 2" src="/terminal/img/riddle-transfer-2.png"/>
<p class="game-title">Riddle Transfer 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/a-dance-of-fire-and-ice" onclick="setRedirectFlag()">
<img alt="A Dance Of Fire And Ice" src="/terminal/img/a-dance-of-fire-and-ice.png"/>
<p class="game-title">A Dance Of Fire And Ice</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/creative-kill-chamber" onclick="setRedirectFlag()">
<img alt="creative kill chamber" src="/terminal/img/creativekillchamber.jpg"/>
<p class="game-title">Creative Kill Chamber</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/bloxors" onclick="setRedirectFlag()">
<img alt="bloxors" src="/terminal/img/bloxorz.png"/>
<p class="game-title">Bloxors</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/grindcraft" onclick="setRedirectFlag()">
<img alt="grindcraft" src="/terminal/img/grindcraft.png"/>
<p class="game-title">GrindCraft</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/dreader" onclick="setRedirectFlag()">
<img alt="dreader" src="/terminal/img/dreader.webp"/>
<p class="game-title">Dreader</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/hextris" onclick="setRedirectFlag()">
<img alt="hextris" src="/terminal/img/hextris.png"/>
<p class="game-title">Hextris 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/flippy-fish">
<img alt="flippy fish" src="/terminal/img/flippy-fish.png"/>
<p class="game-title">Flippy Fish 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ovo" onclick="setRedirectFlag()">
<img alt="ovo" src="/terminal/img/ovo.jpeg"/>
<p class="game-title">OvO</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ovo-2" onclick="setRedirectFlag()">
<img alt="ovo" src="/terminal/img/ovo-2.png"/>
<p class="game-title">OvO 2</p>
</a>
</div>
  
<div class="game">
<a href="/terminal/games/a-small-world-cup" onclick="setRedirectFlag()">
<img alt="a small world cup" src="/terminal/img/a-small-world-cup.jpeg"/>
<p class="game-title">A Small World Cup</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/slope" onclick="setRedirectFlag()">
<img alt="slope" src="/terminal/img/slope.jpg"/>
<p class="game-title">Slope</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/subway-surfers" onclick="setRedirectFlag()">
<img alt="subway surfers singapore" src="/terminal/img/subway-surfers-singapore.png"/>
<p class="game-title">Subway Surfers Singapore</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/asteroids" onclick="setRedirectFlag()">
<img alt="asteroids" src="/terminal/img/asteroids.jpg"/>
<p class="game-title">Asteroids</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fruit-ninja" onclick="setRedirectFlag()">
<img alt="fruit ninja" src="/terminal/img/fruit-ninja.png"/>
<p class="game-title">Fruit Ninja</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/funnyshooter" onclick="setRedirectFlag()">
<img alt="funny shooter" src="/terminal/img/funnyshooter.jpeg"/>
<p class="game-title">Funny Shooter 🔰</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-school-2" onclick="setRedirectFlag()">
<img alt="riddle school 2" src="/terminal/img/riddle-school-2.png"/>
<p class="game-title">Riddle School 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/toss-the-turtle" onclick="setRedirectFlag()">
<img alt="toss the turtle" src="/terminal/img/tosstheturtle.png"/>
<p class="game-title">Toss The Turtle</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/timeshooter1" onclick="setRedirectFlag()">
<img alt="time shooter 1" src="/terminal/img/timeshooter.jpeg"/>
<p class="game-title">Time Shooter 1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/timeshooter2" onclick="setRedirectFlag()">
<img alt="time shooter 2" src="/terminal/img/timeshooter2.png"/>
<p class="game-title">Time Shooter 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/timeshooter3" onclick="setRedirectFlag()">
<img alt="time shooter 3" src="/terminal/img/timershooter3.jpeg"/>
<p class="game-title">Time Shooter 3</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/unfair-mario" onclick="setRedirectFlag()">
<img alt="unfair mario" src="/terminal/img/unfair-mario.jpg"/>
<p class="game-title">Unfair Mario</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/burrito-bison" onclick="setRedirectFlag()">
<img alt="burrito bison" src="/terminal/img/burrito-bison.png"/>
<p class="game-title">Burrito Bison: Launcha Libre</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-transfer" onclick="setRedirectFlag()">
<img alt="riddle transfer 1" src="/terminal/img/riddle-transfer.png"/>
<p class="game-title">Riddle Transfer 1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/rooftop-snipers" onclick="setRedirectFlag()">
<img alt="rooftop snipers" src="/terminal/img/rooftop-snipers.avif"/>
<p class="game-title">RoofTop Snipers</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/driftboss" onclick="setRedirectFlag()">
<img alt="drift boss" src="/terminal/img/driftboss.png"/>
<p class="game-title">Drift Boss</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/worldshardestgame" onclick="setRedirectFlag()">
<img alt="worlds hardest game" src="/terminal/img/hardestgame.jpg"/>
<p class="game-title">World's Hardest Game</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/chromedino" onclick="setRedirectFlag()">
<img alt="chrome dino" src="/terminal/img/chromedino.jpg"/>
<p class="game-title">Chrome Dino</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/worldshardestgame3" onclick="setRedirectFlag()">
<img alt="worlds hardest game 3" src="/terminal/img/worlds-hardest-game-3.jpg"/>
<p class="game-title">World's Hardest Game 3</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/cat-ninja" onclick="setRedirectFlag()">
<img alt="Cat Ninja" src="/terminal/img/cat-ninja.jpg"/>
<p class="game-title">Cat Ninja</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/csgo-clicker" onclick="setRedirectFlag()">
<img alt="CGO Clicker" src="/terminal/img/csgo-clicker.png"/>
<p class="game-title">CSGO Clicker</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/bloons-tower-defense-2" onclick="setRedirectFlag()">
<img alt="bloons tower defense" src="/terminal/img/bloons-tower-defense-2.png"/>
<p class="game-title">Bloon's Tower Defense 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaw" onclick="setRedirectFlag()">
<img alt="fnaw" src="/terminal/img/fnaw.jpg"/>
<p class="game-title">FNAW</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-school-4" onclick="setRedirectFlag()">
<img alt="riddle school 4" src="/terminal/img/riddle-school-4.png"/>
<p class="game-title">Riddle School 4</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/duck-life-1" onclick="setRedirectFlag()">
<img alt="duck life 1" src="/terminal/img/ducklife.png"/>
<p class="game-title">Duck Life 1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaf" onclick="setRedirectFlag()">
<img alt="FNAF 1" src="/terminal/img/fnaf.jpg"/>
<p class="game-title">FNAF 1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaf-2" onclick="setRedirectFlag()">
<img alt="FNAF 2" src="/terminal/img/fnaf-2.webp"/>
<p class="game-title">FNAF 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaf-3" onclick="setRedirectFlag()">
<img alt="FNAF 3" src="/terminal/img/fnaf-3.webp"/>
<p class="game-title">FNAF 3</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaf-4" onclick="setRedirectFlag()">
<img alt="FNAF 4" src="/terminal/img/fnaf-4.webp"/>
<p class="game-title">FNAF 4</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/fnaf-ucn" onclick="setRedirectFlag()">
<img alt="FNAF UCN" src="/terminal/img/ucn.png"/>
<p class="game-title">FNAF UCN</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/wordle-unlimited" onclick="setRedirectFlag()">
<img alt="wordle unlimited" src="/terminal/img/wordle.jpg"/>
<p class="game-title">Wordle Unlimited</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/ageofconflict" onclick="setRedirectFlag()">
<img alt="age of conflict" src="/terminal/img/agesofconflict.png"/>
<p class="game-title">Age Of Conflict</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/cluster-rush" onclick="setRedirectFlag()">
<img alt="cluster rush" src="/terminal/img/cluster-rush.webp"/>
<p class="game-title">Cluster Rush</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/monkeymart" onclick="setRedirectFlag()">
<img alt="monkey mart" src="/terminal/img/monkeymart.jpeg"/>
<p class="game-title">Monkey Mart</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/drive-mad" onclick="setRedirectFlag()">
<img alt="drive mad" src="/terminal/img/drive-mad.jpg"/>
<p class="game-title">Drive Mad</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/100-player-pong" onclick="setRedirectFlag()">
<img alt="100 player pong" src="/terminal/img/100-player-pong.jpg"/>
<p class="game-title">100 Player Pong</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/super-mario-64" onclick="setRedirectFlag()">
<img alt="super mario 64" src="/terminal/img/super-mario-64.jpg"/>
<p class="game-title">Super Mario 64</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/offline-amongus" onclick="setRedirectFlag()">
<img alt="amongus (so funny)" src="/terminal/img/amongus.jpg"/>
<p class="game-title"> Offline Among Us</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/paper-io-2" onclick="setRedirectFlag()">
<img alt="paper.io 2" src="/terminal/img/paper-io-2.png"/>
<p class="game-title">Paper.io 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/getaway-shootout" onclick="setRedirectFlag()">
<img alt="getaway shootout" src="/terminal/img/getaway-shootout.webp"/>
<p class="game-title">Getaway Shootout</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/getaway-shootout-new" onclick="setRedirectFlag()">
<img alt="getaway shootout new" src="/terminal/img/getaway-shootout-new.jpg"/>
<p class="game-title">Getaway Shootout NEW</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/edge-surf" onclick="setRedirectFlag()">
<img alt="edge://surf" src="/terminal/img/edgesurf.png"/>
<p class="game-title">Edge Surf</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/sprinter" onclick="setRedirectFlag()">
<img alt="sprinter" src="/terminal/img/sprinter.png"/>
<p class="game-title">Sprinter</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/stickman-hook" onclick="setRedirectFlag()">
<img alt="stickman hook" src="/terminal/img/stickmanhook.png"/>
<p class="game-title">Stickman Hook</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/sprinter" onclick="setRedirectFlag()">
<img alt="riddle school" src="/terminal/img/riddle-school.png"/>
<p class="game-title">Riddle School</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/eggy-car" onclick="setRedirectFlag()">
<img alt="eggy car" src="/terminal/img/eggy-car.png"/>
<p class="game-title">Eggy Car</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/amidstthesky" onclick="setRedirectFlag()">
<img alt="amidst the sky" src="/terminal/img/amidstthesky.jpg"/>
<p class="game-title">Amidst The Sky</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/basketbros" onclick="setRedirectFlag()">
<img alt="basket bros" src="/terminal/img/basketbros.jpg"/>
<p class="game-title">Basket Bros</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-school-3" onclick="setRedirectFlag()">
<img alt="riddle school 3" src="/terminal/img/riddle-school-3.png"/>
<p class="game-title">Riddle School 3</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/alienhominid" onclick="setRedirectFlag()">
<img alt="alien hominid" src="/terminal/img/alienhominid.jpg"/>
<p class="game-title">Alien Hominid</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/retro-bowl" onclick="setRedirectFlag()">
<img alt="retro bowl" src="/terminal/img/retro-bowl.webp"/>
<p class="game-title">Retro Bowl</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/geometry-dash-scratch" onclick="setRedirectFlag()">
<img alt="bit life" src="/terminal/img/geometry-dash.jpeg"/>
<p class="game-title">Geometry Dash Scratch</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/slope-2" onclick="setRedirectFlag()">
<img alt="slope 2" src="/terminal/img/slope-2.png"/>
<p class="game-title">Slope 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/riddle-school-5" onclick="setRedirectFlag()">
<img alt="riddle school 5" src="/terminal/img/riddle-school-5.png"/>
<p class="game-title">Riddle School 5</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/google-snake" onclick="setRedirectFlag()">
<img alt="google snake" src="/terminal/img/google-snake.png"/>
<p class="game-title">Google Snake</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/animatorvsanimation" onclick="setRedirectFlag()">
<img alt="animator vs animation" src="/terminal/img/animatorvsanimation.jpg"/>
<p class="game-title">Animator VS Animation</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/tunnel-rush" onclick="setRedirectFlag()">
<img alt="tunnel rush" src="/terminal/img/tunnel-rush.png"/>
<p class="game-title">Tunnel Rush</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/1v1-lol" onclick="setRedirectFlag()">
<img alt="1v1.lol" src="/terminal/img/1v1-lol.png"/>
<p class="game-title">1v1.lol</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/doge-miner" onclick="setRedirectFlag()">
<img alt="doge miner" src="/terminal/img/dogeminer.webp"/>
<p class="game-title">Doge Miner</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/doge-miner-2" onclick="setRedirectFlag()">
<img alt="doge miner 2" src="/terminal/img/dogeminer2.png"/>
<p class="game-title">Doge Miner 2</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/bloons-tower-defense" onclick="setRedirectFlag()">
<img alt="bloons tower defense" src="/terminal/img/btd.jpg"/>
<p class="game-title">Bloon's Tower Defense</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/astray" onclick="setRedirectFlag()">
<img alt="astray" src="/terminal/img/astray.png"/>
<p class="game-title">Astray</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/minecraft-classic" onclick="setRedirectFlag()">
<img alt="minecraft classic" src="/terminal/img/mc-classic.webp"/>
<p class="game-title">Minecraft Classic</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/0hh1" onclick="setRedirectFlag()">
<img alt="0hh1" src="/terminal/img/0hh1.png"/>
<p class="game-title">0hh1</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/0hn0" onclick="setRedirectFlag()">
<img alt="0hn0" src="/terminal/img/0hn0.png"/>
<p class="game-title">0hn0</p>
</a>
</div>

<div class="game">
<a href="/terminal/games/slitherio" onclick="setRedirectFlag()">
<img alt="Slither IO" src="/terminal/img/slitherio.png"/>
<p class="game-title">Slither IO🔰</p>
</a>
</div>

</div>

<footer id="footersect">
  <p>Managed By Arowadas Co.<img src="/favicon.png" alt="Arowadas Co." class="custom-emoji"> </p>
</footer>
</div>

<!--JAVASCRIPT CODING END-->

<!--START SEARCH ELEMENT-->
<div id="particles-js"></div>
</main>

<script>
var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  itemSelector: '.grid-item',
  columnWidth: 200
});
</script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        // Get references to the input element and game containers
        const searchInput = document.getElementById('search-input');
        const gameContainers = document.querySelectorAll('.game');
        const searchForm = document.getElementById('search-container');

        // Add an input event listener to trigger the search
        searchInput.addEventListener('input', performSearch);

        // Add a form submit event listener to prevent form submission
        searchForm.addEventListener('submit', function (event) {
            event.preventDefault();
        });

        // Function to perform the search
        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();

            // Iterate through game containers and check if their titles match the search term
            gameContainers.forEach(container => {
                const title = container.querySelector('.game-title').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    container.style.display = 'block'; // Show matching game container
                } else {
                    container.style.display = 'none'; // Hide non-matching game container
                }
            });
        }
    </script>
     <script>
  // ADVERTISE PLAYBACK HIDE + AUTOPLAY (GETAWAY AD)
//  const video = document.getElementById('ad-video');
//  video.setAttribute('autoplay', true);
//  video.setAttribute('controls', false);
</script>
<!--     <script>
  // PICK RANDOM AD (GETAWAY AD) - called getaway ad as a code name btw dont change it!!
  function getRandomVideoSource() {
    const videoSources = [
         // remember to add commas after the src-link code unless it's the last one
      { src: '/img/vid/opium.mp4', link: 'https://opium-games.pages.dev' },
      { src: '/img/vid/drivemad.mp4', link: '/games/drive-mad' },
      { src: '/img/vid/stickmanhook.mp4', link: '/games/stickman-hook' },
      { src: '/img/vid/fnaf2.mp4', link: '/games/fnaf-2' }
    ];
    const randomIndex = Math.floor(Math.random() * videoSources.length);
    return videoSources[randomIndex];
  }

  
  function setRandomVideoSource() {
    const video = document.getElementById('ad-video');
    const videoLink = document.getElementById('video-link');
    const { src: randomSource, link: randomLink } = getRandomVideoSource();

    
    video.setAttribute('src', randomSource);
    videoLink.setAttribute('href', randomLink);
  }

  
  window.addEventListener('load', setRandomVideoSource);
</script>-->

<script>
  function setRedirectFlag() {
      // Set a flag in local storage to indicate the redirection
      localStorage.setItem('redirected', 'true');
  }
</script>
</body>
</html>