<?php

namespace Ofcold\Constellation\Tests;

use DateTime;
use Mockery;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Ofcold\Constellation\AbstractConstellation;
use Ofcold\Constellation\CalculatorConstellation;

class ConstellationTest extends TestCase
{
	public function tearDown(): void
	{
		Mockery::close();
	}

	public function testMatch()
	{
		$constellation = $this->getMockForAbstractClass(AbstractConstellation::class);
		$constellation->start = ['month' => '6', 'day' => '1'];
		$constellation->end = ['month' => '6', 'day' => '10'];

		$this->assertTrue($constellation->match(Carbon::create(null, 6, 1)));
		$this->assertTrue($constellation->match(Carbon::create(null, 6, 10)));
		$this->assertTrue($constellation->match(Carbon::create(null, 6, 5)));
	}

	public function testMakeFromString()
	{
		$this->assertInstanceOf('Ofcold\Constellation\Aries', CalculatorConstellation::make('1992-03-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Taurus', CalculatorConstellation::make('1992-04-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Gemini', CalculatorConstellation::make('1992-05-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Cancer', CalculatorConstellation::make('1992-06-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Leo', CalculatorConstellation::make('1992-07-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Virgo', CalculatorConstellation::make('1992-08-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Libra', CalculatorConstellation::make('1992-09-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Scorpio', CalculatorConstellation::make('1992-10-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Sagittarius', CalculatorConstellation::make('1992-11-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Capricorn', CalculatorConstellation::make('1992-12-27'));
		$this->assertInstanceOf('Ofcold\Constellation\Capricorn', CalculatorConstellation::make('1992-01-15'));
		$this->assertInstanceOf('Ofcold\Constellation\Aquarius', CalculatorConstellation::make('1992-01-26'));
		$this->assertInstanceOf('Ofcold\Constellation\Pisces', CalculatorConstellation::make('1992-02-27'));
	}

	public function testMakeFromObject()
	{
		$this->assertInstanceOf('Ofcold\Constellation\Aries', CalculatorConstellation::make(new DateTime('1992-03-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Taurus', CalculatorConstellation::make(new DateTime('1992-04-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Gemini', CalculatorConstellation::make(new DateTime('1992-05-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Cancer', CalculatorConstellation::make(new DateTime('1992-06-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Leo', CalculatorConstellation::make(new DateTime('1992-07-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Virgo', CalculatorConstellation::make(new DateTime('1992-08-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Libra', CalculatorConstellation::make(new DateTime('1992-09-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Scorpio', CalculatorConstellation::make(new DateTime('1992-10-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Sagittarius', CalculatorConstellation::make(new DateTime('1992-11-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Capricorn', CalculatorConstellation::make(new DateTime('1992-12-27')));
		$this->assertInstanceOf('Ofcold\Constellation\Capricorn', CalculatorConstellation::make(new DateTime('1992-01-15')));
		$this->assertInstanceOf('Ofcold\Constellation\Aquarius', CalculatorConstellation::make(new DateTime('1992-01-26')));
		$this->assertInstanceOf('Ofcold\Constellation\Pisces', CalculatorConstellation::make(new DateTime('1992-02-27')));
	}
}
