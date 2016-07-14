symfony-app
=========

## About ##

A Symfony project with Docker configuration - MariaDB, Nginx, PHP-FPM, Redis.

## Prerequisite ##

Docker Engine version >= 1.10.0
Docker Compose version >= 1.6.0
git
php (installing symfony vendors - see TODO section)

## Running ##

Build and run containers:

```
sudo docker-compose build
sudo docker-compose up
```

Install symfony vendors:

```
cd symfony
php composer.phar install
```

## Redis ##

Session handler requires `Redis >= 2.6.12` for LUA scripts and SET with options.

### SncRedisBundle ###

[SncRedisBundle docs](https://github.com/snc/SncRedisBundle/blob/master/Resources/doc/index.md)

### Usefull commands ###

```redis-cli MONITOR```

```
redis-cli
set key value
get key
```

## TODO ##

* install symofny vendors inside container (and maybe use phing)
* nginx gzip
* database replication

