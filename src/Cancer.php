<?php

namespace Ofcold\Constellation;

class Cancer extends AbstractConstellation
{
	/**
	 * Name of zodiac sign
	 *
	 * @var string
	 */
	public $name = 'cancer';

	/**
	 * HTML code of zodiac sign
	 *
	 * @var string
	 */
	public $html = '&#9803;';

	/**
	 * Start day of zodiac sign
	 *
	 * @var array
	 */
	public $start = ['month' => '6', 'day' => '22'];

	/**
	 * End day of zodiac sign
	 *
	 * @var array
	 */
	public $end = ['month' => '7', 'day' => '22'];
}
