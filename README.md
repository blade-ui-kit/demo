<p align="center">
    <img src="https://github.com/blade-ui-kit/art/blob/main/socialcard-blade-example.png" width="1280" title="Social Card Blade UI Kit Demo Project"/>
</p>

# Blade UI Kit Demo Project

<a href="https://github.com/blade-ui-kit/demo/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/demo/workflows/Tests/badge.svg" alt="Tests">
</a>

This is a demo Laravel project which demonstrate the usage for some of the components from [Blade UI Kit](https://github.com/blade-ui-kit/blade-ui-kit).

It's built using components from [Tailwind UI](https://tailwindui.com) by [Adam Wathan](https://twitter.com/adamwathan) & [Steve Schoger](https://twitter.com/steveschoger).

<img src="https://github.com/blade-ui-kit/blade-ui-kit-example/blob/main/preview.jpg" width="600"/>

## Requirements

The following tools are required in order to start the installation.

- PHP >=8.0
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## Installation

1. Clone this repository locally with `git clone git@github.com:blade-ui-kit/demo.git blade-ui-kit-demo`
2. Create `database/database.sqlite` file to local database
3. Copy the `.env.example` file to `.env`
4. Install the PHP dependencies with `composer install`
5. Generate a new app key with `php artisan key:generate`
6. Prepare the database by running `php artisan migrate --seed`
7. Install and compile the front-end dependencies with `npm install && npm run dev`
8. Set a valid `UNSPLASH_ACCESS_KEY` and `MAPBOX_PUBLIC_TOKEN` value in your `.env` file
9. Serve the website locally by running `php artisan serve`

You can now visit the app in your browser by visiting [http://127.0.0.1:8000](http://127.0.0.1:8000). You can login in with **`john@example.com`** & **`password`**.

## Commands

Command | Description
--- | ---
**`php artisan test`** | Run the tests
`php artisan migrate:fresh --seed` | Reset the database
`npm run watch` | Watch for changes in CSS and JS files
