<?php

namespace App\Http\Controllers;

use App\House;
use App\HouseImages;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->except('show');
//    }

    public function index()
    {
        //

        $house=House::all();
//        $ht = new HouseImages() ;
//        $i=$house->id ;
//        $himg = DB::table('house_images')->where('house_id', $i)->get();
//        $himg = HouseImages::all()->where('house_id',$i);
//    $t2 = $hmg->houses ;
//    $t3 = $u->houses ;
//        $n =$house->$himg->house_image ;
//        return view('houses')->with('house',$himg);
        return view('houses')->with('houses',$house);
//        return $house;
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
        $house_images_names=array();
        //
        $this->validate($request, [

            'location' => 'required',
            'space' => 'required',
            'status' => 'required',
            'floor' => 'required',
            'details' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048'

        ]);

        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(base_path() . '/public/storage/houses_images', $name);
                $house_images_names[]= $name;
            }

        }
        $house = new House ;
        $house->location = $request->input('location') ;
        $house->area = $request->input('space') ;
        $house->floor = $request->input('floor') ;
        $house->status = $request->input('status') ;
        $house->about = $request->input('details') ;
        $house->user_id = auth()->user()->id ;
        $house->save();
        $id = $house->id;
        foreach ($house_images_names as $names) {
            $house_images = new HouseImages ;
            $house_images->house_id = $house->id;
            $house_images->house_image = $names;
            $house_images->save();
        }

//        return redirect('/')->with('success', 'Done successfully');
        return ($id);
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
    public function showAddHouse()
    {

        return view('add_house');
    }
}
