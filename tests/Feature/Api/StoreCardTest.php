<?php

test('can create card', function () {
    Storage::fake('local');
    $response = $this->post('/api/card', [
        'number' => 1,
        'name' => 'Super carte',
        'image' => 'https://picsum.photos/200/300',
        'land' => false,
    ]);

    $response->assertStatus(201);
    $this->assertDatabaseHas('cards', [
        'number' => 1,
        'name' => 'Super carte',
        'image' => '1.jpg',
    ]);
});
