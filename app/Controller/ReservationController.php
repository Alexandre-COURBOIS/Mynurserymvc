<?php
namespace App\Controller;

use App\Model\EnfantModel;
use App\Service\Form;
use App\Service\Validation;
use App\Weblitzer\Controller;
use App\Weblitzer\Model;

class ReservationController extends Controller
{

    public function reservation()
    {
        $this->render('app.default.reservation',array(
        ));
    }
}