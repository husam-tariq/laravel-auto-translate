#Laravel Auto Translator

##Installation

Run the command below to install via Composer

```shell
composer require husam-tariq/auto-translator
```

Then add this line to your providers in config/app.php :

```shell
HusamTariq\autoTranslator\ServiceProvider::class,
```

And finally : 
```shell
php artisan translate
```

You will be prompted to choose the source language (Default: app.locale config value) then you will
be prompted again to enter the destination language (Default: app.fallback_locale config value), and that's it !

Laravel Auto Translator will create a new folder with the destination language, and copy the source files to be translated 
there but with new translated values.

Laravel Auto Translator detects :params and don't translate them. For example : "From :attribute !" with :attribute = site will give you in Arabic "من الموقع".

If you have extra directories where you have translations, different than lang folder, please run
```shell
php artisan vendor:publish
```
and add your directories paths in the Laravel Auto Translator newly created config file.

Please feel free to share with me your thoughts and suggestions.



