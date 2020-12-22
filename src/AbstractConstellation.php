<?php

namespace Ofcold\Constellation;

use Carbon\Carbon;

abstract class AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public $name;

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public string $html;

	/**
	 * Start of zodiac sign
	 *
	 * @var array
	 */
	public array $start;

	/**
	 * End of zodiac sign
	 *
	 * @var array
	 */
	public array $end;

	/**
	 * Determine if given date matches the current zodiac sign
	 *
	 * @param  Carbon $date
	 *
	 * @return bool
	 */
	public function match(Carbon $date): bool
	{
		$start = Carbon::create(
			$date->year,
			$this->start['month'],
			$this->start['day'],
			0,
			0,
			0
		);

		$end = Carbon::create(
			$date->year,
			$this->end['month'],
			$this->end['day'],
			0,
			0,
			0
		)->addDay();

		return $date->between($start, $end);
	}

	/**
	 * Get name of zodiac
	 *
	 * @return string
	 */
	public function name(): string
	{
		return ucfirst($this->name);
	}

	public function slug(): string
	{
		return $this->name;
	}

	/**
	 * Get HTML code of zodiac
	 *
	 * @return string
	 */
	public function html(): string
	{
		return $this->html;
	}

	/**
	 * Cast object to string
	 *
	 * @return string
	 */
	public function __toString()
	{
		return $this->name;
	}
}
