## CodeIgniter 3 Bootstrap Demo

This is a demo repository based on [CI Bootstrap 3](https://github.com/waifung0207/ci_bootstrap_3) (version: build 2016-07-02).


### Setup Guide

1. git clone this repo
2. Create a database and import **/sql/latest.sql** into the MySQL server
3. Make sure the database config (/application/config/database.php) is set correctly
4. You should be able to access Frontend Website, Admin Panel and API Site (with Swagger Doc) respectively
5. For most API endpoints from Swagger Doc page, you will require a default API Key "anonymous" to call them; this value can be changed from **api_keys** database table


### Demo database

By default, the following MySQL database setting is used:

* Username: ci_bootstrap_3
* Password: ci_bootstrap_3
* Database: ci_bootstrap_3_demo

After import latest.sql, 4 additional database tables will be added on top of core ones: 

* For blog demo: **blog_categories**, **blog_posts**, **blog_posts_tags**, **blog_tags**
* For Image CRUD demo: **cover_photos**