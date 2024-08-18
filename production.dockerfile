FROM laravelphp/vapor:php82

COPY . /var/task
COPY database/database.sqlite /tmp/database.sqlite