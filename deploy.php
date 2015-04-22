<?php

require 'recipe/common.php';

server('main', '192.121.166.203', 22)
    ->path('/var/www/simonnouwens.nl/website/')
    ->user('root', '352s7wevz9f');

// Specify repository from which to download your projects code.
// Server has to be able clone your project from this repository.
set('repository', 'https://simonnouwens:352s7wevz9fa@bitbucket.org/simonnouwens/personal-website.git');

task('deploy', [
    'deploy:start',
    'deploy:prepare',
    'deploy:update_code',
    'deploy:symlink',
    'cleanup',
    'deploy:end'
])->desc('Deploy your project');

/**
 * Success message
 */
after('deploy', function () {
    $host = config()->getHost();
    writeln("<info>Successfully deployed on</info> <fg=cyan>$host</fg=cyan>");
});
