<?php

it('validates a string', function () {
    expect(\Core\Validator::string('yellow!'))->toBeTrue();
    expect(\Core\Validator::string(false))->toBeFalse();
    expect(\Core\Validator::string(''))->toBeFalse();
});

it('validates a string with a minimum length', function () {
    expect(\Core\Validator::string('yellow!', 20))->toBeFalse();
});

it('validates an email to check if it is valid', function () {
    expect(\Core\Validator::email('yellow'))->toBeFalse();
    expect(\Core\Validator::email('yello@example.com'))->toBeTrue();
});

it('validates that a number is greater than a given amount', function () {
    expect(\Core\Validator::greaterThan(10, 1))->toBeTrue();
})->only();
