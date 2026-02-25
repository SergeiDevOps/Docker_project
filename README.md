# Docker_project
Deploying a simple project in Docker: Nginx + PHP + MySQL + phpMyAdmin
1. Nginx - web server
2. PHP - service for executing site scripts
3. MySQL - database
4. phpMyAdmin - base management service
Assembled docker-compose to automatically launch containers.

PHP-FPM + MySQL + phpMyAdmin (LEMP stack) is an industry standard for the rapid development, testing and deployment of modern web applications (Laravel, WordPress, Symfony). Using Docker ensures the identity of the environment on the local machine and the server, eliminating the error "it works for me, but not on the server."

Practical application:
• Local development: Ideal for creating an isolated environment where each project has its own versions of PHP and MySQL that do not conflict with each other.
• Fast Deployment: Using docker-compose.yml, you can raise the entire stack with a single command, which saves time when setting up the environment.
• Database Management: phpMyAdmin in a separate container allows you to conveniently manage MySQL databases via a web interface without installing heavy software on the host machine.
• Microservice architecture: Nginx provides high performance by handling static and proxying requests to PHP-FPM.
• CI/CD: Containers allow you to automatically test and deploy applications, ensuring the same performance on any servers. This stack is a reliable solution for creating websites and applications with high load and convenient support.

# How to ran locally

git clone https://github.com/SergeiDevOps/Docker_project.git
cd docker-pj
docker-compose up –build

Once it is running, you can access: 
-	NGINX in a browser at http://localhost:80
-	phpMyAdmin in a browser at http://localhost:1500
-	phpfpm in a browser at http://localhost
