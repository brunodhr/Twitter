<?php
/*crud dos tweets*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet;
use Session;

class tweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = Tweet::all();

        return view('pages.welcome')->withTweets($tweets);
    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //script de validação
        $this->validate($request, array(
            'id' => 'required',
            'content' => 'required|max:255'
        ));
        //armazena no banco
        $tweet = new Tweet;
        $tweet->user_id = $request->id;
        $tweet->content = $request->content;
        $tweet->save();
        Session::flash('success','O tweet do blog foi salvo com sucesso');/*video 13  - 9 minutos */
        
        return view('pages.welcome');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet = Tweet::find($id);
        return view('pages.welcome')->withTweet($tweet);   
    /*aula 14 ,finalzim */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = tweet::find($id);
        return view('tweets.edit')->with('tweet',$tweet);
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
        $tweet = tweet::find($id);

        $tweet->delete();

        Session::flash('success','O tweet foi deletado com sucesso ');
        return redirect()->route('tweets.index');

    }
}
