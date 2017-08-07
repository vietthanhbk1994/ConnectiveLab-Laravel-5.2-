<?php
    /*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 02/08/2016
    * CONTENT: Receive contact and send mail
    *----------------------------
    */
    /*
    *----------------------------
    * RECREATE: Ngo-Viet-Thanh
    * DATE: 08/08/2016
    * CONTENT: Receive contact and send mail
    *----------------------------
    */

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends InfyOmBaseController {


    public function __construct() {
    }

    /**
     * Display a listing of the Contact.
     *
     * @param Request $request
     * @return Response
     */
    public function index() {
        return view('contacts.index');
    }

    /**
     * Store a newly created Contact in storage.
     *
     * @param CreateContactRequest $request
     *
     * @return Response
     */
    public function store(Request $request) {
        //Validate
        $validator = Validator::make($request->all(), [
                    'name' => 'required|max:100',
                    'email' => 'required|email|max:100',
                    'company' => 'required|max:100',
                    'content' => 'required',
        ]);
        //Send error and come back #Contact
        if ($validator->fails()) {
            return redirect(url('/#/contact'))
                            ->withErrors($validator)
                            ->withInput();
        }

        //Create content mail
        if (\Mail::send('emails.contact', array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'company' => $request->company,
                    'user_message' => $request->content
                        ), function($message) {
                    $message->from(config('app.email_noreply'));
                    $message->to(config('app.email_admin'), 'Admin')->subject('CONTACTS BOOTCAMP');
                })) {
            Flash::success('Contact successfully.');
        } else {
            Flash::error('Contact error! Try again.');
        }
        return redirect(url('/#/contact'));
    }

}