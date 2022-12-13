<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use data;
use Faker\Factory;
use FontLib\Table\Type\name;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MahasiswaControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function data_mahasiswa()
    {
        // $user = factory(user::class)->create();
        $user = User::factory()->create();
        $category = Mahasiswa::factory()->create();

        $response = $this->actingAs($user)->post(route(name: 'mahasiswa.tambah'), [
            'name' => $this->faker->words(3, true),
            'nim' => $category->id,
            'jurusan' => $this->faker->sisteminformasi(3),
            'semester' => $this->faker->lima(6),
        ]);
        $response->assertStatus(302);  
        $response->assertRedirect(route('mahasiswa.tambah'));
    }
}
