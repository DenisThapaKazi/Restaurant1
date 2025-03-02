<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\chef;

class Admincontroller extends Controller
{
    public function user()
    {
        $data = user::all();
        return view ('admin.user',compact('data'));
    }
    public function deleteusers($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function food()
    {
        $data=food::all();

        return view ('admin.foodmenu',compact('data'));
    }
    public function upload(Request $request)
    {
        $data = new food;
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
                 $request->image->move('foodimage',$imagename);
                 $data->image=$imagename;
                 $data->title=$request->title;
                 $data->price=$request->price;
                 $data->description=$request->description;
                 $data-> save();
                 return redirect()->back();
    }
    public function reservation(Request $request)
    {
        $data = new reservation;
        $image = $request->image;


                 $data->name=$request->name;
                 $data->email=$request->email;
                 $data->phoneno=$request->phone;
                 $data->guest=$request->guest;
                 $data->date=$request->date;
                 $data->time=$request->time;
                 $data->message=$request->message;
                 $data-> save();
                 return redirect()->back();
    }
    public function viewreservations()
    {
        $data = reservation::all();
        return view ('admin.adminreservations',compact('data'));
    }
    public function chef()
    {
        $data=chef::all();

        return view ('admin.adminchefs',compact("data"));
    }

    public function uploadchef(Request $request)
    {
        $data = new chef;
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
                 $request->image->move('chefimage',$imagename);
                 $data->image=$imagename;

                 $data->name=$request->name;


                 $data->speciality=$request->speciality;

                 $data-> save();
                 return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
