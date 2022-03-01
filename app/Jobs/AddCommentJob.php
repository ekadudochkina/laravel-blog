<?php

namespace App\Jobs;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddCommentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $details;

    /**
     * Количество попыток выполнения задания.
     *
     * @var int
     */
    public $tries = 2;

    /**
     * Задать временной предел попыток выполнить задания.
     *
     * @return \DateTime
     */
    public function retryUntil()
    {
        return now()->addMinutes(10);
    }

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Добавляет комментарий для статьи
     *
     * @return void
     */
    public function handle()
    {
        sleep(600);
        $model = new Comment();
        $model->article_id = $this->details["articleId"];
        $model->subject = $this->details["subject"];
        $model->body = $this->details["body"];
        $save = $model->save();
    }
}
