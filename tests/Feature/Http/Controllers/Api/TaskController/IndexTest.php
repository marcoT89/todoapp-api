<?php

use Database\Factories\TaskFactory;

it('should be authenticated')->skip('To be implemented.');
// TDD -> Test Drive Development
it('should return a list of tasks paginated by 15', function () {
    TaskFactory::new()->count(16)->create();
    this()->getJson(route('api.tasks.index'))
        ->assertJsonCount(15, 'data')
        ->assertJsonStructure([
            'data' => [
                ['id', 'name', 'description', 'completed_at']
            ],
            'links',
            'meta',
        ]);
});
