<?php

namespace App\Workers\Services;

use App\Review;
use App\Workers\Repositories\ReviewRepository;

class ReviewService extends Service
{
     /**
     * Delete an existing review record.
     *
     * @param \App\Review &$review
     * @return boolean or int
     */
    public function deleteReview(Review &$review)
    {
        $repository = new ReviewRepository;
        return $repository->deleteReview($review);
    }

    /**
     * Create and store a new review record.
     *
     * @param \App\Review &$review
     * @param array $input
     * @return boolean
     */
    public function storeReview(Review &$review, $input)
    {
        $repository = new ReviewRepository;
        return $repository->storeReview($review, $input);
    }

    /**
     * Update an existing review record.
     *
     * @param \App\Review &$review
     * @param array $input
     * @return boolean
     */
    public function updateReview(Review &$review, $input)
    {
        $repository = new ReviewRepository;
        return $repository->updateReview($review, $input);
    }

}
