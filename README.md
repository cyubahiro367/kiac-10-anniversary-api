# KIAC-10-ANNIVERSARY

### Setup
These are the procedures to follow when setting up the app for the first time using sail with docker

- Install composer dependencies
    ```
    docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php80-composer:latest composer install --ignore-platform-reqs
    ```
- Build the project **(keep this running in a tab in order to get access to the sail command)**
    ```
    vendor/bin/sail up

- Run migrations
    ```
    vendor/bin/sail artisan migrate:fresh
    ```
### Start project
These are the commands to run when starting project

- Start the php and mysql servers
    ```
    vendor/bin/sail up
    ```
