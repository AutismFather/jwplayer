# JWPlayer static PHP class

## Usage

Example:

*jwplayer::play('video.mp4');*

It's as simple as that!

If you want to have a playlist of videos, not just one, then pass an array of file arrays instead. In other words, an array containing arrays of file information such as name, title, image, etc. For example:

*jwplayer::play(array(array('file' => 'video1.mp4', 'title' => 'Most awesome video ever'), array('file' => 'video2.mp4', 'title' => 'Second most awesome video')));*

# Features
- Auto includes the script tags and source but only one time, no matter how many times the player is on a page.
- Appends ID to the div and media player. If no ID passed, it generates it's own.
- Auto uses the playlist features if an array of files is passed instead of just one file.
- Auto does the math on a player size if a playlist is included. - So a video at 480 and a playlist at 250 will create a player at 730.

# Optional Params

- id - The ID tacked on to the div and script code that references that div
- playerID - The ID of the actual player itself. Defaults to playerID.
- width - The width of the video
- height - The height of the video
- path - The file path to the location of the 'player.swf' file. Looks in local folder if not used.
- image - An image to use as a placeholder until the video is played
- playlist - True or false, whether or not to show playlist
- playlist_position - Enables (so it can be used without the playlist param) and positions the location of the playlist
- playlist_size - Enables (so it can be used without the playlist param) and sets the width of the playlist

# Example
See here for example: [http://tycamtech.com/jwplayer/](http://tycamtech.com/jwplayer/)