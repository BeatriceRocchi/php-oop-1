<?php

require_once __DIR__ . '/Actor.php';

class Movie
{
  public $title;
  public $lang = 'English';
  public $year;
  public $genres;
  public $image;
  public $director;
  public $scriptwriter;
  public $musiccomposer;
  public $actor;

  public function __construct(string $_title, int $_year, array $_genres, string $_image, string $_director, string $_scriptwriter, string $_musiccomposer, Actor $_actor)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->genres = $_genres;
    $this->image = $_image;
    $this->director = $_director;
    $this->scriptwriter = $_scriptwriter;
    $this->musiccomposer = $_musiccomposer;
    $this->actor = $_actor;
  }

  public function getMovieInfo()
  {
    echo "Director: $this->director &#8226; Scriptwriter: $this->scriptwriter &#8226; Music Composer: $this->musiccomposer";
  }
}
