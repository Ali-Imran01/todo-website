<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // TODO 2: Tell Laravel which columns may be filled from a form
    //         (so Todo::create($data) works).
    //         Hint: look up `$fillable` in the Eloquent docs.
    //         Question: why is it dangerous to allow ALL columns?

    // TODO 2b (optional): Make your "done" column come back as true/false
    //         instead of 1/0. Hint: `casts()`.
}
