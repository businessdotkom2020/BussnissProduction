<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        try {
            $reviews = Review::orderBy('id', 'desc')->get();
            return view('backend.reviews.index',compact('reviews'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function show($id)
    {
        try {
            $review = Review::where('id',$id)->first();
            if(isset($review)){
                return view('backend.reviews.show' , compact('review'));
            }else{
                return redirect()->back()->with('error', 'Error Try Again !!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function destroy($id)
    {
        try {
            $review = Review::find($id);
            $review->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_review($id)
    {
        try {
            $review = Review::find($id);
            $review->delete();
            return redirect()->route('reviews.index')->with('done' , 'Deleted Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
