<?php

namespace App\Web\Task\Controllers;

use App\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();
        return view('welcome', compact('tasks'));
    }

    public function store(TaskRequest $taskRequest, CreateTaskAction $action)
    {   
        $data = TaskData::fromRequest($taskRequest);
        $response = $action($data);
        return back()->with(['success' => 'task created']);
    }
}
