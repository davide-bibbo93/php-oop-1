<?php

// prima classe Disks
class Disks{

    public $title;

    public $author;

    public $year;

    public $genre;

    // funzione costruttore per passare come argomento i parametri
    public function __construct($title, $author, $year, $genre){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->genre = $genre;
    }
}

// seconda classe RecordShop
class RecordShop {

  public $name;

  // rendo privato array dischi per accedere tramite metodo (costringe il push)
  private $disks = [];

  // funzione costruttore dove passa solo il name come parametro
  public function __construct($name) {
    $this->name = $name;
  }

  // fnzione metodo (setter) per pushare un disco in array dischi
  public function addDisk(Disks $disk) {
    $this->disks[] = $disk;
  }

  // funzione metodo (getter) per il return dell'array dischi
  public function getDisks() {
    return $this->disks;
  }
}

// stabilisco i dischi con new e stampo a schermo i valori
echo 'LISTA DISCHI: ' . '<br><br>';

$diskOne = new Disks('New Jersey', 'Bon Jovi', '1988', 'Rock');
echo 'Title: ' . $diskOne->title . '<br>';
echo 'Singer: ' . $diskOne->author . '<br>';
echo 'Year: ' . $diskOne->year . '<br>';
echo 'Genre: ' . $diskOne->genre . '<br><br>';

$diskTwo = new Disks('Live at Wembley 86', 'Queen', '1992', 'Pop');
echo 'Title: ' . $diskTwo->title . '<br>';
echo 'Singer: ' . $diskTwo->author . '<br>';
echo 'Year: ' . $diskTwo->year . '<br>';
echo 'Genre: ' . $diskTwo->genre . '<br><br>';

$diskThree = new Disks('Bad', 'Michael Jackson', '1987', 'Pop');
echo 'Title: ' . $diskThree->title . '<br>';
echo 'Singer: ' . $diskThree->author . '<br>';
echo 'Year: ' . $diskThree->year . '<br>';
echo 'Genre: ' . $diskThree->genre;

// stabilisco negozio dischi
$recordShop = new RecordShop('Disco Mania');

// pusho i miei dischi in negozio con funzione addDisk
$recordShop->addDisk($diskOne);
$recordShop->addDisk($diskTwo);
$recordShop->addDisk($diskThree);

echo '<br><br>';

// stampo a schermo i dischi presenti nel negozio
print_r($recordShop->getDisks());
