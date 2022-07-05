<?php

namespace App\Console\Commands;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class DeleteCarts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:cart';

    /**
     * The console command description.
     *
     * @var string
     */
    //    protected $description = 'Send a Daily email to all users with a word and its meaning';

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
        // Delete carts & cartItems of 7 days ago
        $cart = Cart::query()->where('updated_at', '<', Carbon::now()->subDays(7))->delete();

        $cart ? Log::info("remove") : Log::warning("not remove");
    }
}
