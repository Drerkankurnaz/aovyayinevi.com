<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Institution;
use App\Models\School;
use App\Models\Service;
use App\Models\Autism;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function siteCommonData()
    {
        $commonModels = new \stdClass();

        $commonModels->services = Service::orderBy('id')->get();
        $commonModels->autism = Autism::orderBy('id')->get();
        $commonModels->about = About::orderBy('id')->get();
        $commonModels->schools = School::orderBy('id')->get();
        $commonModels->institution = Institution::orderBy('id')->get();

        return $commonModels;
    }
}
