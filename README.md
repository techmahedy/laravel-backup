This package will take backup you mysql database automatically via cron job.

## Installing laravel-backup

The recommended way to install contact-package using composer

    composer require codecheef/backup

If your Laravel project version is less than 5 then 
## Add the service provider to `config/app.php`

'providers' => [

    Codecheef\Backup\BackupServiceProvider::class,

],

