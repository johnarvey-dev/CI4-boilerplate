# CodeIgniter 4 Multi-Role Modular Boilerplate

A flexible, production-ready starter architecture for CodeIgniter 4 applications built. This template features a highly dynamic view layout inheritance system with pre-configured directory slots for Public, Authenticated User, and Administrative pages.

## Project Architecture

The `app/Views/` directory is modularly split into role-specific folders to keep development clean:

*   **`layout/`**: Contains the master skeleton templates (`admin.php`, `user.php`, `guest.php`) along with a `partials/` sub-folder for reusable building blocks (`_header.php`, `_navbar.php`, `_sidebar.php`).
*   **`public/`**: Dedicated directory for landing pages, login screens, and registration views accessible to everyone.
*   **`user/`**: Secure directory for dashboard interfaces and features built specifically for logged-in standard clients or users.
*   **`admin/`**: Protected directory for control panels, system logs, and administrative utilities restricted to internal managers.

## Key Features

*   **Modular Layouts:** Fully utilizes CodeIgniter 4 template layouts (`$this->extend()` and `$this->section()`), allowing you to dynamically add or pull out content sections seamlessly.
*   **Asset Ready:** Structured directory layout paths optimized for linking local assets (Bootstrap, CSS, JS) or external CDNs.
*   **Security Minded:** Out-of-the-box configuration structures to safely implement authentication filters across specific role folders.
