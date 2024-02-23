<?php

namespace App\Console\Commands;

use App\Models\Student;use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Hello, world!";

        //ORM

        // "Eloquent"

        Student::create([
            'name' => 'John Doe',
            'grade' => 12,
        ]);

        $absentStudents = Student::whereNotNull('absent_at')->get();

        dd($absentStudents->toArray()); // die and dump

        //
    }
}
