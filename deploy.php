<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/php-fpm.php';
require 'contrib/npm.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:rc21292/daltontvcrm.git');
set('php_fpm_version', '8.0');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('216.158.229.197')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/daltontvcrm');

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
    'php-fpm:reload',
]);

task('npm:run:prod', function () {
    cd('{{release_or_current_path}}');
    run('npm run prod');
});

// Hooks

after('deploy:failed', 'deploy:unlock');
