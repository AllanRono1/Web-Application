<?php

use Core\Container;

test('can resolve something out of the container', function () {
    $container = new Container();

    $container->bind('foo',fn()=>'foo');

    $results = $container->resolve('foo');

    expect($results)->toEqual('foo');
});
