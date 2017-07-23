# codeigniter-login-logout-register
A user login, logout, register start for Codeigniter 3

## Notice
Codeigniter has not evolved as fast as modern php and php best practices.<br>
It has become a very old framework, and I advise against using it, even for beginners.

Try something like [Laravel](https://laravel.com/) or [Symfony](https://symfony.com/).

With Laravel you get login-logout-register out of the box, and it is a very easy to use and pleasant framework: go for it.

## Installation
1. Open /application/config/database.php and edit with your database settings
2. On your database, open a SQL terminal paste this and execute:

```sql
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `avatar` varchar(255) DEFAULT 'default.jpg',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (id),
  KEY `ci_sessions_timestamp` (`timestamp`)
);
```
Go to http://example.com/register and create a user

## Usage
It is just a starter for user login logout register functionalities.

Extend the user controller or keep it as it is and write your own application with Codeigniter.
