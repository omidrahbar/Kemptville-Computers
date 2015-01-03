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



/*
|--------------------------------------------------------------------------
| Error Routing
|--------------------------------------------------------------------------
*/

/**
 *  404 Error Handler (errors/missing.blade.php)
 */
App::missing(function($exception)
{
    return Response::view('errors.missing', array('url' => Request::url(), 'title' => 'Error 404 - Page Not Found'), 404);
});


/*
|--------------------------------------------------------------------------
| Page Routing
|--------------------------------------------------------------------------
*/

/**
 * Empty URI / Home Page (home.blade.php)
 */
Route::get('/', function()
{
	return View::make('home')->with(array('title' => 'Welcome'));
});

/**
 * About Us (about.blade.php)
 */
Route::get('/about', function()
{
    return View::make('about')->with(array('title' => 'About Us'));
});

/**
 * Products (not used)
 */
Route::get('/products', function()
{
    return View::make('products')->with(array('title' => 'Products'));
});

/**
 * Services (services.blade.php)
 */
Route::get('/services', function()
{
    return View::make('services')->with(array('title' => 'Our Services'));
});

/**
 * Contact Us (contact.blade.php)
 */
Route::get('/contact', function()
{
    return View::make('contact')->with(array('title' => 'Contact Us'));
});

/**
 * Support Submission Handler
 */
Route::post('/contact', array('before' => 'csrf', function()
{
    $supportValidation = Validator::make(
            array('name'               => Input::get('name')),
            array('email'              => Input::get('email')),
            array('phone'              => Input::get('phone')),
            array('message'            => Input::get('message')),
            
            array('name'                  => 'required'),
            array('email'                 => 'required|email'),
            array('phone'                 => 'required|alpha_dash'),
            array('message'               => 'required')
            );

    if($supportValidation->fails())
    {
        $errors = $supportValidation->messages();
        return View::make('contact', $errors)->with(array('title' => 'Contact Us'));
    }else
    {   
        Mail::send('emails.support.contact', 
                array('name'        => Input::get('name'), 
                      'phone'       => Input::get('phone'),
                      'email'       => Input::get('email'),
                      'msg'     => Input::get('message')
                ), function($message)
        {
            $message->from(Input::get('email'), Input::get('name'));
            $message->to('sales@kemptvillecomputers.com', 'Kemptville Computers')->subject('New Client Message');
        });        
        
        return View::make('contactthanks')->with(array('title' => 'Thanks!'));
    }
}));




/**
 * Support (support.blade.php)
 */
Route::get('support', function()
{
    return View::make('support')->with(array('title' => 'Book Us'));
});

/**
 * Support Submission Handler
 */
Route::post('support', array('before' => 'csrf', function()
{
    $supportValidation = Validator::make(
            array('name'               => Input::get('name')),
            array('email'              => Input::get('email')),
            array('phone'              => Input::get('phone')),
            array('serviceDate'        => Input::get('serviceDate')),
            array('problemArea'        => Input::get('problemArea')),
            array('problemDescription' => Input::get('problemDescription')),
            array('physicalAddress'    => Input::get('physicalAddress')),
            
            array('name'                  => 'required'),
            array('email'                 => 'required|email'),
            array('phone'                 => 'required|alpha_dash'),
            array('serviceDate'           => 'alpha|required'),
            array('problemArea'           => 'required'),
            array('problemDescription'    => 'required'),
            array('physicalAddress'       => 'required')
            );

    if($supportValidation->fails())
    {
        $errors = $supportValidation->messages();
        return View::make('support', $errors)->with(array('title' => 'Support'));
    }else
    {   
        $supportId = time();
        Mail::send('emails.support.newticket', 
                array('name' => Input::get('name'), 
                      'supportId'   => $supportId,
                      'phone'       => Input::get('phone'),
                      'serviceDate' => Input::get('serviceDate'),
                      'problemArea' => Input::get('problemArea'),
                      'problemDescription' => Input::get('problemDescription'),
                      'physicalAddress' => Input::get('physicalAddress')
                ), function($message)
        {
            $message->from('noreply@kemptvillecomputers.com', 'Kemptville Computers (No Reply)');
            $message->to(Input::get('email'), Input::get('name'))->subject('New Support Request')->cc('sales@kemptvillecomputers.com');
        });        
        
        return View::make('thanks')->with(array('supportId' => $supportId, 'title' => 'Thanks!'));
    }
}));
