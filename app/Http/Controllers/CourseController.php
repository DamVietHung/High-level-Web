<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    function index(){
        return view('course.index');  
    }
    function findCourse($id){
        $course = Course::find($id);
        echo $course->id;
        echo $course->courseName;
    }
}
