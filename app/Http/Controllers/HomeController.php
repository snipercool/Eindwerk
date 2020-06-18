<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseFase;
use App\Education;
use App\Isp;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = User::first('id', '=', Auth::user()->id);

        $data['education'] = $user->education()->get();
        //get user year
        $getyearofjoin = $user->get('year_of_join');
        $getyear = $getyearofjoin[0]['year_of_join'];
        $data['yearOne'] = (int)$getyear;
        $data['yearTwo'] = $data['yearOne']+1;
        $data['yearThree'] = $data['yearOne']+2;
        $data['yearFour'] = $data['yearOne']+3;
        $data['yearFive'] = $data['yearOne']+4;

        $data['points'] = 0;

        $data['isp'] = [];

        //$check_isp = Isp::user();

        /* if (Isp) {
            # code...
        } */
        

        return view('home')->with('data', $data);
    }

    public function getChoices()
    {
        $user = User::first('id', '=', Auth::user()->id);

        $data['education'] = $user->education()->get();
        return Course::where([
            'educations_id' => $data['education'][0]->id,
            'obligated' => 'no'
        ])->join('course_fase', function ($join){$join->on('courses.id', '=', 'course_fase.course_id');} )
        ->get();
    }

    public function storeIsp()
    {
        foreach ($postdata['fasedata'] as $key => $fasedata) {
            Isp::create([
                'student_id' => Auth::user()->id,
                'courses' => '',
                'fase' => '',
            ]);
        }
    }

    
}
