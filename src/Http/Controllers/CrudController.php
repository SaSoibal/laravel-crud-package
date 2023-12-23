<?php

namespace Sasoibal\Crud\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sasoibal\Crud\Models\Crud;

class CrudController extends Controller
{
    //TO FETCH ALL POSTS
    public function index()
    {
        $post_list = Crud::orderBy('id', 'DESC')->paginate(10);
        return view('crud::index', compact('post_list'));
    }

    //TO CREATE POST
    public function create()
    {
        return view('crud::create');
    }

    //TO EDIT POST
    public function edit($id)
    {
        $edit_post = Crud::find($id);
        return view('crud::edit', compact('edit_post'));
    }

    //TO SAVE POST
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required|max:100|unique:cruds',
            'details' => 'required',
        ]);
        $create = Crud::create($request->all());
        if ($create) {
            return redirect()->route('crud.index')->with('success', 'Post created successfully.');
        } else {
            return view('crud::create');
        }
    }

    //TO UPDATE POST
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'author' => 'required|max:100',
            'details' => 'required',
        ]);
        $up = [
            'title' => $request->title,
            'author' => $request->author,
            'details' => $request->details,
        ];
        $update = Crud::where('id', $id)->update($up);
        if ($update) {
            return redirect()->route('crud.index')->with('success', 'Post updated successfully.');
        } else {
            return redirect()->back();
        }
    }

    //TO DELETE POST
    public function delete($id)
    {
        Crud::find($id)->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }

}
