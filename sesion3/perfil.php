<?php 
$name = "Lino Espinoza"; 
$pais = "Perú";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Perfil de <?php echo $name; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Muli%7CRoboto:400,300,500,700,900" rel="stylesheet"></head>
  <body>
  <a name="top"> </a>
    <div class="main-nav">
        <ul class="nav">
          <li class="name">Jane Smith</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Experience</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <header>
      <img src="https://placeimg.com/100/100/any" alt="Drawing of Jane Smith" class="profile-image">
      <h1 class="tag name">Hola, yo soy Lino Espinoza</h1>
      <p class="tag location">My home is <?php echo $pais; ?>.</p>
    </header>

    <main class="flex">
      <div class="card">
        
        <h2>Background 1</h2>
        <h3>Subtitulo h3</h3>
        <p>I’m an aspiring web designer who loves everything about the web. I've lived in lots of different places and have worked in lots of different jobs. I’m excited to bring my life experience to the process of building fantastic looking websites.</p>
        <p>I’ve been a professional cook and gardener and am a life-long learner who's always interested in expanding my skills.</p>
        <p>Este es un nuevo párrafo.</p>

        <ol>
          <li>Ipad</li>
          <li>Wordpress</li>
          <li>PHP</li>
          <li>HTML</li>
          <li>CSS</li>
        </ol>
      </div> 

      <div class="card">
        <h2>Goals</h2>
        <p>I want to master the process of building web sites and increase my knowledge, skills and abilities in:</p>
        <ul class="skills">
          <li>HTML</li>
          <li>CSS</li>
          <li>JavaScript</li>
          <li>Ruby</li>
          <li>Rails</li>
        </ul>
        <p>I’d like to work for a web design firm helping clients create an impressive online presence.</p>
      </div> 

    </main>
    <footer>
      <ul>
        <li><a href="#top" class="social twitter">Twitter</a></li>
        <li><a href="http://www.google.com.pe" class="social linkedin" target="_blank">LinkedIn</a></li>
        <li><a href="#" class="social github">Github</a></li>
      </ul>
      <p class="copyright">Copyright 2015, Jane Smith</p>
    </footer>
  </body>
  </html>
