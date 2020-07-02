<?php 
	
	$songQuery = mysqli_query($con, "SELECT * FROM songs ORDER BY RAND() LIMIT 10");
	$resultArray = array();

	while($row = mysqli_fetch_array($songQuery)) {
		array_push($resultArray, $row['id']);
	}

	$jsonArray = json_encode($resultArray);

?>

<script>

	$(document).ready(function() {
		currentPlaylist = <?php echo $jsonArray; ?>;
		audioElement = new Audio();
		setTrack(currentPlaylist[0], currentPlaylist, false);
	});

	function setTrack(trackId, newPlaylist, play) {
		audioElement.setTrack();
		
		if(play)
			audioElement.play();
	}

</script>

<div id="nowPlayingBarContainer">
	<div id="nowPlayingBar">
		<div id="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img class="albumArtwork" src="assets/images/default-album.jpg">
				</span>
				<div class="trackInfo">
					<span class="trackName">
						Love Me Like You Do
					</span>
					<span class="artistName">
						Ellie Goulding
					</span>
				</div>
			</div>
		</div>

		<div id="nowPlayingCenter">
			<div class="content playerControls">
				<div class="buttons">
					<button class="controlButton shuffle" title="Shuffle">
						<img src="assets/images/icons/shuffle.png" alt="Shuffle">
					</button>

					<button class="controlButton prev" title="Previous">
						<img src="assets/images/icons/prev.png" alt="Previous">
					</button>

					<button class="controlButton play" title="Play">
						<img src="assets/images/icons/play.png" alt="Play">
					</button>

					<button class="controlButton pause" title="Pause" style="display: none">
						<img src="assets/images/icons/pause.png" alt="Pause">
					</button>

					<button class="controlButton next" title="Next">
						<img src="assets/images/icons/next.png" alt="Next">
					</button>

					<button class="controlButton repeat" title="Repeat">
						<img src="assets/images/icons/repeat.png" alt="Repeat">
					</button>
				</div>

				<div class="playbackBar">
					<span class="progressTime current">0.00</span>

					<div class="progressBar">
						<div class="progressBarBg">
							<div class="progress"></div>
						</div>
					</div>

					<span class="progressTime remaining">0.00</span>
				</div>
			</div>
		</div>

		<div id="nowPlayingRight">
			<div class="volumeBar">
				<button class="controlButton volume" title="Volume">
					<img src="assets/images/icons/speaker.png" alt="Volume">
				</button>
				
				<div class="progressBar">
					<div class="progressBarBg">
						<div class="progress"></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>	
</div>