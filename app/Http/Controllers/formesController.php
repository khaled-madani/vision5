<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class formesController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }


    public function form1Submit(Request $request)
    {
        // dd($request->all());
        // اذا كانت القيمة فارغة يضع القيم الجديدة
        $name = $request->name ? $request->name : 'khaled' ;
        $Email = $request->email ? $request->email : 'khaled@gmail.com' ;

        // dd($request->all());
        // $data = $request->except('_token');
        // $data = $request->only('name','email');
        // dd($data);
        // $name = $request->input('name','emptyyyyyyyyyyyyyyyyyyyy');
        // $Email = $request->input('email','noooooooooooooooooooooo');
        return "Your name is $name and your email is $Email";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2Submit(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $dob = $request->dob;
        // explode تقوم بتقطيع النص على حسب الاشارة
        // list($month,$day,$year) تقوم باعطاء القيم على حسب الترتيب المتغيرات
        list($month,$day,$year) = explode('/',$dob);
        // dd($month,$day,$year);
        // $alboms =['fffff.png','ddddd.jpg','ffffaasd.png']; // "fffff.png,ddddd.jpg,ffffaasd.png"
        // implode  تقوم بتحويل القائمة الى نص باضافة الاشارة بين الكلمات
        // dd(implode(',',$alboms));
        return view('forms.form2data' ,compact('name','email','month','day','year'));
    }




    public function form3()
    {
        return view('forms.form3');
    }

    public function form3Submit(Request $request)
    {
        $request->validate([
            'name' => ['required','min:10'],
            'email' => ['required','email:rfc,dns'],  // dns تفحص الايميل حقيقي و لا لا  And rfc يجب ان يحتوي على Dot
        ]);
        dd($request->all());
        // return view('forms.form3');
    }


    public function form4()
    {
        return view('forms.form4');
    }

    public function form4Submit(Request $request)
    {
        $request->validate([
            'name' => ['required','min:3','max:20'],
            'phone' => ['required'],
            'cv'=> ['required','file','mimes:pdf' ,'max:1024']
        ]);
        // dd($request->all());
        // $imgName = time() . $request->file('cv')->getClientOriginalName();
        // $imgName = 'websiteName'.time().'_'.rand(00000000,99999999).$request->file('cv')->getClientOriginalName();
        $imgName = 'websiteName'.time().'_'.rand(00000000,99999999).'.'.$request->file('cv')->getClientOriginalExtension();
        $request->file('cv')->move(public_path('Uploads'),$imgName);
        return view('forms.form4Image',compact('imgName'));
    }

    public function form5()
    {
        return view('forms.form5');
    }


    public function form5Submit(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'message' => ['required'],
            'cv' => ['required','file','mimes:pdf','max:5200']
        ]);

        $newName =  str_replace(' ' , '_',strtolower($request->name));
        $ex = $request->file('cv')->getClientOriginalExtension();
        // 'cv_khaled_madnai_852252222.pdf'
        $name = 'cv'.'_'.$newName.'_'.time().'.'.$ex;
        $request->file('cv')->move(public_path('uploade/cv'),$name);
        $data = $request->except('_token','cv','hoppies');
        $data['cv'] = $name ;
        $data['hoppies'] = implode(', ',$request->hoppies);
        Mail::to('admin@info.com')->send(new ContactUsMail($data));
        // return view('forms.form5');
    }

}
