<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\File;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
            'code' => 'PBU',
        ]);
        $service_khp = ServiceType::factory()->create([
            'name' => 'Keperluan Hukum Perusahaan',
            'code' => 'KHPh',
        ]);
        $service_khpr = ServiceType::factory()->create([
            'name' => 'Keperluan Hukum Perorangan',
            'code' => 'KHPg',
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

        $service_1 = Service::factory()->create([
            'name' => 'Pendirian StartUp',
            'cost' => 5_500_000,

            'service_type_id' => $service_pbh->id,
        ]);
        $service_1->files()->attach($npwp->id);
        $service_2 = Service::factory()->create([
            'name' => 'Haki',
            'cost' => 2_800_000,

            'service_type_id' => $service_khp->id,
        ]);
        $service_2->files()->attach($bpjs->id);
        $service_3 = Service::factory()->create([
            'name' => 'Surat Perjanjian',
            'cost' => 200_000,

            'service_type_id' => $service_khpr->id,
        ]);
        $service_3->files()->attach($sk->id);

        Customer::factory()
            ->state(new Sequence(
                ['service_id' => $service_1->id,],
                ['service_id' => $service_2->id,],
                ['service_id' => $service_3->id,],
            ))
            ->state(new Sequence(
                ['service_type_id' => $service_pbh->id,],
                ['service_type_id' => $service_khp->id,],
                ['service_type_id' => $service_khpr->id,],
            ))
            ->count(30)
            ->create();
    }
}
