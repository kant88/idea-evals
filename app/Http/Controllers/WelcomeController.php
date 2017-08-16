<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Idea;
use App\Evaluation;

use Session;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idea = new Idea();
        $idea->name = Session::get('name');
        return view('welcome', [
            'idea' => $idea,
        ]);
    }
    
     public function confirmNamepost(Request $request)
    {
        if(!(Session::has('name'))){
            $this->validate($request, [
              'name' => 'required',
        ]);
        }
        //入力をセッションに保存する。
        if($request->has('name')){
            $name = $request->name;
            Session::put('name', $name);
        }
        return redirect()->action('WelcomeController@confirmNameget');
    }
    
    public function confirmNameget() {
        $ideas = Idea::orderByRaw("RANDOM()")
                     ->take(5)
                     ->get();
        return view('evals.create', [
            'ideas' => $ideas,
        ]);
    }
    
    public function confirmEvalpost(Request $request) {
        for ($i=1; $i<6; $i++) {
            $evaluation = new Evaluation();
            $evaluation->originallity = $request->input("originallity{$i}");
            $evaluation->appropriateness = $request->input("appropriateness{$i}");
            $evaluation->idea_id = $request->input("idea_id{$i}");
            $evaluation->name = Session::get('name');
            $evaluation->save();
        }
        Session::flush();
        return redirect('thankyou');
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
