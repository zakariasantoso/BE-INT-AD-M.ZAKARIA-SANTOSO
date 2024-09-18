<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;
use App\Models\Post;

class CategoryTest extends TestCase
{
    public function test_can_create_category()
    {
        $user = \App\Models\User::factory()->create();
        $loginResponse = $this->json('POST', 'api/auth/login', ['email' => $user->email, 'password' => 'password'])
            ->assertStatus(200)
            ->assertJsonStructure([
                "access_token",
                "token_type",
                "expires_in"
            ]);
        $token = $loginResponse['access_token'];
        $this->withHeader('Authorization', 'Bearer ' . $token);
        $this->json('POST', 'api/categories', [
            'name' => 'Test Category'
        ])->assertStatus(201)
            ->assertJson([
                'message' => 'Category created successfully'
            ]);
        $category = Category::where('name', 'Test Category')->first();
        $category->delete();
        $user->delete();
    }


}
