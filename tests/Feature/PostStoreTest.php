<?php

use App\Models\User;

it('unauthenticated user connot store a post', function () {
    $response = $this->post('/posts');

    $response->assertStatus(302);
});
it('authenticated user can crate a post', function () {
    $user = User::factory()->create();
    $response = $this->actingAs($user)
        ->post('posts', [
            'user_id' => $user->id,
            'title' => 'test',
            'body' => 'body test',
            'status' => 'is_published'
        ]);
    $response->assertRedirect(route('welcomes'));
    $this->assert('posts', [
        'title' => 'tests'
    ]);
});
