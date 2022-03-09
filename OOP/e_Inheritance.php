<?php 
    class Player {
        public $nama, $hp, $mp, $weapon;

        function __construct($nama = "", $hp = 0, $mp = 0, $weapon = ""){
            $this->nama = $nama;
            $this->hp = $hp;
            $this->mp = $mp;
            $this->weapon = $weapon;
        }

        function getinfoPlayer() {
            $str = "{$this->nama} || {$this->hp} & {$this->mp}";
            return $str;
        }
    }

    class Knight extends Player {
        public $weapon;

        function __construct($nama = "", $hp = 0, $mp = 0, $weapon) {
            parent::__construct($nama, $hp, $mp);
            $this->weapon = $weapon;
        }

        function getInfoKnight() {
            $str = "Knight: " . parent::getinfoPlayer() . " ({$this->weapon})";
            return $str;
        }
    }

    class Archer extends Player {
        public $weapon;

        function __construct($nama = "", $hp = 0, $mp = 0, $weapon) {
            parent::__construct($nama, $hp, $mp);
            $this->weapon = $weapon;
        }

        function getInfoArcher() {
            $str = "Archer: " . parent::getinfoPlayer() . " ({$this->weapon})";
            return $str;
        }
    }

    $player1 = new Knight("Ucup", 100, 50, "Panci");
    echo $player1->getInfoKnight();

    echo "\n";

    $player2 = new Archer("Agus", 70, 100, "Ketapel");
    echo $player2->getInfoArcher();
?>