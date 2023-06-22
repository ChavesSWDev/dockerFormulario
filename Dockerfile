# Define a imagem base
FROM php:7.4-apache

# Copia os arquivos do código-fonte para o contêiner
COPY . /var/www/html

# Instala as extensões necessárias do PHP
RUN docker-php-ext-install mysqli

# Define o comando a ser executado quando o contêiner for iniciado
CMD ["apache2-foreground"]