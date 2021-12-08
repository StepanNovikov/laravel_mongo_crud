<?php

namespace App\Observers;

use App\Models\Author;

class AuthorObserver
{
    /**
     * Handle the Author "deliting" event.
     *
     * @param  \App\Models\Author  $author
     * @return void
     */
    public function deliting(Author $author)
    {
        $author->books()->delete();
    }


}
