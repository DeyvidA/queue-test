# Simple Laravel API with Job Queue, Database, and Event Handling

## Description

This project is a Laravel application that provides an API endpoint for submitting data, which is then saved to a PostgreSQL database. It includes event handling to log successful submissions.

## Installation

To run the project, follow these steps:

1. Clone the repository:

    ```bash
    git@github.com:DeyvidA/queue-test.git
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Start the Docker containers:

    ```bash
    sail up -d
    ```

4. Use Postman to send a POST request to the `localhost/api/submit` endpoint with the following JSON payload:

    ```json
    {
        "name": "John Doe",
        "email": "john.doe@example.com",
        "message": "This is a test message."
    }
    ```

    The application will validate the data, save it to the database using a job, trigger an event, and log the submission information.

5. To view the logs, check the Laravel log file located at `/storage/logs/laravel.log`.

## Usage

After following the installation steps, you can interact with the application using Postman or any other HTTP client. Send a POST request to the `/api/submit` endpoint with the required JSON payload to submit data.

## Testing

To run the PHPUnit tests, use the following command:

```bash
sail artisan test
```
