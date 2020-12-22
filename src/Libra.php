<?php

namespace Ofcold\Constellation;

class Libra extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public string $name = 'libra';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public string $html = '&#9806;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public array $start = ['month' => '9', 'day' => '24'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public array $end = ['month' => '10', 'day' => '23'];
}
