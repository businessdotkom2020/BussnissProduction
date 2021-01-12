<?php

namespace App\Console\Commands;

use App\Models\Store;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RemainingTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RemainingTime:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is Updating Store Remaining Time ';

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
     * @return mixed
     */
    public function handle()
    {

        $stores = Store::where([['status',1],['expire_date','!=',null]])->get();
        foreach($stores as $store){
            $store->remaining_time = Carbon::parse($store->expire_date)->diffForHumans();
            $store->save();
            echo "Today  users registered";
        }
    }
}
