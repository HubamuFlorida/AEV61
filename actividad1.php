<?php
class Producto {
    protected $fechaCaducidad;
    protected $numeroLote;

    public function __construct($fechaCaducidad, $numeroLote) {
        $this->fechaCaducidad = $fechaCaducidad;
        $this->numeroLote = $numeroLote;
    }

    public function getFechaCaducidad() {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad($fechaCaducidad) {
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function getNumeroLote() {
        return $this->numeroLote;
    }

    public function setNumeroLote($numeroLote) {
        $this->numeroLote = $numeroLote;
    }

    public function obtenerDetalles() {
        return "Fecha de Caducidad: $this->fechaCaducidad, Número de Lote: $this->numeroLote";
    }
}

class ProductoFresco extends Producto {
    private $fechaEnvasado;
    private $paisOrigen;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen) {
        parent::__construct($fechaCaducidad, $numeroLote);
        $this->fechaEnvasado = $fechaEnvasado;
        $this->paisOrigen = $paisOrigen;
    }

    public function getFechaEnvasado() {
        return $this->fechaEnvasado;
    }

    public function setFechaEnvasado($fechaEnvasado) {
        $this->fechaEnvasado = $fechaEnvasado;
    }

    public function getPaisOrigen() {
        return $this->paisOrigen;
    }

    public function setPaisOrigen($paisOrigen) {
        $this->paisOrigen = $paisOrigen;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Fecha de Envasado: $this->fechaEnvasado, País de Origen: $this->paisOrigen";
    }
}

class ProductoRefrigerado extends Producto {
    private $codigoOrganismo;
    private $fechaEnvasado;
    private $temperaturaMantenimiento;
    private $paisOrigen;

    public function __construct($fechaCaducidad, $numeroLote, $codigoOrganismo, $fechaEnvasado, $temperaturaMantenimiento, $paisOrigen) {
        parent::__construct($fechaCaducidad, $numeroLote);
        $this->codigoOrganismo = $codigoOrganismo;
        $this->fechaEnvasado = $fechaEnvasado;
        $this->temperaturaMantenimiento = $temperaturaMantenimiento;
        $this->paisOrigen = $paisOrigen;
    }

    public function getCodigoOrganismo() {
        return $this->codigoOrganismo;
    }

    public function setCodigoOrganismo($codigoOrganismo) {
        $this->codigoOrganismo = $codigoOrganismo;
    }

    public function getFechaEnvasado() {
        return $this->fechaEnvasado;
    }

    public function setFechaEnvasado($fechaEnvasado) {
        $this->fechaEnvasado = $fechaEnvasado;
    }

    public function getTemperaturaMantenimiento() {
        return $this->temperaturaMantenimiento;
    }

    public function setTemperaturaMantenimiento($temperaturaMantenimiento) {
        $this->temperaturaMantenimiento = $temperaturaMantenimiento;
    }

    public function getPaisOrigen() {
        return $this->paisOrigen;
    }

    public function setPaisOrigen($paisOrigen) {
        $this->paisOrigen = $paisOrigen;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Código del Organismo: $this->codigoOrganismo, Fecha de Envasado: $this->fechaEnvasado, Temperatura Mantenimiento: {$this->temperaturaMantenimiento}°C, País de Origen: $this->paisOrigen";
    }
}

class ProductoCongelado extends Producto {
    private $fechaEnvasado;
    private $paisOrigen;
    private $temperaturaMantenimiento;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento) {
        parent::__construct($fechaCaducidad, $numeroLote);
        $this->fechaEnvasado = $fechaEnvasado;
        $this->paisOrigen = $paisOrigen;
        $this->temperaturaMantenimiento = $temperaturaMantenimiento;
    }

    public function getFechaEnvasado() {
        return $this->fechaEnvasado;
    }

    public function setFechaEnvasado($fechaEnvasado) {
        $this->fechaEnvasado = $fechaEnvasado;
    }

    public function getPaisOrigen() {
        return $this->paisOrigen;
    }

    public function setPaisOrigen($paisOrigen) {
        $this->paisOrigen = $paisOrigen;
    }

    public function getTemperaturaMantenimiento() {
        return $this->temperaturaMantenimiento;
    }

    public function setTemperaturaMantenimiento($temperaturaMantenimiento) {
        $this->temperaturaMantenimiento = $temperaturaMantenimiento;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Fecha de Envasado: $this->fechaEnvasado, País de Origen: $this->paisOrigen, Temperatura Mantenimiento: {$this->temperaturaMantenimiento}°C";
    }
}

class ProductoCongeladoAire extends ProductoCongelado {
    private $composicionAire;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento, $composicionAire) {
        parent::__construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento);
        $this->composicionAire = $composicionAire;
    }

    public function getComposicionAire() {
        return $this->composicionAire;
    }

    public function setComposicionAire($composicionAire) {
        $this->composicionAire = $composicionAire;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Composición del Aire: $this->composicionAire";
    }
}

class ProductoCongeladoAgua extends ProductoCongelado {
    private $salinidadAgua;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento, $salinidadAgua) {
        parent::__construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento);
        $this->salinidadAgua = $salinidadAgua;
    }

    public function getSalinidadAgua() {
        return $this->salinidadAgua;
    }

    public function setSalinidadAgua($salinidadAgua) {
        $this->salinidadAgua = $salinidadAgua;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Salinidad del Agua: $this->salinidadAgua g/L";
    }
}

class ProductoCongeladoNitrogeno extends ProductoCongelado {
    private $metodoCongelacion;
    private $tiempoExposicion;

    public function __construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento, $metodoCongelacion, $tiempoExposicion) {
        parent::__construct($fechaCaducidad, $numeroLote, $fechaEnvasado, $paisOrigen, $temperaturaMantenimiento);
        $this->metodoCongelacion = $metodoCongelacion;
        $this->tiempoExposicion = $tiempoExposicion;
    }

    public function getMetodoCongelacion() {
        return $this->metodoCongelacion;
    }

    public function setMetodoCongelacion($metodoCongelacion) {
        $this->metodoCongelacion = $metodoCongelacion;
    }

    public function getTiempoExposicion() {
        return $this->tiempoExposicion;
    }

    public function setTiempoExposicion($tiempoExposicion) {
        $this->tiempoExposicion = $tiempoExposicion;
    }

    public function obtenerDetalles() {
        $detallesGenerales = parent::obtenerDetalles();
        return $detallesGenerales . ", Método de Congelación: $this->metodoCongelacion, Tiempo de Exposición: $this->tiempoExposicion segundos";
    }
}

$productoFresco = new ProductoFresco('2025-12-01', 'L12345', '2025-01-20', 'España');
echo $productoFresco->obtenerDetalles() . "<br><br>";

$productoRefrigerado = new ProductoRefrigerado('2025-11-15', 'R67890', 'A123', '2025-01-18', 4, 'Francia');
echo $productoRefrigerado->obtenerDetalles() . "<br><br>";

$productoCongeladoAire = new ProductoCongeladoAire('2025-10-10', 'C11223', '2025-01-25', 'Alemania', -18, '78% Nitrógeno, 21% Oxígeno, 1% Dióxido de Carbono');
echo $productoCongeladoAire->obtenerDetalles() . "<br><br>";
?>
