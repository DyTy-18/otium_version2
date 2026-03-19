# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**Otium** is a multi-page corporate website for a B2B financial services company in Bolivia. Built with Laravel 12 (server-rendered Blade templates) + Tailwind CSS v4 + Alpine.js. No API endpoints — all routes return Blade views.

## Commands

### Development
```bash
composer run dev        # Starts dev server, queue worker, log watcher, and Vite concurrently
npm run dev             # Vite watch mode only
```

### Build
```bash
npm run build           # Production Vite build (outputs to public/build/)
```

### Testing
```bash
composer run test       # Run all PHPUnit tests
php artisan test --filter=ExampleTest  # Run a single test
```

### Setup (fresh clone)
```bash
composer run setup      # Full project setup
```

### Code style
```bash
./vendor/bin/pint       # Laravel Pint PHP linter/formatter
```

## Architecture

### Routing → Views
All 8 routes in `routes/web.php` map directly to Blade views. Route names: `home`, `services.index`, `services.outsourcing`, `services.financial`, `services.audit`, `services.digital`, `services.legal`, `about`, `contact`.

### Blade Layout System
- `resources/views/components/layout.blade.php` — master HTML shell
- `resources/views/components/header.blade.php` — nav with Alpine.js dropdown
- `resources/views/components/footer.blade.php` — footer
- Page views in `resources/views/` extend the layout component

### Frontend Stack
- **Tailwind CSS v4** — configured via `resources/css/app.css` (not `tailwind.config.js`)
- **Brand colors** defined as CSS variables in `app.css`: `--color-primary: #B3271A`, `--color-secondary: #C48273`, `--color-accent: #55B9C7`
- **Alpine.js** — handles interactive UI (nav dropdowns, etc.)
- **AOS** (Animate On Scroll) — scroll-triggered animations, initialized in `resources/js/app.js`

### Assets
- Static images live in `public/images/` (served directly, not through Vite)
- JS/CSS entry points: `resources/js/app.js` and `resources/css/app.css` (bundled by Vite)

### Database
SQLite in development (`database/database.sqlite`). Only default Laravel tables exist (users, cache, jobs) — no custom domain models. Tests use SQLite in-memory.
