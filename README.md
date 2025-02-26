# 🛍️ Wardrobe API - Laravel Backend

This is the **backend** for the Wardrobe Dashboard, built using **Laravel 10**. It provides a RESTful API to manage clothing items, including CRUD operations.

## 🚀 Features

✅ RESTful API for managing items  
✅ Authentication with Laravel Sanctum  
✅ CRUD operations for items  
✅ API response handling  
✅ Database migrations and seeding  

---

## 🛠️ Setup Instructions

### **1️⃣ Clone the Repository**
```sh
git clone https://github.com/your-username/wardrobe-backend.git
cd wardrobe-backend
```

### **2️⃣ Install Dependencies**
```sh
composer install
```

### **3️⃣ Set Up Environment Variables**
Create a **.env** file:
```sh
cp .env.example .env
```
Then update the database connection:
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wardrobe_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
```

### **4️⃣ Generate Application Key**
```sh
php artisan key:generate
```

### **5️⃣ Run Migrations and Seed Database**
```sh
php artisan migrate --seed
```

### **6️⃣ Start the Development Server**
```sh
php artisan serve
```
This will start the backend API at **http://127.0.0.1:8000/api**. Please note that the Vue.js forntend is using port 8000 by default. 

---

## 🏗️ API Routes

| Method | Endpoint           | Description        |
|--------|-------------------|-------------------|
| GET    | `/api/items`      | Get all items     |
| POST   | `/api/items`      | Create an item    |
| PUT    | `/api/items/{id}` | Update an item    |
| DELETE | `/api/items/{id}` | Delete an item    |

---

## 🛠️ Tech Stack

- **Laravel 10** (PHP Framework)
- **MySQL** (Database)
- **Laravel Sanctum** (Authentication)
- **Eloquent ORM** (Database management)

## 📜 License

This project is licensed under the **MIT License**.
