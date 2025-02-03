# Pizza Ordering

## Description
This repository contains an infrastructure setup for a simple pizza ordering application using Docker, Docker Compose, Ansible, Apache, Nginx, and MariaDB.

### Technologies used:
- **Docker** and **Docker Compose** for containerization and managing services.
- **Ansible** for automating the setup process.
- **Nginx** and **Apache** for serving the web content.
- **MariaDB** for the database backend.
- **PHP** for processing dynamic content.

## Project Setup

### Prerequisites:
- Docker
- Docker Compose
- Ansible

### Installed Versions:
- **Docker**: Docker version 27.0.3, build 7d4bcd863a
- **Docker Compose**: Docker Compose version v2.31.0-desktop.2
- **Ansible**: Ansible core 2.18.2, Python 3.13.1

### Installation Steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/Tohtar/pizza-ordering.git
   cd pizza-ordering

2. Run Ansible Playbook to set up the infrastructure:
   ```bash
   ./run_ansible.sh

3. Check the application:

- Visit http://localhost/ to access the pizza ordering interface.
- Visit http://localhost/php/index.php to see the PHP page (make sure PHP is working correctly).
