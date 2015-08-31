<?php
namespace CodeLab;
class Roman
{
    protected $value;
    protected $arr = array(
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    );


    public function roman($year)
    {
        foreach ($this->arr as $key => $value) {

            if ($year >= $key) {
                return $value . $this->roman($year - $key);
            }
        }
        return '';
    }

}
