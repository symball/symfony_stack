FROM nginx
MAINTAINER Simon Ball <simon.ball.1985@gmail.com>

RUN mkdir -p /var/www/html

RUN setfacl -R -m u:`whoami`:rwX -m u:`whoami`:rwX /var/www/html
RUN setfacl -dR -m u:`whoami`:rwX -m u:`whoami`:rwX /var/www/html
