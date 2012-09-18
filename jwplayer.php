<?php
/**
 * jwplayer
 * This PHP file will take the burden out of putting JS all over your page
 * and having to remember div names and all that tedious stuff.
 * 
 * @package jwplayer
 * @author Stuart Duncan
 * @copyright TyCam Technologies
 * @access public
 */
class jwplayer {
	/**
	 * Please enter the location to the jwplayer.js and player.swf files here
	 **/
	static private $js = 'jwplayer/jwplayer.js';
	static private $swf = 'jwplayer/player.swf';

	/**
	 * Default dimensions
	 **/
	static private $default_width = 480;
	static private $default_height = 360;

	/**
	 * Default prefix for the divs that will contain the videos.
	 * The video ID will come after.
	 **/
	static private $id_prefix = 'ztod_player_';
	static private $classname = 'jwplayer';

	/**
	 * Playlist defaults
	 **/
	static private $playlist = false;
	static private $playlist_position = 'right';
	static private $playlist_size = 250;



	/**********************************************************************/
	/*** Do Not Edit Below This Line Unless You Know What You Are Doing ***/
	/**********************************************************************/
	static private $js_included = false;

	/**
	 * jwplayer::play()
	 * Will render and play the jwplayer video player
	 * 
	 * @param mixed $file
	 * @param mixed $params
	 * @return void
	 */
	static function play($file = null, $params = null){
		$output = '';

		// extract the params
		if( !empty($params) && is_array($params) ){ extract($params); }

		// First the js file. Must be included. But only once.
		$js = ( !empty($js) ) ? $js : self::$js;
		if( self::$js_included === false ){
			echo '<script type="text/javascript" src="' . $js . '"></script>' . "\n";
			self::$js_included = true;
		}

		// The ID. Usually the database ID of the video. If not included, a random # will be picked.
		$div_id = ( !empty($id) ) ? self::$id_prefix . $id : self::$id_prefix . rand(10,9999);

		// Build the argument list in this array
		$jw_args = array();

		// The jw arguments
		if( is_array($file) ){
			$jw_args['playlist'] = stripslashes(json_encode($file));

			if( (!empty($playlist) && $playlist == true) || !empty($playlist_position) || !empty($playlist_size) ){
				$jw_args['playlist.position'] = ( !empty($playlist_position) ) ? $playlist_position : self::$playlist_position;
				$jw_args['playlist.size'] = ( !empty($playlist_size) ) ? $playlist_size : self::$playlist_size;
			}
		}
		else {
			$jw_args['file'] = $file;
		}

		// path to the player.swf
		$swf = ( !empty($swf) ) ? $swf : self::$swf;

		$jw_args['id'] = ( !empty($playerID) ) ? $playerID : 'playerID';
		$jw_args['width'] = ( !empty($width) ) ? $width : self::$default_width;
		$jw_args['height'] = ( !empty($height) ) ? $height: self::$default_height;
		$jw_args['flashplayer'] = $swf;
		$jw_args['image'] = ( !empty($image) ) ? $image : null;

		// A class name for the divs.
		$className = ( !empty($class) ) ? $class : self::$classname;

		// A bit of math. If we have a video player AND a playlist width, add them up to get a new video player size.
		if( !empty($jw_args['playlist.size']) ){
			$jw_args['width'] = $jw_args['width'] + $jw_args['playlist.size'];
		}

		// Place holder div for the video player
		echo "<div id='" . $div_id . "' class='" . $className . "'></div>\n";

		echo "<script>jwplayer('" . $div_id . "').setup({\n";
		foreach( $jw_args as $key => $value ){
			if( $key == 'playlist' ){
				echo "'" . $key . "': " . $value . ",\n";
			}
			else if( !empty($value) ) { echo "'".$key."': '" . $value . "',\n"; }
		}
		echo "});</script>\n";
	}
}