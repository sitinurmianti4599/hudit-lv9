<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = Role::create([
            'position' => 'administrator',
        ]);
        $role_person_responsible = Role::create([
            'position' => 'person_responsible',
        ]);

        User::factory()->create([
            'name' => 'admin',
            'password' => 'admin',

            'role_id' => $role_administrator->id,
        ]);
        $pj_1 = User::factory()->create([
            'name' => 'pj_1',
            'password' => 'pj_1',

            'role_id' => $role_person_responsible->id,
        ]);
        $pj_2 = User::factory()->create([
            'name' => 'pj_2',
            'password' => 'pj_2',

            'role_id' => $role_person_responsible->id,
        ]);
        $pj_3 = User::factory()->create([
            'name' => 'pj_3',
            'password' => 'pj_3',

            'role_id' => $role_person_responsible->id,
        ]);

        $service_pbh = ServiceType::factory()->create([
            'name' => 'Pendirian Badan Hukum',
        ]);
        $service_khp = ServiceType::factory()->create([
            'name' => 'Keperluan Hukum Perusahaan',
        ]);
        $service_khpr = ServiceType::factory()->create([
            'name' => 'Keperluan Hukum Perorangan',
        ]);

        $npwp = File::factory()->create([
            'name' => 'NPWP',
            'location' => 'Kantor Pajak',
            'day_estimate' => 7,

            'user_id' => $pj_1->id,
        ]);
        $bpjs = File::factory()->create([
            'name' => 'BPJS',
            'location' => 'Kantor BPJSk',
            'day_estimate' => 14,

            'user_id' => $pj_2->id,
        ]);
        $sk = File::factory()->create([
            'name' => 'SK MENKUMHAM',
            'location' => 'Kantor Hukum',
            'day_estimate' => 24,

            'user_id' => $pj_3->id,
        ]);

        Service::factory()->create([
            'name' => 'Pendirian StartUp',
            'cost' => 5_500_000,

            'service_type_id' => $service_pbh->id,
        ])->files()->attach($npwp->id);
        Service::factory()->create([
            'name' => 'Haki',
            'cost' => 2_800_000,

            'service_type_id' => $service_khp->id,
        ])->files()->attach($bpjs->id);
        Service::factory()->create([
            'name' => 'Surat Perjanjian',
            'cost' => 200_000,

            'service_type_id' => $service_khpr->id,
        ])->files()->attach($sk->id);
    }
}
