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
	public $html;

	/**
	 * Start of zodiac sign
	 *
	 * @var array
	 */
	public $start;

	/**
	 * End of zodiac sign
	 *
	 * @var array
	 */
	public $end;

	/**
	 * Constellations（Data from Wikipedia https://zh.wikipedia.org/wiki/%E8%A5%BF%E6%B4%8B%E5%8D%A0%E6%98%9F%E8%A1%93）
	 *
	 * @var  array
	 */
	protected $locales = [
		'zh-CN'	=> [
			'Aquarius' => '水瓶座',
			'Pisces' => '双鱼座',
			'Aries' => '白羊座',
			'Taurus' => '金牛座',
			'Gemini' => '双子座',
			'Cancer' => '巨蟹座',
			'Leo' => '狮子座',
			'Virgo' => '处女座',
			'Libra' => '天秤座',
			'Scorpio' => '天蝎座',
			'Sagittarius' => '射手座',
			'Capricorn' => '魔羯座',
		],
		'en'	=> [
			'Aquarius' => 'Aquarius',
			'Pisces' => 'Pisces',
			'Aries' => 'Aries',
			'Taurus' => 'Taurus',
			'Gemini' => 'Gemini',
			'Cancer' => 'Cancer',
			'Leo' => 'Leo',
			'Virgo' => 'Virgo',
			'Libra' => 'Libra',
			'Scorpio' => 'Scorpio',
			'Sagittarius' => 'Sagittarius',
			'Capricorn' => 'Capricorn',
		],
		'de'	=> [
			'aries' => 'Widder',
			'taurus' => 'Stier',
			'gemini' => 'Zwillinge',
			'cancer' => 'Krebs',
			'leo' => 'Löwe',
			'virgo' => 'Jungfrau',
			'libra' => 'Waage',
			'scorpio' => 'Skorpion',
			'sagittarius' => 'Schütze',
			'capricorn' => 'Steinbock',
			'aquarius' => 'Wassermann',
			'pisces' => 'Fische'
		],
		'ru'	=> [
			'aries' => 'Овен',
			'taurus' => 'Телец',
			'gemini' => 'Близнецы',
			'cancer' => 'Рак',
			'leo' => 'Лев',
			'virgo' => 'Дева',
			'libra' => 'Весы',
			'scorpio' => 'Скорпион',
			'sagittarius' => 'Стрелец',
			'capricorn' => 'Козерог',
			'aquarius' => 'Водолей',
			'pisces' => 'Рыбы'
		]
	];

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
	 * Get localized name of zodiac sign
	 *
	 * @param  string $locale
	 *
	 * @return string
	 */
	public function localized(string $locale = 'zh-CN'): string
	{
		$constellations = $this->locales[$locale] ?? $this->locales['zh-CN'];

		return $constellations[ucfirst($this->name())];
	}

	/**
	 * Get name of zodiac
	 *
	 * @return string
	 */
	public function name(): string
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
