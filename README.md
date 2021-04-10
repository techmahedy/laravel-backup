Laravel Database Backup Package
========================================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/actuallymab/laravel-comment/badges/quality-score.png?b=master)](https://github.com/techmahedy/laravel-backup/?branch=master)
[![Issues](https://img.shields.io/github/issues/techmahedy/laravel-backup.svg?style=flat-square)](https://github.com/techmahedy/laravel-backup/issues)
[![Stars](https://img.shields.io/github/stars/techmahedy/laravel-backup.svg?style=flat-square)](https://github.com/techmahedy/laravel-backup/stargazers)


This package will take backup your mysql database automatically via cron job.

## Installing laravel-backup

The recommended way to install laravel-backup package using composer

    composer require codecheef/backup

If your Laravel project version is less than 5 then 
## Add the service provider to `config/app.php`

'providers' => [

    Codecheef\Backup\BackupServiceProvider::class,

],

To test this package create a 'database' directory inside your public folder.

## Creating Directory

    /public/database

Then run below command to test it

    php artisan backup:run

## Setup Cron

To run it via cron job do it inside your app/Console/Kernel.php

 protected $commands = [

    BackupCommand::class

];

and now call it via shceduller that when you want to run it, like daily weekly etc.