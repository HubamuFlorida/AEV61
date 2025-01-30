<?php
class Deporte {
    protected $nombre;
    protected $numeroJugadores;
    protected $duracion;

    public function __construct($nombre, $numeroJugadores, $duracion) {
        $this->nombre = $nombre;
        $this->numeroJugadores = $numeroJugadores;
        $this->duracion = $duracion;
    }

    public function getInformacion() {
        return "Deporte: " . $this->nombre . ", Jugadores: " . $this->numeroJugadores . ", Duración: " . $this->duracion . " minutos.";
    }

    public function obtenerPuntuacion() {
        return "Puntuación desconocida.";
    }
}

class Futbol extends Deporte {
    public function __construct() {
        parent::__construct("Futbol", 11, 90);
    }

    public function obtenerPuntuacion() {
        return "Puntuación: Goles";
    }
}

class Baloncesto extends Deporte {
    public function __construct() {
        parent::__construct("Baloncesto", 5, 48);
    }

    public function obtenerPuntuacion() {
        return "Puntuación: Canastas";
    }
}

class Rugby extends Deporte {
    public function __construct() {
        parent::__construct("Rugby", 15, 80);
    }

    public function obtenerPuntuacion() {
        return "Puntuación: Ensayos";
    }
}

$deportes = [];

for ($i = 0; $i < 5; $i++) {
    $tipoDeporte = rand(1, 3);
    if ($tipoDeporte == 1) {
        $deportes[] = new Futbol();
    } elseif ($tipoDeporte == 2) {
        $deportes[] = new Baloncesto();
    } else {
        $deportes[] = new Rugby();
    }
}

    /*NO HE SABIDO COMO CONTINUAR*/
?>
