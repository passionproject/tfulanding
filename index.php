<?php
	require('includes/config.php');
	$stmt = $db->prepare('SELECT * FROM #dbtable# WHERE #date#=CURDATE()');
	$stmt->execute();
	$row = $stmt->fetch();
	$row_count = $stmt->rowCount();
	$dailyPhrase = $row['phrase'];
	$dailyVideo = $row['video_url'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Final Union | Landing Page</title>
	<link rel="stylesheet" type="text/css" href="includes/main.css">
</head>
<body>
	<h1>The Final Union</h1>
	<h2><?php echo $dailyPhrase; ?></h2>
	<br>
	<!--https:www.youtube.com/embed/YmVLeMHxUmc-->
	<center><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $dailyVideo; ?>" frameborder="0" allowfullscreen></iframe></center>
	<br>
	<br>
	<a href="http://defcon.thefinalunion.com"><h2 class="quotes">Continue to NoobCon site</h2></a>
	<a href="http://defcon.thefinalunion.com"><h2 class="quotes">Weiter zur NoobCon Seite</h2></a>
	<a href="http://defcon.thefinalunion.com"><h2 class="quotes">Contine sur le site NoobCon</h2></a>
	<a href="http://defcon.thefinalunion.com"><h2 class="quotes">Continua pe site-ul NoobCon</h2></a>

	</center>
	<div class="footer">Copyright &copy 2016 The Final Union.</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script>

	$(document).ready(function() {
    var colors = ["#FC0303", "#FCB203", "#FC8403"];
    	var color = Math.floor(Math.random() * 3);
    	$("body").css({"backgroundColor":colors[color]});
    	setInterval(function() {
    		color++;
	    	if (color == colors.length) {
		    	color = 0;
		    }
		    $("body").animate({"backgroundColor":colors[color]}, 2000);
    	}, 7000);
    });


	</script>
	<script>
	(function() {

    var quotes = $(".quotes");
    var quoteIndex = -1;

    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(2000)
            .delay(2000)
            .fadeOut(2000, showNextQuote);
    }

    showNextQuote();

})();
	</script>
</body>
</html>
