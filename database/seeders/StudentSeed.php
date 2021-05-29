<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student;
        $student->nama = 'Taufan';
        $student->nbi = '00089';
        $student->email = 'e@mail.com';
        $student->save();

        $student = new Student;
        $student->nama = 'Eki';
        $student->nbi = '00489';
        $student->email = 'eki@mail.com';
        $student->save();

        $student = new Student;
        $student->nama = 'Eris';
        $student->nbi = '00589';
        $student->email = 'eris@mail.com';
        $student->save();
    }
}
