<?php


namespace App\Consultants;


class ClinicCounselor
{
    public $solutions = [
        'Medications',
        'Liposuction',
        'Gastric Bypass',
    ];

    public function getSolution($isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime)
    {
        if ($isRich && !$hasAStrongWill) {
            return 'Gastric Bypass';
        } elseif ($hasGoodHealth) {
            return 'Medications';
        }
        return array_rand(array_flip($this->solutions), 1);
    }
}
