<?php

namespace Ofcold\Constellation;

use Carbon\Carbon;

class Capricorn extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public string $name = 'capricorn';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public string $html = '&#9809;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public array $start = ['month' => '12', 'day' => '22'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public array $end = ['month' => '1', 'day' => '20'];

	/**
	 * Determine if given date matches Capricorn
	 *
	 * Since Capricorn extends over two different years we need some special logic
	 *
	 * @param  Carbon $date
	 *
	 * @return boolean
	 */
	public function match(Carbon $date): bool
	{
		return $date->between(
				Carbon::create($date->year, $this->start['month'], $this->start['day'], 0, 0, 0),
				Carbon::create($date->year, 12, 31, 0, 0, 0)->addDay()
			)
			 || $date->between(
			 	Carbon::create($date->year, 1, 1, 0, 0, 0),
			 	Carbon::create($date->year, $this->end['month'], $this->end['day'], 0, 0, 0)->addDay()
			);
	}
}
