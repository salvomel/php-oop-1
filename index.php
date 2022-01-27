<?php

class Movie {

    // Variabili
    public $title;
    public $year;
    public $nation;
    public $director;
    public $vote;

    // Costruttore
    public function __construct($title, $year, $nation, $director, $vote) {
        $this->title = $title;
        $this->year = $year;
        $this->nation = $nation;
        $this->director = $director;
        $this->vote = $vote;
    }

    // Metodi:
    // Film
    public function getMovieName() {
        return $this->title . ' - ' . $this->director;
    }

    // Se voto non presente
    public function getFullMovie() {
        if(!$this->vote) {
            return $this->getMovieName() . ' - Nessuna votazione presente';
        } else {
            return $this->getMovieName() . ' - ' . $this->vote;
        }
    }
}

// Istanze
$dont_lookup = new Movie('Don\'t look up', '2021', 'US', 'Adam McKay', 4);

$midnight_sky = new Movie('Midnight Sky', '2020', 'US', 'George Clooney', 0);

$ad_astra = new Movie('Ad Astra', '2019', 'US', 'James Gray', 5);

?>

<!-- Film 1 -->
<div>
    <ul>
        <li>Titolo: <?php echo $dont_lookup->title; ?></li>
        <li>Anno: <?php echo $dont_lookup->year; ?></li>
        <li>Nazione: <?php echo $dont_lookup->nation; ?></li>
        <li>Regista: <?php echo $dont_lookup->director; ?></li>
    </ul>
</div>

<div>
    <strong>Dati del film con voto:</strong> 
    <?php echo $dont_lookup->getFullMovie(); ?>
</div>

<!-- Film 2 -->
<div>
    <ul>
        <li>Titolo: <?php echo $midnight_sky->title; ?></li>
        <li>Anno: <?php echo $midnight_sky->year; ?></li>
        <li>Nazione: <?php echo $midnight_sky->nation; ?></li>
        <li>Regista: <?php echo $midnight_sky->director; ?></li>
    </ul>
</div>

<div>
    <strong>Dati del film con voto:</strong>    
    <?php echo $midnight_sky->getFullMovie(); ?>
</div>

<!-- Film 3 -->
<div>
    <ul>
        <li>Titolo: <?php echo $ad_astra->title; ?></li>
        <li>Anno: <?php echo $ad_astra->year; ?></li>
        <li>Nazione: <?php echo $ad_astra->nation; ?></li>
        <li>Regista: <?php echo $ad_astra->director; ?></li>
    </ul>
</div>

<div>
    <strong>Dati del film con voto:</strong> 
    <?php echo $ad_astra->getFullMovie(); ?>
</div>