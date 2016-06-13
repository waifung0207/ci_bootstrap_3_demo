## CodeIgniter 3 Bootstrap Demo

This is a demo repository based on [CI Bootstrap 3](https://github.com/waifung0207/ci_bootstrap_3) (build: 2016-06-12)


### Setup Guide

1. git clone this repo
2. Create a database (e.g. named "ci_bootstrap_3"), then import /sql/latest.sql into MySQL server
3. Make sure the database config (/application/config/database.php) is set correctly
4. You should be able to access Frontend Website, Admin Panel and API Site (with Swagger Doc) respectively


### Demo database

4 additional database tables are added on top of core ones:

* For blog demo: **blog_categories**, **blog_posts**, **blog_posts_tags**, **blog_tags**
* For Image CRUD demo: **cover_photos**