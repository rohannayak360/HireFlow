# HireFlow 🚀

HireFlow is India's premier all-in-one job platform built to connect top talent with the best opportunities. Designed with modern web aesthetics and an intuitive user experience, HireFlow bridges the gap between ambitious job seekers and forward-thinking employers.

## 🌟 Features

- **Modern & Responsive UI**: Clean, dynamic, and fully responsive design built for both mobile and desktop users.
- **Dark & Light Mode**: Seamlessly toggle between dark and light modes for an optimal viewing experience in any environment.
- **Advanced Job Search**: Powerful filtering and search capabilities to help candidates find the exact role they are looking for.
- **Employer Dashboard**: Tools for companies to manage job postings, track applications, and discover top-tier talent.
- **AI Resume Toolkit**: Integrated tools to help candidates optimize their profiles and build ATS-friendly resumes.
- **Urgent & Featured Jobs**: Highlighting immediate openings and premier employers to speed up the hiring process.

## 🛠️ Tech Stack

- **Framework**: Laravel
- **Frontend**: Blade Templating, HTML5, CSS3, JavaScript
- **Styling**: Custom CSS with dynamic utility classes and dark mode support
- **Database**: SQLite (Configured for local development)

## 🚀 Getting Started

Follow these steps to set up HireFlow on your local development environment:

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- Laravel Valet, Laragon, or XAMPP (for local server)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/rohannayak360/HireFlow.git
   cd HireFlow
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install frontend dependencies:**
   ```bash
   npm install
   npm run build
   ```

4. **Environment Setup:**
   - Copy the `.env.example` file to `.env`
   - Update the `.env` variables (e.g., database connection)
   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Database Migrations:**
   ```bash
   php artisan migrate --seed
   ```

7. **Start the Development Server:**
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` in your browser to view the application.

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/rohannayak360/HireFlow/issues) if you want to contribute.

## 📄 License

This project is licensed under the MIT License.
