<?php
$headTitle = "Roulette";

ob_start();
?>

<section class="main-sections">
  <article class="main-articles">
    <div class="container">
      <h1>🎰Machine à Sous🎰</h1>
      <img src="https://i.pinimg.com/originals/de/55/cc/de55cc49657b2134eb6bfe6800270649.jpg" alt="Super Vegeta" style="display: block; margin: 10px auto;">
      
      <article class="slot-machine">
        <div class="reel" id="reel1">🍒</div>
        <div class="reel" id="reel2">🍒</div>
        <div class="reel" id="reel3">🍒</div>
      </article>
      <button id="spinButton">🎲🎲 Lancer</button>
      <div id="result"></div>
    </div>

    <script src="/sources/js/slot.js"></script>
  </article>
</section>

<?php

$mainContent = ob_get_clean();
?>
