<?php

namespace App\Policies;

use App\Models\ShrackImportElement;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ShrackImportElementPolicy
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
    public function view(User $user, ShrackImportElement $shrackImportElement): bool
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
    public function update(User $user, ShrackImportElement $shrackImportElement): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ShrackImportElement $shrackImportElement): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ShrackImportElement $shrackImportElement): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ShrackImportElement $shrackImportElement): bool
    {
        //
    }
}
