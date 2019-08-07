<?php

namespace Ofcold\Constellation\Tests;

use Carbon\Carbon;
use DateTime;
use Mockery;
use Ofcold\Constellation\Aries;
use Ofcold\Constellation\Taurus;
use Ofcold\Constellation\Gemini;
use Ofcold\Constellation\Cancer;
use Ofcold\Constellation\Leo;
use Ofcold\Constellation\Virgo;
use Ofcold\Constellation\Libra;
use Ofcold\Constellation\Scorpio;
use Ofcold\Constellation\Sagittarius;
use Ofcold\Constellation\Capricorn;
use Ofcold\Constellation\Aquarius;
use Ofcold\Constellation\Pisces;
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
		$this->assertInstanceOf(Aries::class, CalculatorConstellation::make('1992-03-27'));
		$this->assertInstanceOf(Taurus::class, CalculatorConstellation::make('1992-04-27'));
		$this->assertInstanceOf(Gemini::class, CalculatorConstellation::make('1992-05-27'));
		$this->assertInstanceOf(Cancer::class, CalculatorConstellation::make('1992-06-27'));
		$this->assertInstanceOf(Leo::class, CalculatorConstellation::make('1992-07-27'));
		$this->assertInstanceOf(Virgo::class, CalculatorConstellation::make('1992-08-27'));
		$this->assertInstanceOf(Libra::class, CalculatorConstellation::make('1992-09-27'));
		$this->assertInstanceOf(Scorpio::class, CalculatorConstellation::make('1992-10-27'));
		$this->assertInstanceOf(Sagittarius::class, CalculatorConstellation::make('1992-11-27'));
		$this->assertInstanceOf(Capricorn::class, CalculatorConstellation::make('1992-12-27'));
		$this->assertInstanceOf(Capricorn::class, CalculatorConstellation::make('1992-01-15'));
		$this->assertInstanceOf(Aquarius::class, CalculatorConstellation::make('1992-01-26'));
		$this->assertInstanceOf(Pisces::class, CalculatorConstellation::make('1992-02-27'));
	}

	public function testMakeFromObject()
	{
		$this->assertInstanceOf(Aries::class, CalculatorConstellation::make(new DateTime('1992-03-27')));
		$this->assertInstanceOf(Taurus::class, CalculatorConstellation::make(new DateTime('1992-04-27')));
		$this->assertInstanceOf(Gemini::class, CalculatorConstellation::make(new DateTime('1992-05-27')));
		$this->assertInstanceOf(Cancer::class, CalculatorConstellation::make(new DateTime('1992-06-27')));
		$this->assertInstanceOf(Leo::class, CalculatorConstellation::make(new DateTime('1992-07-27')));
		$this->assertInstanceOf(Virgo::class, CalculatorConstellation::make(new DateTime('1992-08-27')));
		$this->assertInstanceOf(Libra::class, CalculatorConstellation::make(new DateTime('1992-09-27')));
		$this->assertInstanceOf(Scorpio::class, CalculatorConstellation::make(new DateTime('1992-10-27')));
		$this->assertInstanceOf(Sagittarius::class, CalculatorConstellation::make(new DateTime('1992-11-27')));
		$this->assertInstanceOf(Capricorn::class, CalculatorConstellation::make(new DateTime('1992-12-27')));
		$this->assertInstanceOf(Capricorn::class, CalculatorConstellation::make(new DateTime('1992-01-15')));
		$this->assertInstanceOf(Aquarius::class, CalculatorConstellation::make(new DateTime('1992-01-26')));
		$this->assertInstanceOf(Pisces::class, CalculatorConstellation::make(new DateTime('1992-02-27')));
	}
}
