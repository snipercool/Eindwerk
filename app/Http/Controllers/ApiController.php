<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function getFaseOne()
    {
        return Course::where('obligated', 'yes')->join('course_fase', function ($join){$join->on('courses.id', '=', 'course_fase.course_id')->where('course_fase.fase', '=', 1);} )->orderBy('semester')->get(); 
    }

    public function getFaseTwo()
    {
        return Course::where('obligated', 'yes')->join('course_fase', function ($join){$join->on('courses.id', '=', 'course_fase.course_id')->where('course_fase.fase', '=', 2);} )->orderBy('semester')->get(); 
    }

    public function getFaseThree()
    {
        return Course::where('obligated', 'yes')->join('course_fase', function ($join){$join->on('courses.id', '=', 'course_fase.course_id')->where('course_fase.fase', '=', 3);} )->orderBy('semester')->get(); 
    }


    public function getExamptions()
    {
        
    }

    public function getIspFaseOne()
    {
       
    }
    public function getIspFaseTwo()
    {
        
    }
    public function getIspFaseThree()
    {
        
    }
    public function getIspFaseFour()
    {
        
    }
}
