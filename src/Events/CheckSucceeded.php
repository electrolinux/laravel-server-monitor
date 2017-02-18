<?php

namespace Spatie\ServerMonitor\Events;

use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\ServerMonitor\Models\Check;

class CheckSucceeded implements ShouldQueue
{
    /** @var \Spatie\ServerMonitor\Check */
    public $check;

    /** @var string */
    protected $message;

    public function __construct(Check $check, string $message)
    {
        $this->check = $check;

        $this->message = $message;
    }
}