<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Http\Requests\MentorRequest;
use Yajra\DataTables\Facades\DataTables;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax())
        {
            $query = Mentor::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <a href="'.route('dashboard.mentor.edit', $item->id).'" class="inline-block border border-yellow-500 bg-yellow-500 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Edit
                        </a>
                        <form class="inline-block" action="'.route('dashboard.mentor.destroy', $item->id).'" method="POST">
                            <button class="inline-block border border-red-600 bg-red-600 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                                Hapus
                            </button>
                        '. method_field('delete') . csrf_field() .'
                        </form>
                        ';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.dashboard.mentor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MentorRequest $request)
    {
        $data = $request->all();

        Mentor::create($data);

        return redirect()->route('dashboard.mentor.index');
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
    public function edit(Mentor $mentor)
    {
        return view('pages.dashboard.mentor.edit', compact('mentor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MentorRequest $request, Mentor $mentor)
    {
        $data = $request->all();

        $mentor->update($data);

        return redirect()->route('dashboard.mentor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentor $mentor)
    {
        $mentor->delete();

        return redirect()->route('dashboard.mentor.index');
    }
}
