
![Fanie's Crochet Logo](https://github.com/Fanfaneee/crochet/blob/main/public/images/logo_read_me.png)






# Laravel Blog Fanie's Crochet


This website is about crochet. It contains a blog with patterns post, with which users can react by commenting and liking comments. Also a galery page with pictures and pinterest link to them. An about me page, and a contact page with a form where you can send messages.
Users can login and register.




## Authors

- [Bugenne Fanie](https://www.github.com/Fanfaneee)



## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage 
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting 
Create a database 
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```
## Using MailHog for Contact Form

To test the contact form functionality, we recommend using MailHog. MailHog is an email testing tool that captures emails sent from your application and allows you to view them in a web interface.

### Installation

1. **Download MailHog**

   You can download MailHog from the [MailHog releases page](https://github.com/mailhog/MailHog/releases). Choose the appropriate version for your operating system.

2. **Extract the downloaded file**

   Extract the downloaded file to a directory of your choice.

### Running MailHog

1. **Start MailHog**

   Open a terminal and navigate to the directory where you extracted MailHog. Run the following command to start MailHog:

     ```
    mailhog
    ```
MailHog will start and listen on port 1025 for SMTP connections and port 8025 for the web interface.

2. **Configuring Your Application**

Update your ```.env```

```
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

3. **Open Mailhog interface**

Open your web browser and navigate to http://localhost:8025. You will see the MailHog web interface where you can view the emails sent from your application.



By following these steps, you can use MailHog to test the contact form functionality in your application without sending real emails. MailHog captures the emails and displays them in a web interface, making it easy to verify that your contact form is working correctly.



## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| dark-blue | ![#2D2244](https://via.placeholder.com/10/2D2244?text=+) #2D2244 |
| purple 1 | ![#F0EBFD](https://via.placeholder.com/10/f8f8f8?text=+) #F0EBFD |
| purple 2 | ![#A88EEE](https://via.placeholder.com/10/A88EEE?text=+) #A88EEE |
| purple 3 | ![#9271EA](https://via.placeholder.com/10/9271EA?text=+) #9271EA |


## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)

