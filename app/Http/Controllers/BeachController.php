<?php

namespace App\Http\Controllers;

use App\Region;
use App\Beach;
use App\Review;
use App\Pic;

use Illuminate\Http\Request;

class BeachController extends Controller
{

    public function getAllRegions()
    {
        return response()->json(Region::all());
    }

    public function getAllBeaches()
    {
        return response()->json(Beach::all());
    }

    public function getBeachesByRegion($region)
    {
        return response()->json(Beach::where('region_name',$region)->with('reviews','pics')->get());
    }

    public function getBeach($region,$name)
    {        
        return response()->json(Beach::where('name',$name)->where('region_name',$region)->with('reviews','pics')->first());
    }
    
    public function getReview($region,$name,$id)
    {
        //join region x beach x name
        //return response()->json(Review::where('id',$id)->first());
        return response()->json('Not implemented yet.');
    }

    public function create(Request $request)
    {
        //$review = Review::create($request->all());
        //returns the region and name of the beach's review
        //return response()->json($review, 201);
        return response()->json('Not implemented yet.');
    }

    public function update($id, Request $request)
    {
        //$review = Review::findOrFail($id);
        //$review->update($request->all());
        //returns the region and name of the beach's review updated
        //return response()->json($review, 200);
        return response()->json('Not implemented yet.');
    }

   
}