# Camille Locas Orthophoniste - Professional Website

[![Live Demo](https://img.shields.io/badge/Live%20Demo-Visit%20Site-blue)](https://camilleorthophonie.ca/)

Responsive website built for a speech therapy clinic, featuring a contact form with secure email handling.
This project demonstrates responsive design, dynamic UI interactions, and secure backend practices.

## Table of Contents
- [About the Project](#about-the-project)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation--setup)
- [Usage](#usage)
- [Learning Outcomes](#learning-outcomes)

## About the Project

This project is a responsive professional website built for a speech therapy practice. It showcases services offered to children experiencing difficulties in language and mathematical skills, and includes an integrated appointment booking system with email notifications.

This project demonstrates practical application of web development skills including frontend design, backend email processing, and deployment.

## Features

- **Responsive Design**: Flexible layout ensuring optimal viewing across all screen sizes, from desktop to mobile.
- **Service Information**: Detailed descriptions of speech therapy services for different areas
- **Appointment Booking**: Interactive form for scheduling consultations
- **Email Integration**: Automated email notifications using PHPMailer
- **Modern UI/UX**: Clean, professional design with intuitive navigation

## Technologies Used

### Frontend
- **HTML5**: Semantic markup and structure
- **CSS3**: Custom styling with responsive design
- **JavaScript/jQuery**: Interactive elements and form handling
- **Font Awesome**: Icons for visual enhancement
- **Google Fonts**: Typography (Nunito and Open Sans)

### Backend
- **PHP**: Server-side processing and email handling
- **PHPMailer**: Secure email sending via SMTP
- **Dotenv**: Environment variable management for security

### Development Tools
- **Composer**: PHP dependency management
- **Git**: Version control
- **VS Code**: Development environment


## Installation 

### Prerequisites
- PHP 7.4 or higher
- Composer (PHP dependency manager)
- Web server (Apache/Nginx) or local development server
- Gmail account for email sending (or configure alternative SMTP)

### Installation Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/speech-therapy-website.git
   cd speech-therapy-website
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Configure environment variables**
   Create a `.env` file in the root directory:
   ```
   EMAIL_SEND_USERNAME=your-email@gmail.com
   EMAIL_SEND_PASSWORD=your-app-password
   EMAIL_DEST_USERNAME=recipient-email@gmail.com
   ```

4. **Test the installation**
   - Visit `index.html` in your browser


## Usage

1. **Browse Services**: Visit the homepage to learn about available speech therapy services
2. **Book Appointment**: Navigate to "Prendre rendez-vous" to access the booking form
3. **Fill Form**: Complete the appointment request with parent and child information
4. **Submit**: Form submission triggers an automated email to the therapist
5. **Confirmation**: Users receive a confirmation page upon successful submission

## Learning Outcomes

This project served as a comprehensive learning experience covering:

- **Full-Stack Development**: Combining HTML/CSS/JS frontend with PHP backend
- **Email Integration**: Implementing secure email sending with PHPMailer
- **Responsive Design**: Creating mobile-friendly layouts with CSS media queries
- **Project Management**: Planning, structuring, and deploying a complete web application
- **Dependency Management**: Working with Composer for PHP packages



