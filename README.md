# Docker LAMP Developer

Easily set up and develop on a LAMP Stack using Docker.


## Features

* [Apache](https://httpd.apache.org/) 2.4.7
* [PHP](http://php.net/) 5.5.9
* [MySQL](http://www.mysql.com/) 5.5.37
* [phpMyAdmin](http://www.phpmyadmin.net/) 4.0.10
* [OpenSSH](http://www.openssh.com/) 6.6


## Usage

### Build

Create the *robloach/lamp* image:
```
docker build -t robloach/lamp .
```

### Run

Run the image, binding associated ports, and mounting the *www* directory:
```
docker run -d -p 880:80 -p 222:22 33306:3306 -v $(pwd)/www:/var/www/html:rw robloach/lamp
```

#### Apache

Visit `http://localhost:880` in your browser.

#### PHP

Visit `http://localhost:880/phpinfo.php` in your browser.

#### phpMyAdmin

Visit `http://localhost:880/phpmyadmin` in your browser.
