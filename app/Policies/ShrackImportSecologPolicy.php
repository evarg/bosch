<?php

namespace App\Policies;

use App\Models\ShrackImportSecolog;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ShrackImportSecologPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ShrackImportSecolog $shrackImportSecolog): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ShrackImportSecolog $shrackImportSecolog): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ShrackImportSecolog $shrackImportSecolog): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ShrackImportSecolog $shrackImportSecolog): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ShrackImportSecolog $shrackImportSecolog): bool
    {
        //
    }
}
