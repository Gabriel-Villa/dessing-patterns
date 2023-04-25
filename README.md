1. Clone repo:

2. Change directory && install dependencies composer.json
cd dessing-patterns &&
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

3. Create .env
cp .env.example .env  

4. Start sail
sail up

5. Generate key
sail php artisan key:generate

6. Install dependencies package.json && run
sail npm i &&
sail npm run dev
