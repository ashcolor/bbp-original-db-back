# bbp-original-db-back

By using Docker-Compose, you can build CakePHP3 environment easily.

# Environment

- Docker 18.06.1-ce
- Docker Compose 1.22.0
- Docker Machine 0.15.0

## Initialization (Build CakePHP4 Project)

Since CakePHP4 has an execution environment for each project, so create a project. To create another project, follow the same procedure.

### Rewrite project name

```docker-compose.yml
PRJ: "bbp-original-db-back"
```

### Create Docker Images

It will take about two or three minutes.

```
$ docker-compose build
```

### Run Containers

```
$ docker-compose up -d
```

### Enter PHP-FPM Container

```
$ docker exec -it docker-bbp-original-db-back_phpfpm_1 /bin/sh
```

### Get Composer Installer

```
/var/www/html # curl -s https://getcomposer.org/installer | php
```

### Make Project

Here, create a `bbp-original-db-back` project

```
/var/www/html # php composer.phar create-project --prefer-dist cakephp/app bbp-original-db-back
```

### Exit Container

```
/var/www/html # exit
```

### Fix Configuration

Update `data/htdocs/bbp-original-db-back/config/app.php` at line 251

```data/htdocs/bbp-original-db-back/config/app.php
-   'host' => 'localhost',
+   'host' => 'mysql',
```

## Build Up

```
$ docker-compose up -d
```

You can check at http://localhost:8765

## Remove Containers

```
$ docker-compose down
```
