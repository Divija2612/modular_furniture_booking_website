# 🛋️ Decorex — Modular Furniture Booking Website

> **"You Dream, We Deliver"** — Transform your space with premium modular furniture.

The Modular Furniture Booking Website is a simple and elegant web application that allows customers to explore different furniture categories and place booking requests by providing their personal details and delivery address to purchase products from decorex.
---

## 🌐 Live Preview

> Open `landing.htm` in your browser to see the landing page, then navigate to `index.html` to book furniture.

---

## 📁 Project Structure

```
decorex/
├── landing.htm       # Landing/home page with hero section and features
├── index.html        # Furniture booking form (main app page)
├── book.php          # Handles form submission and saves booking data
├── view.php          # View submitted bookings
└── decorex.png       # Hero/background image
```

---

## ✨ Features

- 🏠 **Beautiful Landing Page** — Full-screen hero with blurred background and smooth card hover effects
- 📋 **Booking Form** — Customers can book furniture by entering their name, email, phone, furniture type, preferred date, and delivery address
- 💾 **PHP Backend** — Form data is submitted and stored via `book.php`
- 📄 **View Bookings** — Admin can view all bookings via `view.php`
- 🎨 **Responsive Design** — Works on desktop and mobile browsers
- ✨ **Animations** — Fade-in effects and hover transitions for a polished feel

---

## 🛠️ Tech Stack

| Layer      | Technology         |
|------------|--------------------|
| Frontend   | HTML5, CSS3        |
| Backend    | PHP                |
| Styling    | Custom CSS (no frameworks) |
| Server     | Apache (XAMPP/WAMP/TURBOC3) |

---

## 🚀 Getting Started

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) or any local PHP server 
- A web browser (Firefox, Chrome, etc.)

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/YOUR_USERNAME/decorex.git
   ```

2. **Move the folder to your server's htdocs directory:**
   ```
   C:/TURBOC3/Projects/htdocs/decorex/
   ```

3. **Start your local server** (Apache must be running)

4. **Open in browser:**
   ```
   http://localhost/decorex/landing.htm
   ```

---

## 📸 Pages

### 🏡 Landing Page (`landing.htm`)
- Hero section with background image and call-to-action button
- "Why Choose decorex?" section with animated feature cards
- Footer with company info

### 📝 Booking Form (`index.html`)
- Blurred background effect
- Form fields: Full Name, Email, Phone, Furniture Type, Booking Date, Delivery Address
- Submits to `book.php`

### 🗃️ Available Furniture Categories
- Office Furniture
- Dining Table
- Modular Kitchen
- Wardrobe

---

## 📬 Contact

**decorex Interior Pvt. Ltd.**  
© 2026 All Rights Reserved

---

## 📌 Notes

- Make sure `decorex.png` is present in the project root for the background image to load correctly.
- Update `book.php` with your database credentials if you're connecting to MySQL.
- The `Book Now` button in `landing.htm` links to `http://localhost/decorex/index.html` — update this for production deployment.
