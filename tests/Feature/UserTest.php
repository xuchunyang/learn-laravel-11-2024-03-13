<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_access_missing_field_raise_exception(): void
    {
        // $this->expectException(ModelNotFoundException::class);
        $user = User::firstOrFail();

        $this->assertTrue($user->exists);
        $this->assertIsInt($user->id);

        $this->expectException(\Exception::class);
        dump("User's missing_field", $user->missing_field);
    }
}
