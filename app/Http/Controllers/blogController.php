<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function indexblog()
    {
        return view('blog.index');
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $details = $request->details;


        DB::table('blogs')->insert(['title' => $title, 'details' => $details]);
        $data = DB::table('blogs')->get();
        return redirect('/show');
    }

    public function show()
    {
        $data['blogs'] = DB::table('blogs')->get();
        return view('blog.show', $data);
    }


    public function sshow($id)
    {
        $data['blog'] = DB::table('blogs')->where('id', $id)->find($id);
        return view('blog.sshow', $data);
    }

    public function edit($id)
    {
        $data['blog'] = DB::table('blogs')->where('id', $id)->first();
        return view('blog.edit', $data);
    }



    public function update(Request $request, $id)
    {
        $title = $request->title;
        $details = $request->details;


        DB::table('blogs')->where('id', $id)->update(['title' => $title, 'details' => $details]);

        return redirect('/show');
    }

    public function destroy($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('/show');
    }
}
