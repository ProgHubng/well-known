<?php

namespace App\Console\Commands;

use App\Models\Purchased_plan;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class InvestCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invest:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send balance to users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        \Log::info("Cron is working fine!");

            $now = Carbon::now();
            $plans = Purchased_plan::where('status','success')->where('end_date', '>=', $now)->get();
            $time = $now->format('H');   //14:15:16
            foreach($plans as $item){

                if ($item->created_at->format('H') == $time) {

                    $item->user->balance += $item->daily_income;
                    $item->user->earn += $item->daily_income;
                    $item->user->save();

                }

            }

            $this->info('invest cron has been sent successfully');
    }
}
