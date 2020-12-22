# A simple get constellation by birthday

## Installing
```
composer require ofcold/constellation
```

## Useing
```php
$constellation = CalculatorConstellation::make('1992-01-02');

echo $constellation->name();
echo $constellation->slug();
echo $constellation->html();
```
