Zipcode API
=======

## Quick start

1 - Clone the repo:

```bash
git clone git@github.com:RogerioNocchelli/zipcode-api.git
```

2 - Change to the directory created

```bash
cd zipcode-api/
```

3 - Create environment configuration file

```bash
vim .env
```

4 - Composer Install

```bash
php composer.phar install
```

5 - Start docker:

```bash
docker-compose up --build -d
```

5 - Execute migration:

```bash
docker-compose run php php artisan migrate
```