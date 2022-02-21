<?php

namespace Modules\Demo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('demo::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('demo::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('demo::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('demo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    //foreach
    public function foreach()
    {
        $arr = array( 'a','b','c','d' );

        
        foreach( $arr as &$v ) {
            echo $v;
        }//  $v = &$arr[3];

        print_r($arr);
        foreach($arr as $v) {
            echo $v;//最后一次  $arr[3] = $arr[3];没有实际效果 ，所以 $arr[3] = $arr[2] (由 $v = &$arr[3]; $v = $arr[2]; 得来 );
        }
        print_r($arr);


        // $a = array( 'a','b','c','d' );

        // foreach( $a as &$v ) {
        //     echo $v;
        // }
        // print_r($a);
        // $b = array( 'a','e','f','g' );
        // foreach($b as $v) {
        //     echo $v;
        // }
        // print_r($a);
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
