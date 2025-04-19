# Zhizhula Bogdan portfolio

[![project img](https://raw.githubusercontent.com/Bader-Idris/nuxt3-fullstack-portfolio/26e3f86aaa361639f25b0ce933df59ea982e5e41/client/public/thumbnail.webp)](https://baderidris.com)

Welcome to the Nuxt Minimal Starter! This repository provides a foundational setup for a full-stack application using Nuxt 3, along with various useful Docker containers. For more detailed information, refer to the [Nuxt documentation](https://nuxt.com/docs/getting-started/introduction).

## Table of Contents

- [Setup](#setup)
- [Development Server](#development-server)
- [Production](#production)
- [Mobile Application Setup](#mobile-application-setup)
- [Required Environment Variables](#required-environment-variables)
- [Production Setup](#production-setup)
- [Security](#security)

## Setup
```bash
composer install
```

## Development Server

To start the development server, navigate to `http://localhost:3000`:

```bash
bun run dev
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


> [!WARNING]  
> If you're trying to build the app on a weak server with limited resources, please follow the instructions in the [weak_servers.md](./weak_servers.md) file to ensure a successful build process.

To locally preview the production build:

```bash
bun run preview
```

### Generate key

```bash
php artisan key:generate
```

### Start migrate

```bash
php artisan migrate
```

Congratulations! 🎉👏 You are now running your own full-stack production-ready initial version of the project!

### Admin cred
`Login`: admin@admin.com<br>
`Password`: admin
