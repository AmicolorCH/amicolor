# config valid only for current version of Capistrano
lock '3.4.1'

set :application, 'amicolor'
set :repo_url, 'git@bitbucket.org:WengerK/amicolor.git'

server 'mlzc.ftp.infomaniak.com', user: 'mlzc_amicolor', roles: %w{app db web}

set :app_path, "web"
set :theme_path, "themes/amicolor"
set :build_path, "css"

# Link file settings.php
set :linked_files, fetch(:linked_files, []).push("#{fetch(:app_path)}/sites/default/settings.php")

# Link file drushcr.php
set :linked_files, fetch(:linked_files, []).push("#{fetch(:app_path)}/sites/default/drushrc.php")

# Link dirs files and private-files
set :linked_dirs, fetch(:linked_dirs, []).push("#{fetch(:app_path)}/sites/default/files")

# Default value for :scm is :git
set :scm, :git

# Default value for :pty is false
# set :pty, true

# Default value for :format is :pretty
# set :format, :pretty

# Default value for :log_level is :debug
set :log_level, :debug

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }
# set :default_env, { path: "/usr/local/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 3

# Used only if composer.json isn't on root
# set :composer_working_dir, -> { fetch(:release_path).join(fetch(:app_path)) }

# Remove default composer install task on deploy:updated
# Rake::Task['deploy:updated'].prerequisites.delete('composer:install')
# Rake::Task['deploy:updated'];

namespace :deploy do
  # before :starting, "drupal:backup"

  after :updated, "styleguide:build"
  after :updated, "styleguide:deploy_build"
  # after :updated, "drupal:config:import"
  after :updated, "drupal:updatedb"
  after :updated, "drupal:cache:clear"

  before :cleanup, :fix_permission do
    on roles(:app) do
      releases = capture(:ls, '-xtr', releases_path).split
      if releases.count >= fetch(:keep_releases)
        directories = (releases - releases.last(fetch(:keep_releases)))
        if directories.any?
          directories_str = directories.map do |release|
            releases_path.join(release).join("#{fetch(:app_path)}/sites/default")
          end.join(" ")
          execute :chmod, 'u+w', directories_str
        end
      end
    end
  end
end
