<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view a list of model.
     *
     * @param  \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('view any companies');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User    $user
     * @param  \App\Models\Company $model
     * @return mixed
     */
    public function view(User $user, Company $model)
    {
        return $user->can('view companies');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('create companies');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User    $user
     * @param  \App\Models\Company $model
     * @return mixed
     */
    public function update(User $user, Company $model)
    {
        return $user->can('update companies');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User    $user
     * @param  \App\Models\Company $model
     * @return mixed
     */
    public function delete(User $user, Company $model)
    {
        return $user->can('delete companies');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User    $user
     * @param  \App\Models\Company $model
     * @return mixed
     */
    public function restore(User $user, Company $model)
    {
        return $user->can('restore companies');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User    $user
     * @param  \App\Models\Company $model
     * @return mixed
     */
    public function forceDelete(User $user, Company $model)
    {
        return $user->can('force delete companies');
    }
}
