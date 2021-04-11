FROM fireflyiii/base:apache-8.0

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
COPY entrypoint-fpm.sh /usr/local/bin/entrypoint-fpm.sh
COPY . .

RUN composer install --prefer-dist --no-dev --no-scripts && /usr/local/bin/finalize-image.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
