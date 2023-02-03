<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return view('worker.index', compact('workers'));
    }

//    public function create()
//    {
//        return view('worker.create');
//    }

//    public function store()
//    {
//        $worker = [
//            'name' => 'Ivan',
//            'last_name' => 'Ivanov',
//            'email' => 'ivanov@user.ru',
//            'age' => 20,
//            'description' => 'it is Ivan',
//            'is_married' => false,
//        ];
//
//        Worker::create($worker);
//        return view('worker.create');
//    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

//    public function update()
//    {
//
//    }
//
//    public function delete()
//    {
//
//    }


}
