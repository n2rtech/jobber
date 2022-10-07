<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:rc21292/daltontvcrm.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('34.243.179.4')
    ->set('remote_user', 'ubuntu')
    ->set('deploy_path', '/var/www/html');

// Hooks

after('deploy:failed', 'deploy:unlock');
