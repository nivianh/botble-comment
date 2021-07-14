# Botble plugin comment

## Install

- Clone and copy to your plugins folder
- Rename comment folder
- Before enable you need to makesure Laravel Passport is installed or just update
``` bash
$ composer update
```
- Install passport if this is your first time
```bash
# update passport database
$ php artisan migrate 
# install key
$ php artisan passport:install 
```
- You need to enable comment embed: Setting > Comment

## Usage
- Insert to your Article with ShortCode:
``` php
[comment][/comment]
```
- Or auto embed to your article: Setting > Comment
