# Dental Clinic Template
<p>Template for a dental clinic created with <a href="https://tallstack.dev/" target="_blank">TALL</a> stack, with appointment booking feature and admin panel to manage appointments.

## Installation
Clone the repository, navigate to project directory and install dependencies
```bash
composer install
```
  
Create a file for environment variables by coping `.env.example`
```bash
cp .env.example .env
```

Create application key
```bash
php artisan key:generate
```

Setup database credentials in `.env` file and run migrations
```bash
php artisan migrate
```

To seed the database with some test data run
```bash
php artisan db:seed
```
## Usage
When you seed your database, there will be account created for testing
  
```
Email: testuser@example.com
Password: password
```
To be able to send email from contact form you should have configured SMTP server and you should have configured email address in .env
```
CONTACT_FORM_TO="testuser@example.com"
```
## Testing
```bash
php artisan test
```
## Screenshots
<img src="https://user-images.githubusercontent.com/23532087/159754634-a361b55a-a322-4132-9866-8febd516ae85.png">
<img src="https://user-images.githubusercontent.com/23532087/159754801-6935fe9b-e5e8-441b-b912-971a760c0000.png">
<img src="https://user-images.githubusercontent.com/23532087/159754724-f2929e6f-9393-4a86-82d8-2d494cdd2ffe.png">
<img src="https://user-images.githubusercontent.com/23532087/159754898-cfe1d178-394c-4080-b3ea-9627ee7c9271.png">
<img src="https://user-images.githubusercontent.com/23532087/159755601-0bdf158b-cad2-4fa9-8a4d-ff58388e4aaa.png">
<img src="https://user-images.githubusercontent.com/23532087/159755004-ca9c408e-e69e-4c2a-923e-399795f4af01.png">
<img src="https://user-images.githubusercontent.com/23532087/159755064-26332c1d-9a94-4c79-b157-765d87a2a428.png">