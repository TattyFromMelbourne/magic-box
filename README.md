#  magic-box

![Travis](https://travis-ci.org/CodeforAustralia/vhs.svg?branch=master)
[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

### Built With
Laravel 5.6

### Installation
**1.** To run your own version of this web application, install it on a LAMP or LEMP (Linux, nginx, MySQL and PHP) stack. See <a href="https://laravel.com/docs/5.6/installation" target="_blank">https://laravel.com/docs/5.6/installation</a> for more detailed installation instructions on how to set up Laravel.

**2.** Once you have your Laravel environment set up, you will want to clone this repository and then run the composer and npm installs (the packages are detailed in *composer.lock* and *package-lock.json* respectively.)

```bash
git clone https://github.com/TattyFromMelbourne/magic-box.git
cd magic-box
composer install && npm install
```
**Note** that the requirements for Laravel 5.6 are for PHP version 7.1.3 or higher. Now here we are requiring 7.2.3 (a current stable release at the time of writing) but if a lower version is installed in your environment you can change the *composer.json* and *composer.lock* to a lower version. The block in question is this:-

```json
"config": {
    "preferred-install": "dist",
    "sort-packages": true,
    "optimize-autoloader": true,
    "platform": {
        "php": "7.2.3"
    }
}
```

After that you may want to do a composer update and npm update.

```bash
composer update && npm update
```

**3.** In the *.env* file maintain:-
<ul type="square">
    <li>database connection credentials</li>
    <li>API credentials for
      <a href="https://www.twilio.com" target="_blank">Twilio</a>
    </li>
    <li>API credentials for
      <a href="https://www.mailgun.com" target="_blank">Mailgun</a>
    </li>
    <li>path on the server machine to where the "deconstructed" correspondence will be placed</li>
</ul>


**4.** Finally, create the tables in the database by using the usual Laravel migration:-
```bash
php artisan migrate
```

### Generate Data
In order to seed the database with some initial data, you will need to run the usual Laravel commands:-

```bash
composer dump-autoload
php artisan db:seed
```

This will:-
<ul type="square">
    <li>create a list of all Victorian postcodes and suburbs</li>
    <li>create a list of correspondence templates</li>
    <li>create a list of some sample services<br/>
(at this point the services are fictional)</li>
    <li>assign the services to existing users</li>
</ul>

Now if you do not have any users in the system yet, you may need to re-run the last step after you have entered or generated some users. The command to do that would be:-

```
php artisan db:seed --class=UserServicesTableSeeder
```

<b>To generate new users</b>, go to the following URL<br/>
<a href="">https://&lt;your instance&gt;/database</a>.<br/>This will generate up to 10 users with user addresses (with random postcodes and related suburbs.) <br/>
You may change the amount of user to be generated in ```App/Http/Controllers/GenerateController.php```.

The first user generated will be an administrator with the login credentials:-
<ul type="none">
<li>E-mail : test@test.com.au</li>
<li>Password: TestPassword</li>
</ul>

```diff
- It is IMPORTANT to immediately change the admin user login details!
```

### Notes on Notifications
***

#### To Receive Notification
To receive sample SMS and email notification go to the following URL<br/>
<a href="">https://&lt;your instance&gt;/notification</a>.<br/>
The notification will be sent to the logged-in user.

#### Email Notifications

Laravel has a built-in ```notifiable``` trait ( for an explanation of PHP traits see <a href="http://php.net/manual/en/language.oop5.traits.php" target="_blank">http://php.net/manual/en/language.oop5.traits.php</a>) which was used for email notification. For further reference see <a href="https://laravel.com/docs/5.5/notifications" target="_blank">https://laravel.com/docs/5.5/notifications</a>.

#### Twilio API Integration

For Twilio API, we have installed ```Aloha/Twilio``` package through ```Composer```. For further reference see <a href="https://github.com/aloha/laravel-twilio" target="_blank">https://github.com/aloha/laravel-twilio</a>.


### Team
***
<ul>
    <li>Tatiana Lenz</li>
    <li>Teresa Villanueva</li>
    <li>Rachelle Salvadora</li>
</ul>

### Acknowledgement
***

A number of FOSS (Free and Open Source) libraries have been used.
<ul>
   <li>Laravel 5.4 - <a href="https://github.com/laravel/laravel#license" target="_blank">MIT license</a></li>
   <li>jQuery 3.2.1 - <a href="https://getbootstrap.com/docs/3.3/getting-started/#license-faqs" target="_blank">MIT license</a></li>
   <li>Bootstrap 3.3.7 - <a href="https://github.com/necolas/normalize.css/blob/master/LICENSE.md" target="_blank">MIT license</a></li>
   <li><a href="https://github.com/legalthings/pdf.js-viewer" target="_blank">PDF.js</a> which is a built of pdf.js 1.7.354 - <a href="https://github.com/mozilla/pdf.js/blob/master/LICENSE" target="_blank">Apache 2.0 License</a></li>
</ul>
