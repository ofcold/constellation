<?php

namespace Ofcold\Constellation;

use Carbon\Carbon;

class CalculatorConstellation
{
	/**
	 * Returns array of all constellation classnames
	 *
	 * @var array
	 */
	protected array $constellations = [
		Aquarius::class,
		Aries::class,
		Cancer::class,
		Capricorn::class,
		Gemini::class,
		Leo::class,
		Libra::class,
		Pisces::class,
		Sagittarius::class,
		Scorpio::class,
		Taurus::class,
		Virgo::class,
	];

	/**
	 * Key constellation name for given date
	 *
	 * @param  mixed $date
	 *
	 * @return null|AbstractConstellation
	 */
	public static function make(mixed $date)
	{
		$date = static::getDate($date);

		foreach (static::$constellations as $classname) {
			$instance = new $classname;
			if ($instance->match($date)) {
				return $instance;
			}
		}
	}

	/**
	 * Reads mixed date into Carbon object
	 *
	 * @param mixed $date
	 *
	 * @return Carbon
	 *
	 * @throws \RuntimeException
	 */
	protected static function getDate(mixed $date): Carbon
	{
		return match(true) {
			is_string($date) => Carbon::parse($date),
			is_int($date) => Carbon::createFromTimestamp($date),
			is_a($date, 'DateTime') => Carbon::instance($date),
			default => throw new \RuntimeException("Unable to read date ({$date})")
		};
	}
}
