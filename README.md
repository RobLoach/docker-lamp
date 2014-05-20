# Docker LAMP Developer

A Docker solution to easily set up and develop on a LAMP stack.


## Features

* [Apache](https://httpd.apache.org/) 2.4.7
* [PHP](http://php.net/) 5.5.9
* [MySQL](http://www.mysql.com/) 5.5.37
* [phpMyAdmin](http://www.phpmyadmin.net/) 4.0.10
* [OpenSSH](http://www.openssh.com/) 6.6


## Usage

### Build

Create the image `robloach/lamp`:
```
docker build -t robloach/lamp .
```

### Run

Run the image, binding Apache's port 80 to your container:
```
docker run -d -p 880:80 -p 222:22 33306:3306 -v $(pwd)/www:/var/www/html:rw robloach/lamp
```

#### Apache

Visit `http://localhost:880` in your browser.

#### PHP

Visit `http://localhost:880/phpinfo.php` in your browser.

#### phpMyAdmin

Visit `http://localhost:880/phpmyadmin` in your browser.
