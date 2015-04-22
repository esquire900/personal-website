<?php

require 'recipe/common.php';

server('main', '192.121.166.203', 22)
    ->path('/var/www/simonnouwens.nl/')
    ->user('root', '352s7wevz9f');

// Specify repository from which to download your projects code.
// Server has to be able clone your project from this repository.
set('repository', 'https://simonnouwens:352s7wevz9fa@bitbucket.org/simonnouwens/personal-website.git');

task('deploy:remove_all_but_dist', function(){
    $releasePath = env()->getReleasePath();
    cd($releasePath);
    // run("
    //     cp -R /dist /var/www/tmp
    //     rm -rf /dir/
    //     cp -R /var/www/tmp ./
    // ");
});

task('deploy', [
    'deploy:start',
    'deploy:prepare',
    'deploy:update_code',
    'deploy:remove_all_but_dist',
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
