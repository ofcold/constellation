<?php

namespace Ofcold\Constellation;

class Taurus extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public $name = 'taurus';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public $html = '&#9801;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public $start = ['month' => '4', 'day' => '21'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public $end = ['month' => '5', 'day' => '21'];
}
