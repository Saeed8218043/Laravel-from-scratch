<?php

namespace App\Http\Controllers;

use App\services\MailchimpNewsLetter;
use App\services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsLetterController extends Controller
{

    public function __invoke(NewsLetter $newsLetter)
    {
        request()->validate(['email' => 'required|email']);


        try {
            $newsLetter->subscribe(request('email'));

        } catch (\Exception $ex) {
            throw ValidationException::withMessages([
                'email' => 'this email could not be taken']);
        }
        return redirect('/')->with('success', 'your are now subscribed');
    }
}
