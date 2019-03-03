<?php

namespace App\Workers\Repositories;

use App\Review;
use App\Workers\Helpers\Constants;

/**
* Repository for review
*/
class ReviewRepository extends Repository
{

    /**
     * Delete an review
     *
     * @param  \App\Review &$review
     * @return boolean
     */
    public function deleteReview(Review &$review)
    {
        return $review->delete();
    }

    /**
    * Store a new review record.
    *
    * @param  \App\Review &$review
    * @param  array $input
    * @return boolean
    */
    public function storeReview(Review &$review, $input)
    {
        $this->populateFields($review, $input);

        $status = $review->save();

        return $status;
    }

    /**
    * Update an existing review record.
    *
    * @param  \App\Review &$review
    * @param  array $input
    * @return boolean
    */
    public function updateReview(Review &$review, $input)
    {
        $this->populateFields($review, $input);

        $status = $review->update();

        return $status;
    }

   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Review  &$review
     * @param  array  $input
     */
    protected function populateFields(Review &$review, $input)
    {
        
        $review->component_id = $input['component_id'];
        $review->rating = $input['rating'];
        
    }

}
