<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{



    public function getContactLists()
    {
        $data = Contact::select('*');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . Route('contact.show', $row) . '" class="edit btn btn-success btn-sm">View</a> <a href="javascript:void(0)" data-toggle="modal" data-target="#contactBTN"  id="deleteBtn" data-id="' . $row->id . '" onClick="clickFinc()" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }



    public function delete(Request $request)
    {
        $request->validate([
            'id_use' => 'required|numeric'
        ]);

        if (is_numeric($request->id_use)) {
            $project = Contact::where('id', $request->id_use)->first();
            $project->delete();
        }
        return back();
    }








    public function front()
    {
        return view('frontEnd.contact');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Dashboard.Contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        Contact::create($request->except('_token'));
        return back();
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
        $contact = Contact::findOrFail($id);
        return view('Dashboard.Contact.view', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
