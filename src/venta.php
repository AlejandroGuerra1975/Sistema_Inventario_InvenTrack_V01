<?php
namespace App;

class Venta
{
    private int $id;
    private float $total;
    private string $estado; // "pendiente", "confirmada", "anulada"
    private array $detalles = []; 

    public function __construct(int $id, array $detalles = [])
    {
        $this->id = $id;
        $this->detalles = $detalles;
        $this->total = 0;
        $this->estado = 'pendiente';
    }

    public function calcularTotal(): float
    {
        $suma = 0;
        foreach ($this->detalles as $item) {
            $suma += $item['cantidad'] * $item['precioUnitario'];
        }
        $this->total = $suma;
        return $this->total;
    }

    public function confirmar(): void
    {
        if ($this->total <= 0) {
            throw new \Exception('No se puede confirmar una venta sin total calculado.');
        }
        $this->estado = 'confirmada';
    }

    public function anular(): void
    {
        $this->estado = 'anulada';
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getTotal(): float
    {
        return $this->total;
    }
}