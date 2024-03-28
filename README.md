# Eastvantage Assignment

This repository contains the source code for the Eastvantage Assignment project.

## Setup Instructions

Follow these steps to set up the project locally:

1. **Clone the Repository**: 
    ```bash
    git clone https://github.com/ArunS-Kumar/Eastvantage-Assignment.git
   ``` 

2. **Navigate to the Project Directory**: 
    ```bash
    cd Eastvantage-Assignment
    ``` 

3. **Copy Environment Configuration**: 

    ```bash
    cp .env.example .env
    ``` 

5. **Update Database Configuration**: 

    Update the database configuration in the `.env` file with your database credentials.

6. **Seed Database**: 
    ```bash
    php artisan db:seed --class=RoleSeeder
    ``` 

7. **Run the Development Server**: 
    ```bash
    php artisan serve
    ``` 