<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $course;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Course $course)
    {
        
        $this->course = $course;
    }

    public function index()
    {
        return $this->course->paginate(10);
    }

    public function show($course)
    {
        return $this->course->find($course);
    }

    public function store(Request $request)
    {
        $this->course->create($request->all());
        return response()->json(['data'=>'Curso criado com sucesso!']);
    }

    public function update($course,Request $request)
    {
        $course =  $this->course->find($course);
        $course->update($request->all());
        return response()->json(['data'=>'Curso criado com sucesso!']);
    }

    public function destroy($course,Request $request)
    {
        $course =  $this->course->find($course);
        $course->delete($request->all());
        return response()->json(['data'=>'Curso excluído com sucesso!']);
    }    

}
