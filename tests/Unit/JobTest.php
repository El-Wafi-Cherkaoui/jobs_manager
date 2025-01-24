<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

it('belongs to employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(["employer_id" => $employer->id]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags #1', function(){
    $job = Job::factory()->create();
    $job->add_tag('backend');

    expect($job->tags->count())->tobe(1);
});
it('can have tags #2', function(){
    $job = Job::factory()->create();
    $tag = Tag::factory()->create();
    $job->tags()->attach($tag);

    expect($job->tags->contains($tag))->toBeTrue();
});
it('can has more than one tag', function(){
    $job = Job::factory()->create();
    $tag = Tag::factory()->create(['title'=> 'tag1']);
    $tag2 = Tag::factory()->create(['title'=> 'tag2']);
    $job->tags()->attach($tag);
    $job->tags()->attach($tag2);

    expect($job->tags->count())->toBe(2);
});
it('deleting tag removes it record', function(){
    $job = Job::factory()->create();
    $tag = Tag::factory()->create(['title'=> 'tag1']);
    $job->tags()->attach($tag);
    $tag->delete();

    expect($job->tags->count())->toBe(0);
});
