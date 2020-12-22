<?php

namespace Ofcold\Constellation;

class Sagittarius extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public string $name = 'sagittarius';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public string $html = '&#9808;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public array $start = ['month' => '11', 'day' => '23'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public array $end = ['month' => '12', 'day' => '21'];
}
