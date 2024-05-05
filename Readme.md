## Useful scripts:

- to stand up docker compose stack
```
docker compose up -d
```

- to copy a file from container over to the host, e.g from container named hw_php_app_1, file /usr/local/etc/php/php.ini-production
```
sudo docker cp hw_php_app_1:/usr/local/etc/php/php.ini-production .
```

- to rebuild and rerun a container in docker compose stack, e.g. named app
```
sudo docker compose up -d --no-deps --build app
```

