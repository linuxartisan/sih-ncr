<?php

namespace App\Http\Controllers;

use App\Company;
use App\Review;
use Illuminate\Http\ReviewRequest;
use App\Workers\Services\ReviewService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:admin', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('review.list', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $role_list = Role::pluck('name', 'id');
       $company_list = Company::pluck('name', 'id');
       $review_type = config('reviewtype');

       return view('review.create', compact('company_list', 'review_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $review = new Review;

        $service = new ReviewService;
        $status = $service->storeReview($review, $input);

        if($status) {
            Session::flash('success', 'Review created successfully.');
        } else {
            Session::flash('error', 'Failed to create Review. Please try again.');
        }

        return redirect(action('ReviewController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $company_list = Company::pluck('name', 'id');
        $review_type = config('reviewtype');

        return view(
            'review.edit',
            compact('review', 'company_list', 'review_type')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $input = $request->all();

        $service = new ReviewService;
        $status = $service->updateReview($review, $input);

        if($status) {
            Session::flash('success', 'Review updated successfully.');
        } else {
            Session::flash('error', 'Failed to update Review. Please try again.');
        }

        return redirect(action('ReviewController@edit', $review->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $service = new ReviewService;
        $status = $service->deleteReview($review);

        if($status) {
            Session::flash('success', 'Review deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete Review. Please try again.');
        }

        return redirect(action('ReviewController@index'));
    }
}
