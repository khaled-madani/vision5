<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\Product;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelationController extends Controller
{
    public function one_to_one()
    {
        $user = User::find(1);
        // dd($user->insurance);

        $insurance = Insurance::find(1);
        // dd($insurance->user);
        return view('relationShip/one',compact('user','insurance'));
    }






    public function one_to_many()
    {
        $user = User::find(1);
        $products = $user->product()->paginate(5);
        $product = Product::find(9);
        // dd($product->user);
        // dd($product , $product->user->name);
        return view('relationShip/one_to_many',compact('user','products'));
    }



    public function one_to_many_submit(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'price'=>['required','numeric'],
        ]);
        // dd($request->all());
        $user = User::find(1);
        // $user->product()->create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        // ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'user_id' => $user->id

        ]);
        return redirect()->route('on_to_many')->with('msg','Product Add Sucssesfully')->with('type','success ');
    }

    public function many_to_many()
    {
        $std = Student::find(1);
        // dd($std->subjects);
        return view('relationShip/many_to_many');

    }
    public function many_to_many_submit(Request $request)
    {

    }

    public function register_subject()
    {
        $std = Student::find(2);
        $subjects = Subject::all();
        // dd($std->subjects);

        $std_sub = DB::table('student_subject')->where('student_id', $std->id)->get()->pluck('subject_id')->toArray();

        return view('relationShip/register_subject',compact('std','subjects','std_sub'));
    }

    public function register_subject_submit(Request $request)
    {
        // dd($request->all());
        $std = Student::find(2);


        // تقوم باضافة المواد كاملة
        // $std->subjects()->attach($request->subjects);

        // تقوم بحذف المواد كاملة
        // $std->subjects()->detach($request->subjects);

        // important
        // تقوم باضافة  المواد الجديدة
        $std->subjects()->sync($request->subjects);

        // dd($std->id);
        // foreach($request->subjects as $sub){
        //     DB::table('student_subject')->insert([
        //         'subject_id' => $sub,
        //         'student_id' => $std->id
        //     ]);
        // }
        return redirect()->route('register_subject') ;
    }

}

