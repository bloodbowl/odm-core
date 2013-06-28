<?php
use \Symfony\Component\Yaml\Yaml;
use \Pimple;

$c = new Pimple();
$c['test_dir'] = __DIR__;
$c['fixtures_dir'] = $c['test_dir'] . '/fixtures';
$c['fixture.races'] = $c->share(function($c) {
    return Yaml::parse($c['fixtures_dir'] . '/races.yml');
});
return $c;
