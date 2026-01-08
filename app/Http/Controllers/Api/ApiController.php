<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Log;
use DB;
use PDF;
use Mail;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Passport\Passport;

use Illuminate\Support\Facades\URL;

use App\Models\User;
use App\Models\Image;
use App\Classes\Functions;
use App\Classes\RegularFunctions;

use System\Employee\Models\Employee;
use System\Department\Models\Department;
use System\Department\BusinessLogic\DepartmentLogic;

use System\UserRoles\Models\UserRole;
use App\Http\Controllers\Api\IssueTokenTrait;

class ApiController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | ApiController Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles REST api requests from mobile application.
    |
    */

    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct(Functions $common, RegularFunctions $rcommon)
    {
        $this->common = $common;
        $this->rcommon = $rcommon;
    }
}