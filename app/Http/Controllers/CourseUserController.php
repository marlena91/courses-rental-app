<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($courseId, $userId)
    {
        $courseuser = CourseUser::where('course_id',$courseId)->where('user_id', $userId)->count();
        if($courseuser){
            return redirect('/courses');
        } else{
            $user = User::find($userId);
            $user->courses()->attach($courseId);
            return redirect('/users/'.$userId);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($courseId, $userId)
    {
        $user = User::find($userId);
        $user->courses()->detach($courseId);

        return redirect('/users/'.$userId);
    }
}
