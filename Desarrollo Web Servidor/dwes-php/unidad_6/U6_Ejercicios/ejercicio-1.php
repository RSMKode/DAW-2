<?php
class Empleado
{
    private $nombre, $apellidos, $sueldo, $telefonos = [];
    private static $sueldoTope;

    public function __construct(string $nombre, string $apellidos, float $sueldo = 1000)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->sueldo = $sueldo;

        if ($sueldo > self::$sueldoTope) self::$sueldoTope = $sueldo;
    }

    public function getNombreCompleto(): string
    {
        return "$this->nombre $this->apellidos";
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
        return $this->sueldo > 3333;
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
