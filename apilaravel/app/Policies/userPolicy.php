<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class userPolicy
{
    use HandlesAuthorization;

    public function before(User $user, $ability){
        return $user->id == '';
    }

    public function validation(User $auth, User $user){
        return $auth->id == $user->id;
    }
}
