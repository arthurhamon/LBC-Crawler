<?php
namespace crawler\lbccrawlerBundle\Twig;

class LbcExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'price' => new \Twig_Filter_Method($this, 'priceFilter'),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = $price . ' €';

        return $price;
    }

    public function getName()
    {
        return 'lbc_extension';
    }
}