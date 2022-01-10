# Docker-LAMP

This repository goal is to create a docker container and compose: Centos, Apache, PHP and PDO DBLIB, MySQL 

<br>

## Docker Compose
First, we create a file named docker-compose.yml.
On that file we will define two services "web" and "db"
The "web" service will use the Dockerfile for our Apache/PHP container.

### docker-compose.yml
- The "db" service will use the Dockerfile for our MySQL container.
- For the root user we are using the password "root". You may want to use a more secure password.
- We also use the port 3306 to access the MySQL server from the host machine. If you already have another instance of MySQL running, you may need to use a different port. (i.e. "4001:3306")

<br>

## Dockerfile for Web Server
- [DockerWebServer](https://github.com/rhalp10/docker-lamp/blob/main/DockerWebServer) | [Instruction](https://davescripts.com/docker-container-with-centos-7-apache-php-73)

<br>

## Dockerfile for Database Server
- [DockerDBServer](https://github.com/rhalp10/docker-lamp/blob/main/DockerDBServer) | [Instruction](https://davescripts.com/docker-container-with-mysql-8)

<br>

## Build and Start the Containers

Open a terminal window, navigate to the folder with the docker-compose.yml file, and type the following command.

```sh
docker-compose up -d
```

After the containers have finished building, we can check the logs with the following command:

```sh
docker-compose logs
```

## Stop the Containers

```sh
docker-compose stop
```

## Remove the Containers

```sh
docker-compose down
```

<br>

---------------------

<br>

## Build

Create Docker Image.

```sh
docker build -t <image_name> .
```

<br>

## Run

Create Docker Container.

```sh
docker run -tid -p 4000:80 --name=<container_name> -v /path_to/folder:/var/www/html <image_name>
```

_Replace **&lt;container_name&gt;** with the name you want for the container, and **&lt;image_name&gt;** with the name of the image you specified on the Build command above._

<br>

Example.

```sh
docker run -tid -p 4000:80 --name=container_apache -v /path_to/folder:/var/www/html image_apache
```

_Also change **"/path_to/folder"** with the actual location of your website's root folder on your local machine._

<br>

## Test Class
      
Open the http://localhost:4000/ url on your browser.
<br>
## Test Connection
      
Open the http://localhost:4000/test.php url on your browser.
