<?php

namespace App\Workers\Repositories;

use App\Forum;
use App\Workers\Helpers\Constants;

/**
* Repository for forum
*/
class ForumRepository extends Repository
{

    /**
     * Delete an forum
     *
     * @param  \App\Forum &$forum
     * @return boolean
     */
    public function deleteForum(Forum &$forum)
    {
        return $forum->delete();
    }

    /**
    * Store a new forum record.
    *
    * @param  \App\Forum &$forum
    * @param  array $input
    * @return boolean
    */
    public function storeForum(Forum &$forum, $input)
    {
        $this->populateFields($forum, $input);

        $status = $forum->save();

        return $status;
    }

    /**
    * Update an existing forum record.
    *
    * @param  \App\Forum &$forum
    * @param  array $input
    * @return boolean
    */
    public function updateForum(Forum &$forum, $input)
    {
        $this->populateFields($forum, $input);

        $status = $forum->update();

        return $status;
    }

   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Forum  &$forum
     * @param  array  $input
     */
    protected function populateFields(Forum &$forum, $input)
    {

        $forum->title = $input['title'];
        $forum->problem = $input['problem'];
        $forum->solution = $input['solution'];
        $forum->component_id = $input['component_id'];

    }

}
