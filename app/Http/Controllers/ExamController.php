<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('exam.index', compact('exam'));
    }

    public function create()
    {
        return view('exam.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'semester' => 'required',
                'date' => 'required|date',
                'time' => 'required',
                'subjects' => 'required',
            ]
        );
        Exam::create($request::all());

        return redirect()->route('exam.index')->with('success', 'Exam created successfully.');
    }

    public function edit(Exam $exam)
    {
        return view('exam.edit', compact('exam'));
    }

    public function update(Request $request, Exam $exam)
    {
        $request->validate(
            [
                'semester' => 'required',
                'date' => 'required|date',
                'time' => 'required',
                'subjects' => 'required',
            ]
        );
        $exam->update($request->all());

        return redirect()->route('exam.index')->with('success', 'Exam uppdated Successfully');
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index')->with('success', 'Exam deleted successfully.');
    }
}
