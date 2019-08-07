<?php

namespace Ofcold\Constellation\Tests;

use Mockery;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Ofcold\Constellation\AbstractConstellation;

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
}
