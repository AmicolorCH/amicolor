# overwrite deploy_to
set :deploy_to, '/home/clients/d875559f75e3a617327ca7d702a02f93/web/amicolor.ch'

# set a branch for this release
set :branch, 'master'

set :composer_install_flags, '--no-dev --no-interaction --optimize-autoloader'

# Map composer and drush commands
# NOTE: If stage have different deploy_to
# you have to copy those line for each <stage_name>.rb
# See https://github.com/capistrano/composer/issues/22
SSHKit.config.command_map[:composer] = shared_path.join("composer.phar")
SSHKit.config.command_map[:drush] = shared_path.join("vendor/bin/drush")

# Change the PHP Path to use 5.6
fetch(:default_env).merge!(PATH: '$PATH:/opt/php5.6/bin')
