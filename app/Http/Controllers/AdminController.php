<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Pincode;
use App\Models\SkillEvaluator;
use App\Models\SkillMcq;
use App\Models\SkillResult;
use App\Models\SkillTest;
use App\Models\HrResult;
use App\Models\UserVariable;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard');
    }
}
