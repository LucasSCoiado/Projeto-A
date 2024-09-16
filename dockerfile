FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./aluguelCarros/resources/views/welcome.blade.php" ]
