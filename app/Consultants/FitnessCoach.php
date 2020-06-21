<?php


namespace App\Consultants;


class FitnessCoach
{
    public $solutions = [
        'Conditioning',
        'Cardiovascular',
        'Strength',
    ];

    public $gx_solutions = [
        'Yoga',
        'Spinning',
        'Zumba',
        'Body Sculpt',
    ];

    public function getSolution($isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime)
    {
        if (!$isRich) {
            return 'Cardiovascular';
        } elseif ($hasGoodHealth && $hasAStrongWill) {
            return 'Conditioning';
        } elseif (!$hasAStrongWill) {
            return array_rand(array_flip($this->gx_solutions), 1);
        }

        return array_rand(array_flip($this->solutions + $this->gx_solutions), 1);
    }

}
