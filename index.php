<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <title>Happy Birthday Ritika 🎂</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Quicksand&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(to right, #ffd1dc, #ffe4e1);
      overflow: hidden;
    }

    .bg {
      position: fixed;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: url('https://pngimg.com/uploads/teddy_bear/teddy_bear_PNG105.png') no-repeat bottom right;
      background-size: 150px;
      opacity: 0.15;
    }

    .container {
      position: relative;
      z-index: 2;
      padding: 20px;
      text-align: center;
      max-width: 800px;
      margin: 10vh auto;
    }

    h1 {
      font-family: 'Great Vibes', cursive;
      font-size: 12vw;
      color: #ff69b4;
      text-shadow: 2px 2px 10px #fff;
    }

    .typewriter {
      font-size: 5vw;
      color: #fff;
      background: rgba(255, 105, 180, 0.8);
      padding: 15px 20px;
      border-radius: 20px;
      display: inline-block;
      animation: fadeIn 2s ease-in-out;
      min-height: 100px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }

    .btn {
      margin-top: 30px;
      padding: 12px 30px;
      font-size: 18px;
      background: #fff;
      border: 2px solid #ff69b4;
      color: #ff69b4;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn:hover {
      background: #ff69b4;
      color: #fff;
    }

    .balloon {
      position: absolute;
      width: 40px;
      height: 60px;
      background: #ffb6c1;
      border-radius: 50%;
      animation: float 10s linear infinite;
      opacity: 0.6;
    }

    @keyframes float {
      0% { transform: translateY(100vh) scale(1); }
      100% { transform: translateY(-120vh) scale(1.2); }
    }

    @media (min-width: 768px) {
      h1 { font-size: 60px; }
      .typewriter { font-size: 24px; }
    }
  </style>
</head>
<body>

  <!-- Background Music -->
  <audio autoplay loop>
    <source src="https://www.example.com/path/to/your-music-file.mp3" type="audio/mp3">
    Your browser does not support the audio element.
  </audio>

  <div class="bg"></div>

  <div class="container">
    <h1>🎉 Ritika 🎂</h1>
    <div class="typewriter" id="typewriter"></div>
    <button class="btn" onclick="showMore()">🎁 Click for a Surprise</button>
  </div>

  <?php
    for ($i = 0; $i < 30; $i++) {
      $left = rand(0, 100);
      $delay = rand(0, 20);
      echo "<div class='balloon' style='left: {$left}%; animation-delay: {$delay}s; background: hsl(" . rand(330, 360) . ", 100%, 85%);'></div>";
    }
  ?>

  <script>
    const message = `Aaj ka din hai tumhaare naam, 🧸
    🎈 Khushiyan ho tere har kaam!
    🎂 Cake, teddy, love aur dosti ka vibe,
    🎶 Tu ho zindagi ki sabse cute tribe.
    💖 Happy Birthday Ritika!`;

    let i = 0;
    const speed = 50;
    function typeWriter() {
      if (i < message.length) {
        document.getElementById("typewriter").innerHTML += message.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    typeWriter();

    function showMore() {
      alert("🎉 Surprise! You're the cutest baby, Ritika 🧸💖");
    }
  </script>

</body>
</html>
