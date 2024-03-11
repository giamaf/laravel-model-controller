<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Larvel Model & Controller
Utilizzando l’ORM di Laravel:
 - creo un nuovo progetto Laravel 10
 - tramite phpMyAdmin creo un nuovo database laravel_model_controller
 - importo nel database la tabella movies
 - inserisco le credenziali per il database nel file .env
 - creo un model Movie <strong>(php artisan make:model Movie)</strong>
 - creo un controller che gestirà la rotta / <strong>(php artisan make:controller HomeController)</strong>
 - all’interno della funzione <strong>__invoke()</strong> del controller, recupero tutti i film dal database e li passo alla view per visualizzarli a schermo tramite delle cards.
