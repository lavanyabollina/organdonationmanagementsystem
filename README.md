# 🏥 Organ Donation Management System

The **Organ Donation Management System** is a web-based application designed to facilitate seamless interaction between patients in need of organ transplants and potential donors. This system also includes admin functionality for managing registrations and maintaining a database of organ donors and recipients.

---

## 📸 Preview

![Home Page Preview](home%20page.png)

🎥 [Watch Project Demo](organ.mp4)

---

## 📂 Project Structure
```
├── admin.php # Admin panel to view registered donors and patients
├── article.php # Stores article-related form data
├── connection.php # Database connection file
├── donar_registration.php # Backend logic for donor registration
├── login.php # Admin login logic
├── organ_donation_management.html # Main frontend page
├── patient_registration.php # Backend logic for patient registration
├── home page.png # Screenshot of the home page
├── organ.mp4 # Project demo video
```
---

---

## 💡 Features

- **Admin Login**: Secured access to view donor and patient data
- **Donor Registration**: Collects organ donor details with fields like name, age, contact, organ(s) willing to donate, etc.
- **Patient Registration**: Records details of patients who require organ donations
- **Article Information Entry**: Additional module for submitting and storing articles
- **Dynamic Table View**: Admin can view registered patients and donors in a tabular format
- **Responsive UI**: Built using HTML, CSS, JavaScript

---

## 🛠️ Tech Stack

| Technology | Description                          |
|------------|--------------------------------------|
| HTML       | Frontend structure                   |
| CSS        | Styling and layout                   |
| JavaScript | Interactive navigation               |
| PHP        | Backend logic and form processing    |
| MySQL      | Database for storing registrations   |

---

## 🗃️ Database Tables

- **login**
  - `username`, `password`

- **donars_registered**
  - `name`, `age`, `gender`, `address`, `contact_number`, `blood_group`, `organ_donatable`

- **patients_registered**
  - `name`, `age`, `gender`, `address`, `contact_number`, `blood_group`, `organ_needed`

- **articletable**
  - Contains fields for article submission like `title`, `author`, `subjectheading`, etc.

---

## 🚀 How to Run

1. **Clone the Repository**

   ```bash
   git clone https://github.com/lavanyabollina/organdonationmanagementsystem.git

   ```
   2 **Start Apache and MySQL using XAMPP or WAMP**

   3 **Import Database**

   4.**Open phpMyAdmin**

   5.**Create a new database named organ_donation_management**

   6.**Create required tables (donars_registered, patients_registered, login) manually or via SQL script (not provided)**

   7.**Place Project Folder in htdocs directory**

   8.**Access in Browser**
   ```bash
   http://localhost/organ-donation-management/organ_donation_management.html
   ```
   ## 📌 Admin Login Credentials (Default)
   
   example
   Username: admin

   Password: admin123

   🔐 Make sure to secure login credentials in production use
## 👩‍💼 Author

📧 Email: lavanyabollina12@gmail.com

💼 LinkedIn: [linkedin.com/in/lavanya-bollina-b670592b2](https://www.linkedin.com/in/lavanya-bollina-b670592b2/)

🧑‍💻 GitHub:[ github.com/LavanyaBollina](https://github.com/lavanyabollina/)


