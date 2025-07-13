<?php

test('coment', function () {
    $this->view('comment',[])
    ->assertDontSeeText('INI ADALAH KOMENTAR');
});
