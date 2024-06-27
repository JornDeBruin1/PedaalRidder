<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('approved', true)->get();
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
            'product_type' => 'required|string',
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'stars' => 'required|integer|between:1,5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'product_type' => $request->product_type,
            'name' => $request->name,
            'message' => $request->message,
            'stars' => $request->stars,
            'approved' => false,
        ]);

        return back()->with('message', 'Review submitted successfully!');
    }

    public function approve(Request $request, Review $review)
    {
        $review->update(['approved' => true]);
        return back()->with('message', 'Review approved successfully!');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('message', 'Review deleted successfully!');
    }
}