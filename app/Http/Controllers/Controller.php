<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function expertises()
    {
        $expertises = [
            'Création des sites web',
            'Maintenance des ordinateurs',
            'réseau',
            'Conception des affiches, logo et autres',
            'Traduction des documents et langue',
            'Cour anglais',
            'Peinture',
            'Décoration, portrait et autres',
            'Décoration intérièure',
            'Coiffure',
            'Location des véhicules',
            'Couverture des fêtes et céremonies par les photos',
            'Coupe et couture',
        ];

        return $expertises;
    }
}
