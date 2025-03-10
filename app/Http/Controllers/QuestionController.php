<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('cuestions/preguntas');
    }

    public function create()
    {
        return view('question.create');
    }
}
