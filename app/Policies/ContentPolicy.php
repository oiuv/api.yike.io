<?php

namespace App\Policies;

use App\User;
use App\Content;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any contents.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the content.
     *
     * @param  \App\User  $user
     * @param  \App\Content  $content
     * @return mixed
     */
    public function view(User $user, Content $content)
    {
        //
    }

    /**
     * Determine whether the user can create contents.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the content.
     *
     * @param  \App\User  $user
     * @param  \App\Content  $content
     * @return mixed
     */
    public function update(User $user, Content $content)
    {
        return $content->contentable->user_id == $user->id || $user->is_admin;
    }

    /**
     * Determine whether the user can delete the content.
     *
     * @param  \App\User  $user
     * @param  \App\Content  $content
     * @return mixed
     */
    public function delete(User $user, Content $content)
    {
        //
    }

    /**
     * Determine whether the user can restore the content.
     *
     * @param  \App\User  $user
     * @param  \App\Content  $content
     * @return mixed
     */
    public function restore(User $user, Content $content)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the content.
     *
     * @param  \App\User  $user
     * @param  \App\Content  $content
     * @return mixed
     */
    public function forceDelete(User $user, Content $content)
    {
        //
    }
}
