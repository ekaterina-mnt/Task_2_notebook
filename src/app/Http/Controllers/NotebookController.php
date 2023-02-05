<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notebook;
use Illuminate\Support\Facades\DB;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notebooks = Notebook::simplePaginate(3);
        return view('index')->with('notebooks', $notebooks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'fio' => 'required|string',
            'company' => '',
            'number' => 'required|numeric',
            'email' => 'required|email',
            'birthday' => '',
            'photo' => 'mimes:png,jpg,jpeg|max:3072',
        ]);
        if ($request->hasFile('photo')) {
            $fileName = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $requestData["photo"] = '/storage/' . $path;
        };
        $notebook = Notebook::create($requestData);
        $id = $notebook->id;
        return redirect("notebook/find/$id")->with('success', 'Notebook has been added successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function find(Request $request)
    {
        $requestData = $request->validate([
            'id' => 'numeric',
        ]);
        $id = $requestData['id'];
        return redirect("/notebook/find/$id");
    }

    public function findId($id)
    {
        $notebook = DB::table('notebooks')->where('id', $id);
        if ($notebook->exists()) {
            $data = [];
            $data['id'] = $id;
            $data['fio'] = $notebook->value('fio');
            $data['company'] = $notebook->value('company');
            $data['number'] = $notebook->value('number');
            $data['email'] = $notebook->value('email');
            $data['birthday'] = $notebook->value('birthday');
            $data['photo'] = $notebook->value('photo');
            return view('show')->with('notebook', $data);
        } else {
            return redirect('/')->withErrors(['idFind' => "There is no notebook with id=$id."]);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $requestData = $request->validate([
            'id' => 'numeric',
        ]);
        $id = $request->input('id');
        return redirect("/notebook/delete/$id");
    }

    public function deleteId($id)
    {
        $notebook = DB::table('notebooks')->where('id', $id);
        if ($notebook->exists()) {
            $notebook->delete();
            return redirect('/')->with('success', "The notebook with id=$id was deleted successfully!");
        } else {
            return redirect('/')->withErrors(['idDelete' => "There is no notebook with id=$id."]);
        }
    }
}
