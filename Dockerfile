FROM php:7-buster
RUN mkdir -p /usr/Calculadora
COPY . /usr/Calculadora
WORKDIR /usr/Calculadora
EXPOSE 50000
CMD ["php", "index.php"]

