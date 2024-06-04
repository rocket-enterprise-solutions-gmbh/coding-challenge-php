<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController
{
    public function persistMultiple(Request $request)
    {
        foreach ($request->get('tasks') as $task) {
            DB::insert('insert into tasks (name) values (?)', [$task]);
        }
    }
}
