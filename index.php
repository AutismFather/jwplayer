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
	font-size: 12px;
}
h1 {
	font-size: 24px;
}
h3 {
	margin-bottom: 5px;
	font-size: 18px;
}
code {
	padding: 5px;
	background-color: #CCC;
	border: 1px solid #AAA;
	font-style: italic;
	display: block;
}
</style>
<body>
<h1>JW Player / PHP</h1>
<h3>Example code:</h3>
<code>jwplayer::play('video.mp4');</code>

<h3>Some features:</h3>
<ul>
<li>Auto includes the script tags and source but only one time, no matter how many times the player is on a page.</li>
<li>Appends ID to the div and media player. If no ID passed, it generates it's own.</li>
<li>Auto uses the playlist features if an array of files is passed instead of just one file.</li>
<li>Auto does the math on a player size if a playlist is included. So a video at 480 and a playlist at 250 will create a player at 730.</li>
</ul>
<h3>Download</h3>
GitHub: <a href="https://github.com/TyCamTech/jwplayer">https://github.com/TyCamTech/jwplayer</a>

<br /><br />

<h3>More Examples</h3>
<div>
<div style="float: left;">
Set a preview image
<?php
jwplayer::play('http://www.youtube.com/watch?v=IrqDfSvUpoU', array(
	'image' => 'jwplayer/avengershulk.jpg'
));
?>
The code: <br />
<code>jwplayer::play('http://www.youtube.com/watch?v=IrqDfSvUpoU', array( <br />
	'image' => 'jwplayer/avengershulk.jpg'<br />
));</code>
</div>

<div style="float: left; margin-left: 20px;">
Easily set new dimensions
<?php
jwplayer::play('http://www.youtube.com/watch?v=yrDXseJRJIk', array(
	'width' => 600,
	'height' => 360
));
?>
The code: <br />
<code>jwplayer::play('http://www.youtube.com/watch?v=yrDXseJRJIk', array(<br />
	'width' => 600,<br />
	'height' => 360<br />
));</code>
</div>
</div>
<div style="clear: both;"></div>
<div style="margin: 20px 0px 20px 0px;">
Include more than one file for a playlist!
<?php
jwplayer::play(array(
		array('file' => 'http://www.youtube.com/watch?v=f_J5rBxeTIk', 'title' => 'Universe Song', 'description' => 'Animaniacs sing the Universe Song'),
		array('file' => 'http://www.youtube.com/watch?v=EhiJwfj0URs', 'title' => 'Nations Of The World', 'description' => 'Animaniacs sing the Nations of the World (HQ)'),
		array('file' => 'http://www.youtube.com/watch?v=sNUDDaEOvuY', 'title' => '50 State Capitols', 'description' => 'Animaniacs sing the 50 States and their Capitols')
	),
	array('playlist' => true, 'width' => 480, 'height' => 360));
?>
The Code: <br />
<code>jwplayer::play(array(<br />
		&nbsp;&nbsp;&nbsp;array('file' => 'http://www.youtube.com/watch?v=f_J5rBxeTIk', 'title' => 'Universe Song', 'description' => 'Animaniacs sing the Universe Song'), <br />
		&nbsp;&nbsp;&nbsp;array('file' => 'http://www.youtube.com/watch?v=EhiJwfj0URs', 'title' => 'Nations Of The World', 'description' => 'Animaniacs sing the Nations of the World (HQ)'), <br />
		&nbsp;&nbsp;&nbsp;array('file' => 'http://www.youtube.com/watch?v=sNUDDaEOvuY', 'title' => '50 State Capitols', 'description' => 'Animaniacs sing the 50 States and their Capitols')<br />
	),<br />
	array('playlist' => true, 'width' => 480, 'height' => 360));
	</code>
</div>

<h3>Available params:</h3>
<ul>
<li>id - The ID tacked on to the div and script code that references that div</li>
<li>playerID - The ID of the actual player itself. Defaults to playerID.</li>
<li>width - The width of the video</li>
<li>height - The height of the video</li>
<li>autostart - Have a video start as soon as it loads or wait for the user to press play</li>
<li>js - The file and filename (ie, /jwplayer/jwplayer.js) location of the 'jwplayer.js' file. Default is set in jwplayer.php</li>
<li>swf - The file and filename (ie, /jwplayer/player.swf) location of the 'player.swf' file. Default is set in jwplayer.php</li>
<li>image - An image to use as a placeholder until the video is played</li>
<li>playlist - True or false, whether or not to show playlist</li>
<li>playlist_position - Enables (so it can be used without the playlist param) and positions the location of the playlist</li>
<li>playlist_size - Enables (so it can be used without the playlist param) and sets the width of the playlist</li>
<li>class - You can set a class name to associate with all of the divs that the jwplayer file creates. Allows for common styling.</li>
</ul>

<h3>Thank you!</h3>
Updates shall continue as needed!
</body>
</html>