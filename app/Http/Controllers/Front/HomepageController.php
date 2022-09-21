<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use App\Models\FaqModel;
use App\Models\TeamsModel;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    public function index()
    {
        return view('frontend.homepage');
    }


    public function serviceDetails()
    {
        return view('frontend.serviceDetails');
    }

    public function team()
    {
        $teams = TeamsModel::all();
        return view('frontend.team',compact('teams'));
    }

    public function faq()
    {
        $faq = FaqModel::all();
        return view('frontend.faq',compact('faq'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactPost(Request $request)
    {
        $rules =
            [
                'name'=>'required|min:5',
                'email'=>'required|email',
                'phone'=>'required',
                'message'=>'required|min:20',
            ];

        $validate = Validator::make($request->post(),$rules);

        if ($validate->fails())
        {
            alert()->error('Eksik Bilgi','Lütfen Form Alanının Gerekli Bilgileri Sağladığından Emin Olunuz!');
            return redirect()->route('contact')->withInput();
        }

        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        alert()->success('Tebrikler!','Mesajınız Başarıyla Gönderildi!')->showConfirmButton('Tamam');
        return redirect()->route('contact');
    }
}
