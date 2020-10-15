FROM php:7.2

WORKDIR /home/app

COPY . . 

RUN docker-php-ext-install mysqli

CMD ["php", "-S", "0.0.0.0:8080"]


