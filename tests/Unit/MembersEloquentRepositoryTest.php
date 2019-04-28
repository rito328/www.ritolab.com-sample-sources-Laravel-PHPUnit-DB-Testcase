<?php
declare(strict_types=1);

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Repositories\MembersEloquentRepository AS Members;

class MembersEloquentRepositoryTest extends MembersRepositoryInterfaceTest
{
    use RefreshDatabase;

    protected $Members;

    public function setUp(): void
    {
        parent::setUp();

        // $this->seed('MembersTableSeeder');
        // ↓
        // factory(\App\Member::class, 'member_sub_1')->create();
        // factory(\App\Member::class, 'member_sub_3')->create();
        // ↓
        factory(\App\Member::class, 10)->create();

        $this->Members = new Members();
    }

    public function tearDown(): void
    {
        Artisan::call('migrate:refresh');
        parent::tearDown();
    }
}
