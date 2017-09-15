<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Borrow;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
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

    public function getAccount($acc_num){
        $acc_details = $this->connectAPI();

        return $acc_details;
        
        // $like = new Like;
        // $like->post_id = $post_id;
        // $like->user_id = Auth::user()->id;
        // $like->save();

        // $post = Post::find($post_id);
        // $likers = array();
        // foreach($post->likes as $like){
        //     $likers[] = array(
        //         'username'=>$like->liker->username,
        //         'name'=>$like->liker->name
        //         );
        // }
        // return $likers;
    }

    public function connectAPI(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api-uat.unionbankph.com/hackathon/sb/accounts/100760327934",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "x-ibm-client-id: 4d3cb736-9082-4676-9e42-fdeed3f20aa3",
            "x-ibm-client-secret: lU4rN2hK1mM8dV4sA0xR6fG0xP2pE5pL3gS4wU2xQ8nP2hR1pC"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }
    }

