<?php
namespace CodeLab;
class Polish
{
    protected $value;
    protected $arr = array(
        1000 => 'tysiąc',
        900 => 'dziewięćset',
        800 => 'osiemset',
        700 => 'siedemnset',
        600 => 'sześćset',
        500 => 'pięćset',
        400 => 'czterysta',
        300 => 'trzysta',
        200 => 'dwieście',
        100 => 'sto',
        90 => 'dziewięćdziesiąt',
        80 => 'osiemdziesiąt',
        70 => 'siedemdziesiąt',
        60 => 'sześdziesiąt',
        50 => 'pięćdziesiąt',
        40 => 'czterdzieści',
        30 => 'trzyedzieści',
        20 => 'dwadzieścia',
        19 => 'dziewiętnaście',
        18 => 'osiemnaście',
        17 => 'siedemnaście',
        16 => 'szesnaście',
        15 => 'piętnaście',
        14 => 'cztwrnaście',
        13 => 'trzynaście',
        12 => 'dwanaście',
        11 => 'jedenaście',
        10 => 'dziesięć',
        9 => 'dziewięć',
        8 => 'osiem',
        7 => 'siedem',
        6 => 'sześć',
        5 => 'pięć',
        4 => 'cztery',
        3 => 'trzy',
        2 => 'dwa',
        1 => 'jeden',
    );

    public function polish($number)
    {
        foreach ($this->arr as $key => $value) {

            if ($number >= $key) {
                return $value . ' ' . $this->polish($number - $key);
            }
        }
        return '';
    }

}
