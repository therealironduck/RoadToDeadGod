<?php

use App\Models\User;
use function Pest\Laravel\be;
use function Pest\Laravel\post;

it('allows the user to request a new email verification email', function(): void {
    $user = User::factory()->unverified()->create();
    be($user);

    post(route('verification.send'))
        ->assertRedirect()
        ->assertSessionHas('status', 'verification-link-sent');
});
