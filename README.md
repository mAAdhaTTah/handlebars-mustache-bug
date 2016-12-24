# Handlebars Mustache Bug

This is a small repository demonstrating an incompatibility between Handlebars.php & Mustache.php. Handlebars.php, when it encounters an associative array, iterates of all of the keys of the array, whereas Mustache.php only does so if the array is integer-indexed, indicating that the array is more like a list than a hash.

In Mustache.php, the relevant code can be found in Template.php, line 121-126, which it uses to determine if the array is iterable or not.

See this [pull request](https://github.com/XaminProject/handlebars.php/pull/164) for context.

## How to use

Clone this repository, run `composer install`, then start up the PHP webserver on the command line with `php -S localhost:8080`. Open `http://localhost:8080` to see how the difference between how the two engines render the same template.
