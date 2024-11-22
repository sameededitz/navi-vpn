# NaviVPN: VPN Admin Panel

**NaviVPN** is a powerful VPN admin panel designed to manage servers, subservers, purchase records, plans, and users efficiently. It offers a robust set of features for administrators to control VPN operations and user access while ensuring seamless subscription and server management.

---

## Features

### 🌐 **Server & Subserver Management**
- **Server Management**: Add, edit, and manage servers with detailed configurations.
- **Subserver Support**: Link subservers to parent servers for optimized traffic distribution.
- **Status Monitoring**: Monitor server and subserver status (online/offline).

### 💳 **Purchase Management**
- **Subscription Tracking**: View user purchase history and active subscriptions.
- **Billing Management**: Generate invoices for purchases and integrate payment gateways.
- **Refund Support**: Admins can manage refunds and cancellations for user purchases.

### 📋 **Plan Management**
- **Custom Plans**: Create and manage VPN plans with flexible durations (daily, monthly, yearly).
- **Pricing Configuration**: Set custom pricing for each plan.
- **Trial and Premium Plans**: Offer trial plans and manage upgrades to premium plans.

### 🧑‍🤝‍🧑 **User Management**
- **Admin Panel**: Manage user roles, accounts, and activity logs.
- **Subscription Details**: View user subscriptions, expiration dates, and payment history.
- **Authentication**: Secure user access with email verification and password resets.

---

## Modules and Functionality

### **Server & Subserver Management**
- **Add Servers**: Admins can add VPN servers with IP addresses, ports, and other details.
- **Link Subservers**: Subservers can be associated with a parent server for optimized load balancing.
- **Server Monitoring**: Real-time server and subserver health checks.

### **Plans**
- **Plan Creation**: Create plans with customizable pricing, duration, and data limits.
- **Trial Management**: Offer free trial plans with limited features.
- **Dynamic Updates**: Modify or deactivate plans as needed.

### **Purchase Management**
- **Purchase Logs**: Detailed logs of all purchases, including user and plan details.
- **Invoice Generation**: Automatically generate invoices for completed purchases.
- **Refund Policy**: Manage refunds and cancellations directly from the admin panel.

### **User Management**
- **User Roles**: Assign roles such as admin, user, and moderator with specific permissions.
- **Subscription Management**: Admins can activate, deactivate, or extend user subscriptions.
- **Activity Logs**: View user activity for auditing and troubleshooting.

---

## Installation

### Prerequisites
- PHP 8.2+
- Laravel 11
- MySQL
- Composer
- Node.js

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/your-username/navivpn.git
    ```
2. **Navigate to the project directory**:
    ```bash
    cd navivpn
    ```
3. **Install dependencies**:
    ```bash
    composer install
    npm install && npm run dev
    ```
4. **Set up environment variables**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5. **Run migrations and seeders**:
    ```bash
    php artisan migrate --seed
    ```
6. **Start the server**:
    ```bash
    php artisan serve
    ```

---

## Usage

### Admin Features
- **Dashboard**: Overview of server status, purchases, and active plans.
- **Server Management**: Add or edit servers and subservers with live status monitoring.
- **Plan Management**: Manage subscription plans, pricing, and availability.
- **User Administration**: View and manage user accounts, roles, and subscriptions.
- **Purchase Logs**: Detailed insights into purchase history and billing.

### User Features
- **Plan Subscription**: Users can purchase plans and view active subscriptions.
- **Server Access**: Users receive server credentials upon purchase.
- **Profile Management**: Users can update personal information and payment details.

---

## Technologies Used
- **Backend**: Laravel 11
- **Frontend**: Livewire 3, TailwindCSS
- **Payment Gateway**: Stripe
- **Database**: MySQL
- **File Handling**: Spatie Media Library

---

## Developer Information
- **Developer**: Sameed
- **Instagram**: [@not_sameed52](https://www.instagram.com/not_sameed52/)
- **Discord**: sameededitz
- **Linktree**: [linktr.ee/sameededitz](https://linktr.ee/sameededitz)
- **Company**: TecClubb
  - **Website**: [https://tecclubb.com/](https://tecclubb.com/)
  - **Contact**: tecclubb@gmail.com

---

## Contributing
We welcome contributions! Fork the repository, create a new branch, and submit a pull request. For larger changes, please open an issue first to discuss.

---

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Contact
For inquiries or support, reach out via:
- **Email**: tecclubb@gmail.com
- **Website**: [https://tecclubb.com/](https://tecclubb.com/)
