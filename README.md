# ![logo](./public/logo.png)

## Setup

Clone this repo:

```sh
git clone <this-repo>
```

Setup laravel:

```sh
cd <this-repo>
# Install Dependency
composer install
npm install && npm run build
# Create .env
cp .env.example .env
# Generate App Key
php artisan key:generate
# Migrate Database (Optional)
php artisan migrate
```

Run:

```sh
composer run dev
```

## Todo

UI: 
- [x] Homepage
- [x] Login
- [x] Register
- [x] UI Recolor Assistant
- [x] WarnaBot
- [x] Visual Simulator
- [ ] Tes Diagnosis
- [x] Direktori Dokter & Rujukan
- [ ] Pusat Edukasi
- [ ] Responsive Design

Feature:
- [ ] Login/Register
- [ ] Extension (Ongoing)
- [ ] AI Chatbot
- [x] Visual Simulator (Static Page)
- [ ] Tes Diagnosis
