<?php


namespace App\Consultants;


class PersonalTrainer
{
    /**
     * @var ClinicCounselor
     */
    protected $c;
    /**
     * @var DietExpert
     */
    protected $d;
    /**
     * @var FitnessCoach
     */
    protected $f;

    /**
     * PersonalTrainer constructor.
     * @param ClinicCounselor $c
     * @param DietExpert $d
     * @param FitnessCoach $f
     */
    public function __construct(
        ClinicCounselor $c,
        DietExpert $d,
        FitnessCoach $f
    ) {
        $this->c = $c;
        $this->d = $d;
        $this->f = $f;
    }

    function recommend($preferredTypes, $isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime)
    {
        foreach ($preferredTypes as $preferredType) {
            switch ($preferredType) {
                case 'DIET':
                    return $this->get($this->d, $isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime);
                case 'FITNESS':
                    return $this->get($this->f, $isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime);
                case 'CLINIC':
                    return $this->get($this->c, $isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime);
            }
        }
    }

    public function get($obj, $isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime)
    {
        return $obj->getㅇSolution($isRich, $hasAStrongWill, $hasGoodHealth, $hasEnoughTime);
    }
}
