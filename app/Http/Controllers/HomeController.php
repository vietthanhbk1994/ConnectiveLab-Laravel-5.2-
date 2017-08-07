<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feedback;
use App\Models\Technology;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {     
        $services = \App\Models\Service::all();
        /*
         * ----------------------------
         * CREATE: Ngo-Viet-Thanh
         * DATE: 03/08/2016
         * CONTENT: Load feedback
         * ----------------------------
         */
        $feedbacks = Feedback::all()
                ->sortBy('updated_at')
        ;
        
        /*
         * ----------------------------
         * CREATE: Pham Thi Duyen
         * DATE: 03/08/2016
         * CONTENT: db technology for home
         * ----------------------------
         */
        $technologies = Technology::all()
                ->sortBy('updated_at');
        /**
         * ----------------------------
         * CREATE: VuNgocSon
         * DATE: 3-8-1026
         * CONTENT: Add controller load member data to front - end
         * ----------------------------
         */
        $members = \App\Models\Member::all();
        return view('index')
                ->with('feedbacks', $feedbacks)
                ->with('technologies',$technologies)
                ->with('services',$services)
                ->with('members',$members)
                ;
        
        

    }

}
