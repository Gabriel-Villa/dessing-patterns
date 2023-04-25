1. Clone repo:
```
git clone git@github.com:Gabriel-Villa/dessing-patterns.git
```

2. Change directory
```
cd dessing-patterns
```
3. Install dependencies composer.json

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

4. Create .env
```
cp .env.example .env  
```

5. Start sail
```
sail up -d
```

6. Generate key
```
sail php artisan key:generate
```

7. Install dependencies package.json && run
```
sail npm i &&
sail npm run dev
```
