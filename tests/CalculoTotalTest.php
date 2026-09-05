<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Venta;

class CalculoTotalTest extends TestCase
{
    public function testCalcularTotalConVariosDetalles()
    {
        $venta = new Venta(1, [
            ['cantidad' => 5, 'precioUnitario' => 1000],
            ['cantidad' => 2, 'precioUnitario' => 3000],
        ]);

        $this->assertEquals(11000, $venta->calcularTotal());
    }

    public function testCalcularTotalSinDetalles()
    {
        $venta = new Venta(2, []);
        $this->assertEquals(0, $venta->calcularTotal());
    }

    public function testConfirmarCambiaEstadoDespuesDeCalcularTotal()
    {
        $venta = new Venta(3, [['cantidad' => 1, 'precioUnitario' => 500]]);
        $venta->calcularTotal();
        $venta->confirmar();

        $this->assertEquals('confirmada', $venta->getEstado());
    }

    public function testAnularCambiaEstado()
    {
        $venta = new Venta(4, []);
        $venta->anular();

        $this->assertEquals('anulada', $venta->getEstado());
    }
}