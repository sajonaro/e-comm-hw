# simple php site basd on YII2 

learning goals:
- get to know YII
- vertical slices architecture






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

- to use composer e.g. to create new yii based project (named e-comm-hw)
```
docker compose run --rm composer create-project yiisoft/app --prefer-dist --stability=dev e-comm-hw
```
