<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function users_can_visit_the_homepage()
    {
        $this->get('/')
            ->assertStatus(200);
    }

    /** @test */
    public function users_need_to_login()
    {
        $this->get('/home')
            ->assertRedirect('/login');
    }

    /** @test */
    public function users_can_visit_their_dashboard()
    {
        $this->be(User::factory()->create());

        $this->get('/home')
            ->assertStatus(200);
    }

    /** @test */
    public function users_can_visit_their_settings()
    {
        $this->be(User::factory()->create());

        $this->get('/settings')
            ->assertStatus(200);
    }
}
