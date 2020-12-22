<?php

namespace Ofcold\Constellation;

class Scorpio extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public string $name = 'scorpio';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public string $html = '&#9807;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public array $start = ['month' => '10', 'day' => '24'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public array $end = ['month' => '11', 'day' => '22'];
}
