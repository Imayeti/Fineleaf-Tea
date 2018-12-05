# Fineleaf Tea
"By Micah Jones"

Github - https://github.com/Imayeti/Final-Project-3
Heroku - https://fineleaf.herokuapp.com/

Fineleaf tea is an ecommerce sight for fine tea and teaware. On this sight you can see a selection of 40 different teas and tewares to choose from. Items can be added to your shopping cart and will be saved there the next time you log in. Users can also see their purchase history on the My Orders tab. Users can add reviews and ratings to each item. The average of all ratings will be displayed as the overall rating for the tea.

Before working on this project you will need installed:
  - Git
  - Laravel
  - NPM

## For Local Installation

  1. Clone this Repository
  2. Run these commands to set up your local environment:

- $composer install
- $npm install
- $cp .env.example .env
- $php artisan key:generate

## Compiling Assets

  You can compile your assets in laravel by running **$ npm run dev** in the command line. Or if you want to automatically
  compile assets after saves have been made, use **$ npm run watch**. To compile for production run **$ npm run production**.

## For Connecting to Database locally and on Heroku

Place this at the top of your .env file, filling each section appropriately
```
DATABASE_URL=databasetype://user:password@host:port/databasename
```

Inside of config/database.php, place this at the top of the file

```
$url = parse_url(getenv("DATABASE_URL"));
$dbhost = $url['host'];
$dbuser = $url['user'];
$dbpass = $url['pass'];
$dbport = $url['port'];
$dbname = substr($url['path'],1);
```

(if using Postgres) In the same file set 'pgsql' to the following

```
'pgsql' => [
    'driver' => 'pgsql',
    'host' => $dbhost,
    'port' => $dbport,
    'database' => $dbname,
    'username' => $dbuser,
    'password' => $dbpass,
    'charset' => 'utf8',
    'prefix' => '',
    'prefix_indexes' => true,
    'schema' => 'public',
    'sslmode' => 'prefer',
```
Also in same file set
```
'default' =>  'pgsql',
```
