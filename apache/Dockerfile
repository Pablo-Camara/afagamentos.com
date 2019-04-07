FROM httpd:2.4.38-alpine
RUN apk update; \
    apk upgrade;
#Copy apache vhost file to proxy php requests to php-fpm container
COPY settings.apache.conf /usr/local/apache2/conf/settings.apache.conf
RUN echo "Include /usr/local/apache2/conf/settings.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
