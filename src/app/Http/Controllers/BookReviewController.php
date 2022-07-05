<?php

namespace App\Http\Controllers;

use App\Models\BookReview;
use Illuminate\Http\Request;

class BookReviewController extends Controller
{
    public function index()
    {
        return BookReview::all();
    }

    public function show(BookReview $review)
    {
        return $review;
    }

    public function store(Request $request)
    {
        return BookReview::create($request->all());
    }

    public function update(Request $request, BookReview $review)
    {
        $review->update($request->all());

        return $review;
    }

    public function destroy(BookReview $review)
    {
        $review->delete();

        return $review;
    }
}
