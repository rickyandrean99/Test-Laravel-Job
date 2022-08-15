<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Jobs\TransactionJob;

class TransactionController extends Controller
{
    public function addBalance() {
        $team_id = 1;
        $coin = 500;

        dispatch(new TransactionJob($team_id, $coin))->delay(now()->addSeconds(30));
        
        dd('Silahkan tunggu...');
    }
}
