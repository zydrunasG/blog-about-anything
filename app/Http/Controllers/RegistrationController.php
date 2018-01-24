<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
  /*     $this->validate(request(), [

        ]);
*/
        $request->persist();

        session()->flash('message', 'Thanks for register');
        return redirect()->home();
    }

}
