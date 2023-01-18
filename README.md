## Installation

### Docker
1. Clone project
    ```
    git clone https://github.com/Burashev/php-framework.git
    ```
2. Copy .env.example to .env
    ```
    cp .env.example .env
    ```
3. Run docker
    ```
    docker-compose up -d
    ```
4. Install dependencies
    ```
    docker-compose exec app composer install
    ```
5. Run migrations
    ```
    docker-compose exec app php migrations.php
    ```

### Without Docker
1. Clone project
    ```
    git clone https://github.com/Burashev/php-framework.git
    ```
2. Copy .env.example to .env and change database parameters
    ```
    cp .env.example .env
    ```
   
3. Install dependencies
    ```
    composer install
    ```
   
4. Run migrations
    ```
    php migrations.php
    ```
      
5. Go to public folder and run server
    ```
    cd public
    php -S localhost:8080
    ```
   
