<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $tasks = Task::all();

        return response($tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        abort(501, 'Not implemented.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Response
    {
        abort(501, 'Not implemented.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task): Response
    {
        abort(501, 'Not implemented.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task): Response
    {
        abort(501, 'Not implemented.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): Response
    {
        abort(501, 'Not implemented.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task): Response
    {
        throw new \Exception('Not implemented');
    }
}
