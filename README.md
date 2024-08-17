# Product Inventory Management System

This is a basic product inventory management system built using Laravel and MySQL. The system allows users to perform CRUD (Create, Read, Update, Delete) operations on products.

## Features

### 1. Create Product
- **Form Fields:**
  - Product Name
  - Description
  - Price
  - Quantity
  - Category
  - SKU (Stock Keeping Unit)
  - Image Upload (optional)
- **Validation:** 
  - All fields are validated to ensure data integrity.

### 2. Read/Display Products
- **Product Listing:**
  - Displays a table of products with details including Product Name, Price, Quantity, Category, and Actions (Edit/Delete).
  - Pagination is implemented for product listings.

### 3. Update Product
- **Edit Functionality:**
  - Users can edit product information with pre-filled forms for easy updates.
  - All input fields are validated before saving changes.

### 4. Delete Product
- **Delete Functionality:**
  - Users can delete a product from the inventory.
  - A confirmation dialog is shown to prevent accidental deletion.

### Bonus Features
- **Search & Filter:**
  - Users can search or filter products by name, category, or SKU.
- **Image Upload:**
  - Supports image upload and displays product images in the listing.
- **Stock Management:**
  - Stock levels are managed, and warnings are displayed if the stock is low.
- **Admin Dashboard:**
  - Displays key statistics like total number of products, total stock value, and out-of-stock products.

## Tech Stack
- **Backend:** Laravel (PHP)
- **Database:** MySQL
- **Frontend:** Blade templates, Bootstrap

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/DasunDK/laravel-inventry-system.git
    ```

2. Navigate to the project directory:
    ```bash
    cd product-inventory-system
    ```

3. Install dependencies:
    ```bash
    composer install
    npm install
    ```

4. Create a `.env` file and configure your database:
    ```bash
    cp .env.example .env
    ```

5. Generate an application key:
    ```bash
    php artisan key:generate
    ```

6. Run database migrations:
    ```bash
    php artisan migrate
    ```

7. Seed the database with initial data (optional):
    ```bash
    php artisan db:seed
    ```

8. Start the development server:
    ```bash
    php artisan serve
    ```

9. Access the application in your browser:
    ```
    http://localhost:8000
    ```

## Deployment
You can deploy this application to a free hosting service like Heroku or Vercel.

## License
This project is licensed under the MIT License.

## Notes
- Ensure you have PHP, Composer, Node.js, and MySQL installed on your machine.
- Customize the configuration in the `.env` file as needed.

## Author
Developed by [Dasun Kumara](https://github.com/DasunDK).

