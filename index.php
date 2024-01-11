<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jungian Greetings</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #F0F0F0;
         text-align: center;
      }
      .container {
         padding: 20px;
         border: 2px solid #007BFF;
         border-radius: 10px;
         background-color: #FFFFFF;
         margin: 20% auto;
         max-width: 400px;
      }
   </style>
</head>
<body>
   <div class="container">
      <?php
         $greeting = "Greetings, fellow explorer of the collective unconscious!";
         $emoji = "🌌";
         $jungianFact = "In Carl Jung's world, 'Hello, world!' represents the emergence of the collective consciousness into the digital realm.";
         $definition = "The collective unconscious is the collection of universal symbols that have thematically emerged in diverse and unconnected cultures throughout history. It is the source of the archetypes that appear in dreams and myths. (It is also the source from which innovation emerges.)";

         echo "<h1>$greeting $emoji</h1>";
         echo "<h3>$jungianFact</h3>";
         echo "<p>$definition</p>";

      ?>
   </div>
</body>
</html>