# Zhizhula Bogdan portfolio

![image](https://github.com/user-attachments/assets/c83cd75b-5bb5-4a7c-aee0-307dc7106bf6)

## Table of Contents

- [Setup](#setup)
- [Create a new `.env`](#create-a-new-env)
- [Generate key](#generate-key)
- [Start migrate](#start-migrate)
- [Start seed](#start-seed)
- [Make admin account](#make-admin-account)

## Setup
```bash
composer install
```

## Create a new `.env`

On Windows, run:

```bash
copy .env.example .env
```

On Linux, run:

```bash
cp .env.example .env
```

Next, fill in the mysql details in the .env file

### Generate key

```bash
php artisan key:generate
```

### Start migrate

```bash
php artisan migrate
```

### Start seed

```bash
php artisan db:seed
```

### Make admin account
```bash
php artisan orchid:admin
```

Congratulations! 🎉👏 You are now running your own full-stack production-ready initial version of the project!
