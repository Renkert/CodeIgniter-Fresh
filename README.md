# FRESH!

## History

We work mostly with LARAVEL and CODEIGNITER. Due to the fact that Codeigniter
is very stable and extremely fast, we realize 75% of our projects with Codeigniter.
So, not a bad idea to create a project template for the whole staff.

## Links/Scripts:

* [Codeigniter 3 PHP Framework](https://codeigniter.com) - Learn more about Codeigniter
* [UIKit CSS Framework](https://getuikit.com) - Learn more about UIkit
* [CodeIgniter HMVC Modules](https://github.com/jenssegers/codeigniter-hmvc-modules) - Learn more about Jens Segers great HMVC Modules Script.


## Installation:

by Renkert - Lead-Developer:
Download the script and keep in mind, that I reorganized the original Codeigniter
structure for security reasons.

**Important**: The Web Root has to be set to the **`/public`** folder.

## What's included:
Nothing special at the moment, some optimizations, improvements and changes
in the structure.

## What's not included:
Codeigniter User Guide. (Kidding me???)

### Language:
System (Codeigniter) language files for "english" and "german" are included.

### Libraries
An optimized version of Jens Segers HMVC Modules Library is included.

### Routes
CatchAll Routes are build in.

#### Advantage:

1. You can create SEO friendly links without a nesting folder structure, e.g. **`http://yourdomain/services/print/design`**.
	* In this case you only need a Controller in **`/app/controllers/pages/`** called **`Design.php`** if you need a controller.
	* Most of the time we use **dynamic content**, fetched with a database call. In this case you don't need a controller. Fresh is
	looking for a slug in our database, if found, page is shown, if not, 404 is shown.


2. FRESH! is searching for a controller with the name "design.php" in your CatchAll directory.

**Important**: You can change the CatchAll Controller Name **`$route['catch_controller']`** in **`/app/config/routes`** folder.
If you do so, you have to rename the appropriate foldername in **`/app/controllers/`** and you have to create an module
in folder **`/app/modules/`** with the same name and a Controller for the Module with the same name.

### .htaccess
The .htaccess file in **`/public`** folder is included. System is preconfigured for
mod_rewrite usage.

### /config/app.php
The **`/config/app.php`** file in **`/app/config`** folder is included.

## Versioning:
I use the same Version number as Codeigniter, so you can download the FRESH!
version with the appropriate Version of Codeiginter.

## Server Requirements

PHP version 5.6 or newer is recommended. I tested PHP version 7.3.8, everything fine.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features. So, talk to the clients, these versions should
normally not served anylonger.

## License

MIT License

## Acknowledgement & Thanks

* @Codeigniter, https://github.com/bcit-ci/CodeIgniter
* @UIKit 3, https://github.com/uikit/uikit
* @Jens Segers, https://github.com/jenssegers/codeigniter-hmvc-modules
* @Cătălin Mariș, https://github.com/alrra/browser-logos
