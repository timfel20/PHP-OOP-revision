<?php 
    class Song
    {
        public $id;
        public $title;
    
    }
    $octopusSong = new Song;
    $octopusSong -> id = 1;
    $octopusSong -> title = "Get You";

    $yellowSubmarine = new Song;
    $yellowSubmarine -> id = 2;
    $yellowSubmarine -> title = "Love Again";

    class PlayList
    {
       public $name;
       public $songs = [];

        public function addSong($song){
        $this -> songs[] = $song;
       }
    }

    $playlist = new Playlist;
    $playlist->name = "mood";
    $playlist->addSong($octopusSong);
    $playlist->addSong($yellowSubmarine);
    var_dump($playlist);
