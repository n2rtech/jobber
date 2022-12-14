<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:rc21292/daltontvcrm.git');
set('php_fpm_version', '8.0');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('34.243.179.4')
    ->set('remote_user', 'ubuntu')
    ->set('deploy_path', '/var/www/html');

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:migrate',
    'npm:install',
    'npm:run:prod',
    'deploy:publish',
]);

task('npm:run:prod', function () {
    cd('{{release_or_current_path}}');
    run('composer install');
    run('npm run build');
});

// Hooks

after('deploy:failed', 'deploy:unlock');
