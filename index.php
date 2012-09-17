<?php
include('jwplayer.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>JWPlayer</title></head>
<style>
* {
	font-family: arial;
}
</style>
<body>
Introducing the jwplayer class. Call it with <em>jwplayer::play($filename)</em> and you're good to go!<br />
Some features:<br />
<ul>
<li>Auto includes the script tags and source but only one time, no matter how many times the player is on a page.</li>
<li>Appends ID to the div and media player. If no ID passed, it generates it's own.</li>
<li>Auto uses the playlist features if an array of files is passed instead of just one file.</li>
<li>Auto does the math on a player size if a playlist is included. So a video at 480 and a playlist at 250 will create a player at 730.</li>
</ul>
See some examples below.
<br /><br />

<div>
<div style="float: left;">
<?php
jwplayer::play('http://www.youtube.com/watch?v=IrqDfSvUpoU', array(
	'width' => 480,
	'height' => 360,
	'image' => 'avengershulk.jpg'
));
?>
The code: <br />
jwplayer::play('http://www.youtube.com/watch?v=IrqDfSvUpoU', array( <br />
	'width' => 480,<br />
	'height' => 360,<br />
	'image' => 'avengershulk.jpg'<br />
));
</div>

<div style="float: left; margin-left: 20px;">
<?php
jwplayer::play('http://www.youtube.com/watch?v=yrDXseJRJIk', array(
	'width' => 600,
	'height' => 360
));
?>
The code: <br />
jwplayer::play('http://www.youtube.com/watch?v=yrDXseJRJIk', array(<br />
	'width' => 600,<br />
	'height' => 360<br />
));
</div>
</div>
<div style="clear: both;"></div>
<div style="margin: 20px 0px 20px 0px;">
Playlist! <br /><br />
<?php
jwplayer::play(array(
		array('file' => 'http://www.youtube.com/watch?v=f_J5rBxeTIk', 'title' => 'Universe Song'),
		array('file' => 'http://www.youtube.com/watch?v=IDtdQ8bTvRc', 'title' => 'Nations Of The World'),
		array('file' => 'http://www.youtube.com/watch?v=sNUDDaEOvuY', 'title' => '50 State Capitols')
	),
	array('playlist' => true, 'width' => 480, 'height' => 360));
?>
The Code: <br />
jwplayer::play(array(<br />
		array('file' => 'http://www.youtube.com/watch?v=f_J5rBxeTIk', 'title' => 'Universe Song'),<br />
		array('file' => 'http://www.youtube.com/watch?v=IDtdQ8bTvRc', 'title' => 'Nations Of The World'),<br />
		array('file' => 'http://www.youtube.com/watch?v=sNUDDaEOvuY', 'title' => '50 State Capitols')<br />
	),<br />
	array('playlist' => true, 'width' => 480, 'height' => 360));
</div>

Available params: <br />
<ul>
<li>id - The ID tacked on to the div and script code that references that div</li>
<li>playerID - The ID of the actual player itself. Defaults to playerID.</li>
<li>width - The width of the video</li>
<li>height - The height of the video</li>
<li>path - The file path to the location of the 'player.swf' file. Looks in local folder if not used.</li>
<li>image - An image to use as a placeholder until the video is played</li>
<li>playlist - True or false, whether or not to show playlist</li>
<li>playlist_position - Enables (so it can be used without the playlist param) and positions the location of the playlist</li>
<li>playlist_size - Enables (so it can be used without the playlist param) and sets the width of the playlist</li>
</ul>
</body>
</html>