<?php

namespace Database\Seeders;

use App\Models\Activitie;
use App\Models\Assessment;
use App\Models\Attachment;
use App\Models\AttachmentSantri;
use App\Models\Attendance;
use App\Models\Departemen;
use App\Models\Departmen;
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
        $dataUser = User::factory(50)->create();
        $dataSantriFamily = SantriFamily::factory(50)->create();
        $dataKelasSantri = KelasSantri::factory(50)->create();
       $dataDepartmen = Departmen::factory(50)->create();
        $dataLessons = Lessons::factory(50)->create();
        $dataAssessment = Assessment::factory(50)->create();
        $datapermission = permission::factory(50)->create();
        $dataAttendance = Attendance::factory(50)->create();
        $dataRapotsantri = Rapotsantri::factory(50)->create();
        $dataAttachment = Attachment::factory(50)->create();
        $dataActivitie = Activitie::factory(50)->create();
        $dataProgramStage = ProgramStage::factory(50)->create();
        $dataAttachmentSantri = AttachmentSantri::factory(50)->create();

        foreach ($dataUser as $data) {
            $data->update([
                'kelas_santri_id' => KelasSantri::all()->random()->id,
                'departmen_id' => Departmen::all()->random()->id,
                'program_stage_id' => ProgramStage::all()->random()->id
            ]);
        }

        foreach ($dataSantriFamily as $data) {
            $data->update([
                'santri_id' => User::all()->random()->id
            ]);
        }

        foreach ($dataKelasSantri as $data) {
            $data->update([
                'mentor_id' => User::all()->random()->id
            ]);
        }

        foreach ($dataLessons as $data) {
            $data->update([
                'kelas_santri_id' => KelasSantri::all()->random()->id
            ]);
        }
        foreach ($dataAssessment as $data) {
            $data->update([
                'santri_id' => User::all()->random()->id,
                'lessons_id' =>Lessons::all()->random()->id
            ]);
        }

        foreach ($dataRapotsantri as $data) {
            $data->update([
                'santri_id'=> User::all()->random()->id
            ]);
        }

        foreach ($dataDepartmen as $data) {
            $data->update([
                'leader_id' => User::all()->random()->id,
                'co_leader_id' => User::all()->random()->id,
            ]);
        }

        foreach ($dataAttendance as $data) {
            $data->update([
                'activity_id'=> Activitie::all()->random()->id,
                'santri_id' => User::all()->random()->id,
            ]);
        }


        foreach ($dataAttachmentSantri as $data) {
            $data->update([
                'santri_id' => User::all()->random()->id,
                'attachment_id' => Attachment::all()->random()->id,
            ]);
        }

        




    }
}
