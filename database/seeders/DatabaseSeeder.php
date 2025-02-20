<?php

namespace Database\Seeders;

use App\Models\Activitie;
use App\Models\Assessment;
use App\Models\Attachment;
use App\Models\AttachmentSantri;
use App\Models\Attendance;
use App\Models\Departemen;
use App\Models\KelasSantri;
use App\Models\Lessons;
use App\Models\permission;
use App\Models\ProgramStage;
use App\Models\Rapotsantri;
use App\Models\SantriFamily;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        SantriFamily::factory(10)->create();
        KelasSantri::factory(10)->create();
        Departemen::factory(10)->create();
        Lessons::factory(10)->create();
        Assessment::factory(10)->create();
        permission::factory(10)->create();
        Attendance::factory(10)->create();
        Rapotsantri::factory(10)->create();
        Attachment::factory(10)->create();
        Activitie::factory(10)->create();
        ProgramStage::factory(10)->create();
        AttachmentSantri::factory(10)->create();






    }
}
