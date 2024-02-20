<?php

use App\Models\Course;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it("shows course overview", function () {

    // Arrange
    Course::factory()->create(['title' => 'Course A']);
    Course::factory()->create(['title' => 'Course B']);
    Course::factory()->create(['title' => 'Course C']);
    // Act && Assert

    get(route("home"))
        ->assertSeeText([
            'Course A',
            'Course B',
        ]);
});

it('shwos only released courses', function () {

});

it("show course by released date", function () {

});
