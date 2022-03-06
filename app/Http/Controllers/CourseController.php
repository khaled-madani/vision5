<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Rules\MaxWordRule;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courses = Course::all();
        //الترتيب على حسب id desc تنازلي     asc تصاعدي
        // $courses = Course::orderBy('id','desc')->get();
        // $courses = Course::latest('id')->get();
        $count = 5;
        if (request()->has('items_count')) {
            $count = request()->items_count;
        }
        $courses = Course::orderBy('id', 'desc')->paginate($count);

        if(request()->has('name')){
            $courses = Course::orderBy('id', 'desc')->where('name','like','%'. request()->name .'%')->orWhere('price',request()->price)->orWhere('created_at',request()->date)->paginate($count);
        }

        // if(request()->has('name')){
        //     $courses = Course::orderBy('id', 'desc')->where('name','like','%'. request()->name .'%')->paginate($count);
        // }


        // if(request()->has('price')){
        //     $courses = Course::orderBy('id', 'desc')->where('price', request()->price)->paginate($count);
        // }

        // if(request()->has('date')){
        //     $courses = Course::orderBy('id', 'desc')->where('created_at',request()->date)->paginate($count);
        // }

        // dump(request());


        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => ['required', 'numeric'],
            'image' => ['required', 'file', 'mimes:png,jpg,jpge,gif,svg'],
            'description' => [new MaxWordRule(500)]
        ]);

        // dd($request->except('_token'));
        $imgName = 'course_' . time() . rand() . $request->file('image')->getClientOriginalName();

        $request->file('image')->move(public_path('Uploads.Dash'), $imgName);

        Course::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imgName,
            'description' => $request->description,
        ]);
        return redirect()->route('courses.index')->with('msg','Course added Successfully')->with('type','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $course = Course::findOrFail($id);
        // $course = Course::findOrFail($id); اذا كان اي دي غير موجود يرجع الصفحة غير موجود

        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'price' => ['required','numeric'],
            'image' => ['nullable','file', 'mimes:png,jpg,jpge,gif,svg'],// nullable ممكن ما تاخد قيمة
            'description' => [new MaxWordRule(500)]
        ]);
        $course = Course::find($id);
        $imgName = $course['image'];
        if(request()->hasFile('image')){
            $imgName = 'course_' . time() . rand() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('Uploads.Dash'), $imgName);
        }

        $action = Course::find($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'image' => $imgName,
            'description' => $request->description,
        ]);
        if($action){
            return redirect()->route('courses.index')->with('msg','Course update Successfully')->with('type','warning');
        }else{
            return redirect()->route('courses.index')->with('msg','Course update failed')->with('type','warning');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index')->with('msg','Course delete Successfully')->with('type','danger');

    }
}
