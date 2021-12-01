<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseModul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\CourseModulRequest;

class CourseModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        if (request()->ajax())
        {
            $query = CourseModul::where('courses_id', $course->id);

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="'.route('dashboard.modul.edit', $item->id).'" class="inline-block border border-yellow-500 bg-yellow-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Edit
                        </a>
                        <form class="inline-block" action="'.route('dashboard.modul.destroy', $item->id).'" method="POST">
                            <button class="inline-block border border-red-600 bg-red-600 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                                Hapus
                            </button>
                        '. method_field('delete') . csrf_field() .'
                        </form>
                        ';
                })
                ->editColumn('url', function($item) {
                    return '
                        <video style="max-width: 180px" controls>
                            <source src="'.Storage::url($item->url).'" type="video/mp4"></source>
                        </video>
                    ';
                })
                ->rawColumns(['action', 'url'])
                ->make();
        }

        return view('pages.dashboard.modul.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('pages.dashboard.modul.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseModulRequest $request, Course $course)
    {
        $file = $request->file('file');

        if ($request->hasFile('file'))
        {
            $path = $file->store('public/videos');

            CourseModul::create([
                'courses_id' => $course->id,
                'modul' => $request->name,
                'url' => $path
            ]);
        }

        return redirect()->route('dashboard.course.modul.index', $course->id);
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
    public function edit(CourseModul $modul)
    {

        return view('pages.dashboard.modul.edit', compact('modul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseModulRequest $request, CourseModul $modul)
    {
        $data = $request->all();

        if($request->file('file')) {
            if($request->oldVideo) {
                Storage::delete($request->oldVideo);
            }
            $data['file'] = $request->file('file')->store('public/videos'); 
            
        }
        $modul->update($data);


        return redirect()->route('dashboard.course.modul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseModul $modul)
    {
        if($modul->url) {
            Storage::delete($modul->url);
        }

        CourseModul::destroy($modul->id);

        return redirect()->route('dashboard.course.modul.index', $modul->courses_id);
    }
}
