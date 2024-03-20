<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

Route::get('/', function () {
    return view('welcome');
});
Route::post('contact', function (Request $request) {

    $contact = new Contact();
    $contact->first_name = $request->input('first_name');
    $contact->last_name = $request->input('last_name');
    $contact->email = $request->input('email');
    $contact->phone_number = $request->input('phone_number');
    $contact->address = $request->input('address');
    $contact->save();

    return redirect()->back();
})->name('contact');