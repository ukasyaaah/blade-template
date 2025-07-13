<?php

use function Pest\Laravel\get;

test('hello', function () {
    get('/hello')->assertSeeText('Hello Ukhasyah');
});

test('view', function () {
    $this->view('hello', [
        'name' => 'Laravel',
        'title' => 'Larapwell'
    ])->assertSeeText('Hello Laravel');
});

