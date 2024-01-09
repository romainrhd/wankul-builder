<?php

test('can create card', function () {
    $response = $this->post('/api/card', [
        'number' => 1,
        'name' => 'Super carte',
        'image' => 'https://picsum.photos/200/300',
    ]);

    $response->assertStatus(201);
});
