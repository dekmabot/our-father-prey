<?php
namespace app\commands;

use yii\console\Controller;

class PreyOurFatherController extends Controller
{
    /**
     * call:
     * > php yii prey-our-father
     *
     * @throws \Exception
     */
    public function actionIndex()
    {
        $myFood = [];
        $myTrespasses = array_fill(0, rand(0, 10), 'debt');
        $trespassersAgainstMe = [];
        
        $res = $this->prey($myFood, $myTrespasses, $trespassersAgainstMe);
        
        print_r($res);
    }
    
    /**
     * @param array $myFood
     * @param array $myTrespasses
     * @param array $trespassersAgainstMe
     *
     * @return array|null
     * @throws \Exception
     */
    final public function prey(array &$myFood, array &$myTrespasses, array $trespassersAgainstMe)
    {
        $OurFather = true;
        $heavenLivers = [$OurFather];
        $will = ['heaven' => $OurFather];
        $glory = [];
        $kingdom = null;
        
        if (!in_array($OurFather, $heavenLivers)) {
            return null;
        }
        
        $glory[] = 'OurFather';
        $kingdom = $OurFather;
        $will['earth'] = $will['heaven'];
        
        $date = date('Y-m-d');
        $myFood[$date] = 'bread';
        
        if (empty($trespassersAgainstMe) && !empty($myTrespasses)) {
            $myTrespasses = [];
        }
        
        do {
            if ($OurFather) {
                break;
            }
        }while (1);
        
        if (!$OurFather) {
            throw new \Exception();
        }
        
        return [
            'kingdom' => $kingdom,
            'power'   => $will,
            'glory'   => $glory,
        ];
    }
}
