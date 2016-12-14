FROM nginx
MAINTAINER Simon Ball <simon.ball.1985@gmail.com>

ENV BASE /var/www/html

RUN usermod -u 1000 www-data
RUN groupmod -g 1000 www-data
RUN usermod -aG adm www-data

RUN mkdir -p $BASE
RUN chown -R www-data:www-data $BASE
RUN chmod -R 775 $BASE

RUN mkdir -p /var/cache/nginx
RUN chmod -R 777 /var/cache/nginx
RUN chown -R www-data:www-data /var/cache/nginx
RUN touch /var/run/nginx.pid
RUN chmod 777 /var/run/nginx.pid

USER www-data

RUN setfacl -R -m u:`whoami`:rwX -m u:`whoami`:rwX $BASE
RUN setfacl -dR -m u:`whoami`:rwX -m u:`whoami`:rwX $BASE
WORKDIR $BASE
