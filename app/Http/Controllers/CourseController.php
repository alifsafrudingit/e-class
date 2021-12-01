<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mentor $mentor)
    {
        if (request()->ajax())
        {
            $query = Course::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="'.route('dashboard.course.modul.index', $item->id).'" class="inline-block border border-blue-500 bg-blue-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Modul
                        </a>
                        <a href="'.route('dashboard.course.edit', $item->id).'" class="inline-block border border-yellow-500 bg-yellow-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Edit
                        </a>
                        <form class="inline-block" action="'.route('dashboard.course.destroy', $item->id).'" method="POST">
                            <button class="inline-block border border-red-600 bg-red-600 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                                Hapus
                            </button>
                        '. method_field('delete') . csrf_field() .'
                        </form>
                        ';
                })
                ->editColumn('img', function($item) {
                    return '<img style="max-width 150pxW" src="'. Storage::url($item->img) .'"/>';
                })
                ->editColumn('price', function($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action', 'img'])
                ->make();
        }

        return view('pages.dashboard.course.index', compact('mentor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = Mentor::all();
        return view('pages.dashboard.course.create', compact('mentors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request, Mentor $mentor)
    {
        $file = $request->file('file');

        if ($request->hasFile('file')) 
        {
            $path = $file->store('public/images');

            Course::create([
                'mentors_id'    => $request->mentors_id,
                'img'           => $path,
                'name'          => $request->name,
                'price'         => $request->price,
                'description'   => $request->description,
                'slug'          => Str::slug($request->name)
            ]);
        }

        return redirect()->route('dashboard.course.index', compact('mentor'));
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
    public function edit(Course $course)
    {
        $mentors = Mentor::all();
        return view('pages.dashboard.course.edit', compact('course', 'mentors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, Course $course)
    {
        $data = $request->all();

        if($request->file('file')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $data['file'] = $request->file('file')->store('public/images'); 
        }
        
        $data['slug'] = Str::slug($request->name);

        $course->update($data);

        return redirect()->route('dashboard.course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if($course->img) {
            Storage::delete($course->img);
        }

        Course::destroy($course->id);

        return redirect()->route('dashboard.course.index');
    }
}
