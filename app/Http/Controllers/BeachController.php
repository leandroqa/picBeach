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
        return response()->json(Region::all(),200);
    }

    public function getAllBeaches()
    {
        return response()->json(Beach::all(),200);
    }

    public function getBeachesByRegion($region)
    {
        return response()->json(Beach::where('region_name',$region)->with('reviews','pics')->get(),200);
    }

    public function getBeach($region,$name)
    {        
        return response()->json(Beach::where('name',$name)->where('region_name',$region)->with('reviews','pics')->first(),200);
    }
    
    public function getReview($region,$name,$id)
    {
        //join region x beach x name
        //return response()->json(Review::where('id',$id)->first());
        return response()->json('Not implemented yet.',501);
    }

    public function create(Request $request)
    {
        //request: name, review
        try{
            $beach = Beach::where('name',$request->name)->where('region_name',$request->region)->firstOrFail();            
            $review = Review::create(['beach_id' => $beach->id, 'review' => $request->input('review')]);
        }
        catch(\Exception $e)
        {
            $error = $e->getMessage();
            return response()->json("Error on creating the review: $error",400);
        }
        return response()->json("Review created for $request->name.",201);            
    }

    public function update($id, Request $request)
    {
        //$review = Review::findOrFail($id);
        //$review->update($request->all());
        //returns the region and name of the beach's review updated
        //return response()->json($review, 200);
        return response()->json('Not implemented yet.',501);
    }

   
}