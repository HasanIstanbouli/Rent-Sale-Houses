<?php

namespace App\Http\Controllers;

use App\House;
use App\HouseImages;
use App\User;
use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\DB;
use App\Notifications\New_House_Notification ;
class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        //

        $house=House::orderBy('updated_at','desc')->Paginate(6) ;
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
            'images.*' => 'image|mimes:jpeg,png,jpg|max:90048'

        ]);


        $house = new House ;
        $house->location = $request->input('location') ;
        $house->area = $request->input('space') ;
        $house->floor = $request->input('floor') ;
        $house->status = $request->input('status') ;
        $house->about = $request->input('details') ;
        $house->user_id = auth()->user()->id ;
        $house->save();
//        $id = $house->id;

        if($request->hasfile('images'))
        {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(base_path() . '/public/storage/houses_images', $name);
                $house_images_names[]= $name;
            }

        }
        else {
            $no_image = "no-image.png" ;
            $house_images_names[]=$no_image ;
        }
        foreach ($house_images_names as $names) {
            $house_images = new HouseImages ;
            $house_images->house_id = $house->id;
            $house_images->house_image = $names;
            $house_images->save();
        }
        $other_users = User::where('id','!=',auth()->user()->id)->get();
       Notification::send($other_users,new New_House_Notification(House::latest('id')->first()));
           return redirect('/houses');



//        return ($id);
//        return response()->json(['success'=>'You have successfully upload file.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $house = House::find($id) ;

       return view('more')->with('house',$house);
//       return HouseImages::where('house_id','=',$id)->get();
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
//    public function destroy($id)
    public function destroy(Request $r)
    {
        //
//        $house = House::where('user_id',$id)->get ;
        $house =House::find($r->input('id'));
//        $house_image=HouseImages::where('house_id',$id) ;
//        $house_image->delete() ;
        $house->delete();

//        return redirect()->back()->with('success', 'Done successfully');
//    return response(['id'=>])
    }

    public function showAddHouse()
    {

        return view('add_house');
    }
    public function filterHousese(Request $request){
        if($request->input('order')=="newest 2 oldest")
        $order = "desc";
        else
            $order = "asc" ;
        $city = $request->input('city');
        $status = $request->input('status');
//        if ($status=="Any")

            $h = House::orderBy('updated_at',$order)->Paginate(6) ;

        return view('houses')->with('houses',$h);
//        return $city ;
    }

}
