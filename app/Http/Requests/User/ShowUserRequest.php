<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use App\Models\User;

class ShowUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize() : bool
    {
        return auth()->user()->can('view', $this->user);
    }

}