<?php
namespace Domain\Task\Actions;

use Domain\Task\Models\Task;
use Domain\Task\DataTransferObjects\TaskData;

class CreateTaskAction
{

    public function __invoke(TaskData $taskData): Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category
        ]);
    }

}