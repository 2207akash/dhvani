<?php
	class Album {
		private $con;
		private $id;
		private $title;
		private $artworkPath;
		private $genre;
		private $artistId;

		public function __construct($con, $id) {
			$this->con = $con;
			$this->id = $id;

			$albumQuery = mysqli_query($this->con, "SELECT * FROM albums WHERE id='$this->id'");
			$album = mysqli_fetch_array($albumQuery);

			$this->title = $album['title'];
			$this->artworkPath = $album['artworkPath'];
			$this->genre = $album['genre'];
			$this->artistId = $album['artist'];
		}

		public function getTitle() {
			return $this->title;
		}

		public function getArtworkPath() {
			return $this->artworkPath;
		}

		public function getArtist() {
			return new Artist($this->con, $this->artistId);
		}

		public function getGenre() {
			return $this->genre;
		}
	}
?>