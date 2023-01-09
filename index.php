<?

class Movie {
    public $title;
    public $genre;
    public $year;
    public $vote;

    public function __construct($title, $genre, $year, $vote)
	{
		$this->title = $title;
		$this->genre = $genre;
        //$this->year = $year;
        $this->setYear($year);
        $this->vote = $vote;
	}

    public function setYear($year) {
		if (is_numeric($year) && $year >= 0) {
			$this->year = $year;
		}
		return $year;
	}

    public function getYear() {
		return $this->year;
	}
}

$matrix = new Movie('Matrix', 'Azione', '1999', '5');
$interstellar = new Movie('Interstellar', 'Fantascienza', '2014', '5');
$bad_boys = new Movie('Bad Boys', 'Commedia', '1995', '3');
$transformer = new Movie('Transformer', 'Azione', '2007', '4');


var_dump($matrix);
var_dump($bad_boys);
