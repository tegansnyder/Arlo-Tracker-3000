## Newborn Tracker

This is a fork of [Sophie Tracker 3000](https://github.com/MiniCodeMonkey/Sophie-Tracker-3000). I will probably be changing a bunch of stuff to Hack this for my newborn boy Arlo. There are some features that didn't work or are missing from Sophie Tracker 3000, that I may remove or fix, like the ability to edit entries. Some of the dependencies were broken in composer and there was a missing package. I have fixed these in my fork.

![Dashboard](http://www.tegdesign.com/arlo/new_born_tracker.jpg)

------------

##### To add a new user:

```php
// default user credentials: app/database/seeds/UsersTableSeeder.php

$users = array(
	array('email' => 'test@test.com', 'password' => Hash::make('test'))
);

// Uncomment the below to run the seeder
DB::table('users')->insert($users);
```


##### Installing

```sh
git clone https://github.com/tegansnyder/Sophie-Tracker-3000.git
cd Sophie-Tracker-3000
cp app/config/dev/database.php to app/config/database.php

# edit app/config/database.php and change your MySQL database credentials

composer install

# create a new MySQL database for the config you entered in app/config/database.php
# then when that has a user assocaited with it you can create the database schema
# by running the following command:

php artisan migrate --seed
```


#### Notes

I was able to get this running on a rooted Amazon Fire HD 7 4th Generation, running the web app Kiosk mode using: 
- [Screen Timeout Toggle](https://play.google.com/store/apps/details?id=com.chemdroid.screentimeouttoggle) 
- [Browser Kiosk Launcher](https://play.google.com/store/apps/details?id=com.droidhoster.launcher)

I plan to tweak the design and ensure all functionality works.

----------------------



### Sophie Tracker 3000 
> by Mathias Hansen @MiniCodeMonkey
[Sophie Tracker 3000](https://github.com/MiniCodeMonkey/Sophie-Tracker-3000)