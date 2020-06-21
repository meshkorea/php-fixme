<?php


namespace App\Consultants;


class DietExpert
{
    public $solutions = [
        'Intermittent Fasting',
        'Eat less please',
        'LCHF',
    ];

    public function getSolution($isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime)
    {
        if ($hasAStrongWill) {
            return 'Eat less please';
        } else {
            if ($isRich) {
                return 'LCHF';
            }
        }

        return array_rand(array_flip($this->solutions), 1);
    }

}
