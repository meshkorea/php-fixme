<?php

namespace App\Http\Controllers;

use App\Consultants\ClinicCounselor;
use App\Consultants\DietExpert;
use App\Consultants\FitnessCoach;
use App\Consultants\PersonalTrainer;
use Illuminate\Http\Request;

class FatController extends Controller
{
    /* client's request sample
          "preferred_types_order": [
            "FITNESS",
            "DIET",
            "CLINIC"
          ],
          "life_style_tag": [
            "rich",
            "enough_time",
            "healthy"
          ]
        }
     */
    public function howToLoseWeight(Request $request)
    {
        $is_rich        = in_array('rich',          $request->get('life_style_tag'));
        $is_strong_will = in_array('strong_will',   $request->get('life_style_tag'));
        $is_good_health = in_array('healthy',       $request->get('life_style_tag'));
        $is_enough_time = in_array('enough_time',   $request->get('life_style_tag'));

        $c = new ClinicCounselor();
        $d = new DietExpert();
        $f = new FitnessCoach();
        $p = new PersonalTrainer($c, $d, $f);
        $result = $p->recommend($request->get('preferred_types_order'), $is_rich, $is_strong_will, $is_good_health, $is_enough_time);

        return response()->json($result);
    }
}
