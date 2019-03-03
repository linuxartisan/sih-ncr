<?php

namespace App\Workers\Services;

use App\Forum;
use App\Workers\Repositories\ForumRepository;

class ForumService extends Service
{
     /**
     * Delete an existing forum record.
     *
     * @param \App\Forum &$forum
     * @return boolean or int
     */
    public function deleteForum(Forum &$forum)
    {
        $repository = new ForumRepository;
        return $repository->deleteForum($forum);
    }

    /**
     * Create and store a new forum record.
     *
     * @param \App\Forum &$forum
     * @param array $input
     * @return boolean
     */
    public function storeForum(Forum &$forum, $input)
    {
        $repository = new ForumRepository;
        return $repository->storeForum($forum, $input);
    }

    /**
     * Update an existing forum record.
     *
     * @param \App\Forum &$forum
     * @param array $input
     * @return boolean
     */
    public function updateForum(Forum &$forum, $input)
    {
        $repository = new ForumRepository;
        return $repository->updateForum($forum, $input);
    }

}
