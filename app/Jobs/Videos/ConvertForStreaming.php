<?php

namespace App\Jobs\Videos;

use App\Video;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Pbmedia\LaravelFFMpeg\FFMpegFacade as FFMpeg;
use FFMpeg\Format\Video\X264;



class ConvertForStreaming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo "converted";
        //  $lowBitrateFormat  = (new X264('aac'))->setKiloBitrate(100);
        //  $midBitrateFormat  = (new X264('aac'))->setKiloBitrate(250);
        //  $highBitrateFormat = (new X264('aac'))->setKiloBitrate(500);

        //   FFMpeg::fromDisk('local')
        //     ->open($this->video->path)
        //     ->exportForHLS()
        //     ->addFormat($lowBitrateFormat)
        //     ->addFormat($midBitrateFormat)
        //     ->addFormat($highBitrateFormat)
        //     ->save("public/videos/{$this->video->id}/{$this->video->id}.m3u8");
    }
}
