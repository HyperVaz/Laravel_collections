<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Psy\Util\Str;

class RunCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'r';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $numberCollection = collect([1, 2, 3, 4, 5]);
        $numberCollection2 = collect([6, 7, 8, 9, 10]);
        $anotherNumberCollection = collect([10, 20, 30, 40, 50]);

        $assocWorkerCollection = collect([
            [
                'name' => 'Boris',
                'age' => 20
            ],
            [
                'name' => 'Ivan',
                'age' => 25
            ],
            [
                'name' => 'Helen',
                'age' => 18
            ],
            [
                'name' => 'Ivan',
                'age' => 33
            ],
        ]);

        $collection = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);

        $nameCollection = collect(['Ivan', 'Boris', 'Kate',]);
        $ageCollection = collect([25, 40, 32, 44]);
        $anotherNameCollection = collect(['Ann', 'John', 'Kate', 'Kate']);
        $assocAnotherNameCollection = collect(['Ann' => 'boss', 'John' => 'developer']);

        [$first, $second] = $numberCollection->partition(function ($value) {
            return $value % 2 == 0;
        });
        dd($first, $second);
    }
}
