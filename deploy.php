<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:rc21292/daltontvcrm.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('216.158.229.197')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/daltontvcrm');

// Hooks

after('deploy:failed', 'deploy:unlock');
