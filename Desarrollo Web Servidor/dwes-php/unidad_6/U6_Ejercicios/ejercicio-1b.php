<?php
class Persona
{
    protected $nombre, $apellidos, $edad;

    public function __construct(string $nombre, string $apellidos, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getNombreCompleto(): string
    {
        return "$this->nombre $this->apellidos";
    }
}
class Empleado extends Persona
{
    private $sueldo, $telefonos = [];
    public static $sueldoTope;

    public function __construct(string $nombre, string $apellidos, int $edad, float $sueldo, array | string $telefonos): void
    {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;

        if ($sueldo > self::$sueldoTope) self::$sueldoTope = $sueldo;

        if (!is_array($telefonos)) {
            $this->telefonos[] = $telefonos;
        } else {
            foreach ($telefonos as $telefono) {
                $this->telefonos[] = $telefono;
            }
        }
    }

    public function getSueldoTope(): int
    {
        return self::$sueldoTope;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }
    public function setSueldo(float $sueldo): void
    {
        $this->sueldo = $sueldo;
    }
    public function debePagarImpuestos(): bool
    {
        return ($this->edad >= 21) && ($this->sueldo > 3333);
    }

    public function getTelefono(int $posicion = 0): int
    {
        return $this->telefonos[$posicion];
    }
    public function listarTelefonos(): string
    {
        $lista = "";
        foreach ($this->telefonos as $telefono) {
            $lista .= "$telefono, ";
        }
        return $lista;
    }
    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }
    public function vaciarTelefonos(): void
    {
        $this->telefonos = [];
    }
}
