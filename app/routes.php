<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return Redirect::to('home.html');
});


Route::get('/home.html', function()
{
    return View::make('home');
});

Route::get('/contact.html', function()
{
    return View::make('contact');
});

Route::post('/contact.html', function()
{
    // ntb3 kol elinputs el2wl
    $name = Input::get('name');
    $email = Input::get('email');
    $message = Input::get('message');

    ContactUs::saveToDB($name, $email, $message);

    // b3d ma y7fz nrg3oh lsf7et elhome mslan
    return Redirect::to('contact.html');
});


Route::get('/about.html', function()
{
    return View::make('about');
});


Route::get('/team.html', function()
{
    return View::make('staff');
});


Route::get('/map.html', function()
{
    return View::make('map');
});

Route::get('/login.html', function()
{
    // 7aga a5era
    // 3yzen lw hwa 3aml login already nb3toh lsaf7et elprofile

    if(Session::get('login') === 'true')
    {
        return Redirect::to('/profile.html');
    }

    // n3ml sf7a llogout kman blmra

    return View::make('login');
});


Route::get('/profile.html', function()
{
    // 3shan ana msh 3aml login f rg3ny llhome page..
    // t3ala ngrb n3ml login
    // tmam kda
    // a5er 7aga b2a 3yzen n3rd byanatoh fe sf7et elhome page

    // Hnshof lw eluser 3aml login tmam hnrg3loh sf7et elprofile
    // lw msh 3amel hnrg3 lsf7et elhome page

    if(Session::get('login') === 'true')
    {
        // hna 3yzen ngeb eluser ely elcard id bta3oh = elcard id ely hwa 3aml login beh
        $donor = Account::find(Session::get('card_id'));

        // hnb3t eluser da lsf7et elprofile 3shan tetb3 bynataoh
        return View::make('profile', compact('donor'));
    }
    else
    {
        return Redirect::to('home.html');
    }
});


Route::post('/login.html', function()
{
    // e7na 3yzen bs elfull_name, w elcard_id
    $full_name = Input::get('full_name');
    $card_id   = Input::get('card_id');

    // n3ml test 3la elclass de
    // tmam kda hwa mwgod
    if(Account::exists($full_name , $card_id))
    {
        // Lw elaccount mwgod hn7fz fe el session variable en eluser da 3aml login
        Session::put('login', 'true');

        // hn7fz fe elsession kman elcard id
        Session::put('card_id', $card_id);

        return Redirect::to('profile.html');
    }
    else
    {
        return Redirect::back();
    }
});

Route::get('/logout', function()
{
    // bms7 elvariables de mn elsession
    Session::forget('login');
    Session::forget('card_id');

    return Redirect::to('home.html');
});


Route::controller('/web-services/donor', 'DonorServiceController');
Route::controller('/web-services/bank', 'BankServiceController');