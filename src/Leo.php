<?php

namespace Ofcold\Constellation;

class Leo extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public $name = 'leo';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public $html = '&#9804;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public $start = ['month' => '7', 'day' => '23'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public $end = ['month' => '8', 'day' => '23'];
}
