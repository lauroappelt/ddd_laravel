<?php 

namespace Domain\Task\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;
use App\Web\Task\Requests\TaskRequest;

class TaskData extends DataTransferObject
{
    /**
     * @var string
     */
    public $task;

    /**
     * @var string
     */
    public $category;

    public static function fromRequest(TaskRequest $request): TaskData
    {
        return new self([
            'task' => $request['task'],
            'category' => $request['category']
        ]);
    }
}