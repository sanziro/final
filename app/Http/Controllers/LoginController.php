<?php

namespace App\Http\Controllers;

  use Illuminate\Support\Facades\Validator;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Redirect;
  use Auth;
class LoginController extends Controller
{

  public function doLogin()
{

// validate the info, create rules for the inputs
/*$rules = array(
    'username'    => 'required|alphaNum', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);
// if the validator fails, redirect back to the form
if ($validator->fails()) {
  echo "entro";
    return Redirect::to('/')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'username'     => Input::get('username'),
        'password'  => Input::get('password')
    );
*/
    // attempt to do the login
    $userdata = array(
        'username'  => Input::get('username'),
        'password'  => Input::get('password')
    );
    if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        echo 'entro!';

    } else {
      echo "no entro";

        // validation not successful, send back to form
        return Redirect::to('/algo');

    }

//}
}
}
