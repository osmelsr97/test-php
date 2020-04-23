<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Printer;

final class PrinterTest extends TestCase
{
    public function testReturnString(): void
    {
        $this->assertIsString(Printer::print());
    }

    public function testCorrect3(): void
    {
        $text = Printer::print();
        $this->assertEquals($text[13], '4');
    }

    public function testCorrect5(): void
    {
        $text = Printer::print();
        $this->assertEquals($text[14], 'T');
    }

    public function testCorrect3and5(): void
    {
        $text = Printer::print();
        $this->assertEquals($text[75], 'I');
    }
}