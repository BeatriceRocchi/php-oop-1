<?php

class Movie
{
  public $title;
  public $lang = 'English';
  public $year;
  public $genres;
  public $director;
  public $scriptwriter;
  public $musiccomposer;


  public function __construct(string $_title, int $_year, array $_genres, string $_director, string $_scriptwriter, string $_musiccomposer)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genres = $_genres;
    $this->director = $_director;
    $this->scriptwriter = $_scriptwriter;
    $this->musiccomposer = $_musiccomposer;
  }

  public function getMovieInfo()
  {
    echo "Director: $this->director &#8226; Scriptwriter: $this->scriptwriter &#8226; Music Composer: $this->musiccomposer";
  }
}
