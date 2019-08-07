<?php

namespace Ofcold\Constellation;

use Carbon\Carbon;

class CalculatorConstellation
{
	/**
	 * Key constellation name for given date
	 *
	 * @param  mixed $date
	 *
	 * @return void|string
	 */
	public static function make($date)
	{
		$date = static::getDate($date);

		foreach (static::constellationClassnames() as $classname) {
			$constellation = new $classname;
			if ($constellation->match($date)) {
				return $constellation;
			}
		}
	}

	/**
	 * Reads mixed date into Carbon object
	 *
	 * @param mixed $date
	 */
	protected static function getDate($date)
	{
		switch (true) {
			case is_string($date):
				return Carbon::parse($date);

			case is_int($date):
				return Carbon::createFromTimestamp($date);

			case is_a($date, 'DateTime'):
				return Carbon::instance($date);

			default:
				throw new \RuntimeException(
					"Unable to read date ({$date})"
				);
		}
	}

	/**
	 * Returns array of all constellation classnames
	 *
	 * @return array
	 */
	protected static function constellationClassnames(): array
	{
		return [
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
	}
}
