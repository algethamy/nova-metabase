# Nova Metabase

Nova Metabase is a package for Laravel Nova that adds the ability to display Metabase dashboards within a Nova Card by framing them in an iFrame. This powerful feature enables the display of various statistics directly within your Nova dashboard.

## Installation

To install the Nova Metabase package into your Laravel Nova application, you can use Composer with the following command:
```bash
composer require ncpd/nova-metabase
```

After running this command, Composer will download and install the `ncpd/nova-metabase` package into your Laravel Nova application.

To publish the configuration file, run the following command:
```bash
php artisan vendor:publish --provider=Ncpd\Metabase\CardServiceProvider
```
That will publish a configuration file where you can specify your Metabase URL and secret key.

## Usage

To utilize the Nova Metabase card, you need to create an instance of the `Metabase` class with the id of your desired Metabase dashboard and any necessary parameters.
```php
use Ncpd\Metabase\Metabase;
// Inside your Nova resource...
public function cards(Request $request) { 
    return [ 
        (new Metabase(1))->width('full'), /* Replace 1 with your Metabase dashboard id */ 
    ]; 
}
```
In the example above, we are creating a new instance of the `Metabase` class with dashboard id as 1. The `width('full')` sets the width to the full size. Replace `1` with the id of your actual Metabase dashboard.

