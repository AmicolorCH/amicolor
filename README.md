# Amicolor
Amicolor website. Drupal 8 powered.


## Prerequisites

First of all, you need to have the following tools installed globally on your environment:

  * composer
  * drush

### Tips

To run any drush command, you need to be on a hight bootstrapped drupal directory, such `/web`.

  ```bash
  $ cd /web
  ```

On common errors, see the Troubleshootings section.

## Install

1. Setup your virtualhost (like `http://amicolor.dev`) to serve `/web`.

2. Install Drupal and dependencies using composer

  ```bash
  composer install
  ```

3. Go to http://amicolor.dev and follow install instruction
   Or run the following command:

  ```bash
  $ drush si standard --db-url=mysql://root:dbpassword@127.0.0.1/amicolor_dev --site-name="Amicolor" --account-name=admin --account-pass=admin --account-mail=wenger.kev@gmail.com
  ```

4. Use the same site UUID than your collegue:

  ```bash
  $ drush config-set system.site uuid "b7cd2fe7-2a75-46b7-b812-e23cfa91b300"
  ```

  (This is certainly a bad idea, [follow this drupal issue](https://www.drupal.org/node/1613424)).

5. Update your  `web/sites/default/settings.php`:

  ```bash
  $ vim web/sites/default/settings.php
  ```

  ```php
  $config_directories['sync'] = '../config/d8/sync';
  ```

6. Update your `web/sites/default/drushrc.php`:

  ```bash
  $ cp web/sites/default/default.drushrc.php web/sites/default/drushrc.php
  $ vim web/sites/default/drushrc.php
  ```

  ```php
  $options['uri'] = "http://amicolor.dev";
  ```

7. Import the configuration

  ```bash
  $ drush cim
  ```

8. Rebuild the cache

  ```bash
  $ drush cr
  ```

## After a git pull/merge

  ```bash
  $ drush cim
  $ drush cr
  ```

## Build the theme

You first need to setup the work environment by running `$ npm install`.
then, run the `$ gulp sass`.

To rebuild automatically when files change

  ```bash
  $ gulp sass:watch
  ```

## Deploy
The deployment of branch `dev` and `master` is automatically managed by Codeship!


### First time

  ```bash
  # You need to have ruby & bundler installed
  $ bundle install
  $ npm install -g gulp
  ```

The remote server need `drush` and `composer` to be installed locally, we have tasks for this !

  ```bash
  $ bundle exec cap production composer:install_executable
  $ bundle exec cap production drush:install
  ```
### Each times

We use Capistrano to deploy:

  ```bash
  $ bundle exec cap -T
  $ bundle exec cap production deploy
  ```

## Troubleshootings

### Error while importing config ?

```
The import failed due for the following reasons:                                                                                                   [error]
Entities exist of type <em class="placeholder">Shortcut link</em> and <em class="placeholder"></em> <em class="placeholder">Default</em>. These
entities need to be deleted before importing.
```

Solution 1: Delete all your shortcuts from the Drupal Admin on [admin/config/user-interface/shortcut/manage/default/customize](admin/config/user-interface/shortcut/manage/default/customize).

Solution 2: Delete all your shortcuts with drush

```
drush ev '\Drupal::entityManager()->getStorage("shortcut_set")->load("default")->delete();'
```

### How to disable the Drupal Cache for dev ?

Follow the official documentation: https://www.drupal.org/node/2598914

### How to enable the Twig Debug for dev ?

Follow the official documentation: https://www.drupal.org/node/1903374
