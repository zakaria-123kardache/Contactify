# Contact Management System  

![Contact Management](https://maghreb.simplonline.co/_next/image?url=https%3A%2F%2Fsimplonline-v3-prod.s3.eu-west-3.amazonaws.com%2Fmedia%2Fimage%2Fjpg%2Fpasos-gestion-contactos-6769c6ce381a4566358176.jpg&w=1280&q=75)  

---

## 📋 Project Overview  
A web application built with **PHP8 (Object-Oriented Programming)** to manage a list of contacts. Each contact has a unique ID, first name, last name, email, and phone number.  

---

## 🚀 Key Features  
- **Add a Contact**: Users can add new contacts via a form with validation (email format, phone number length, etc.).  
- **Display Contacts**: Contacts are displayed in a table with columns for ID, first name, last name, email, and phone number.   
- **Edit Contacts**: Modify existing contact details via a form.  
- **Delete Contacts**: Remove contacts from the list.  

---

## 🛠️ Architecture  

### 📂 Directory Structure  
```  
/Contactify  
│  
├── /app  
│   ├── /model          # Entity classes  
│   │   └── Contact.php  # Contact entity  
│   ├── /controller     # Business logic  
│   │   └── ContactController.php  
│   ├── /dao             # Database operations (CRUD)  
│   │   └── ContactDAO.php  
│   └── /core            # Configuration  
│       └── Connexion.php # Database connection  
│  
├── /public             
│   ├── index.php         
│   └── /dashboard       # UI templates  
│       └── contactsdashboard.php  
│  
├── /vendor              # Dependencies (autoload)  
├── composer.json        # Dependency management  
└── README.md  
```  

---

## 🔧 Installation  
1. **Prerequisites**:  
   - PHP 8+  
   - MySQL Database  
   - Composer  

2. **Clone the Repository**:  
   ```bash  
   git clone https://github.com/zakaria-123kardache/Contactify.git  
   cd Contactify  
   ```  

3. **Install Dependencies**:  
   ```bash  
   composer install  
   ```  

4. **Configure Database**:  
   - Update `app/core/Connexion.php` with your MySQL credentials.  
   - Import the SQL schema:  
     ```sql  
     CREATE TABLE contacts (  
         id INT AUTO_INCREMENT PRIMARY KEY,  
         photo VARCHAR(500),  
         firstname VARCHAR(255),  
         lastname VARCHAR(255),  
         email VARCHAR(255)  ,
         numero VARCHAR(255) 
     );  
     ```  

5. **Run the Application**:  
   ```bash  
   php -S localhost:8000 -t public  
   ```  
   Access the app at `http://localhost:8000/public/dashboard/contactsdashboard.php`.  

---

## 📚 API Documentation (Example)  
| Endpoint              | Method | Description              |  
|-----------------------|--------|--------------------------|  
| `/contacts`           | GET    | Fetch all contacts       |  
| `/contacts/add`       | POST   | Add a new contact        |  
| `/contacts/{id}/edit` | PUT    | Update a contact         |  
| `/contacts/{id}`      | DELETE | Delete a contact         |  

---

## 📅 Project Planning  
- **Jira Board**: [View Project Plan](https://kardachezakaria.atlassian.net/jira/software/projects/CON/boards/16?atlOrigin=eyJpIjoiM2YyMjE4MjA0N2YwNGZhOTlmYmFjZmNhNjQ1NjZlYTIiLCJwIjoiaiJ9) (https://kardachezakaria.atlassian.net/jira/software/projects/CON/boards/16?atlOrigin=eyJpIjoiM2YyMjE4MjA0N2YwNGZhOTlmYmFjZmNhNjQ1NjZlYTIiLCJwIjoiaiJ9)  
- Key Milestones:  
  - Database Setup  
  - CRUD Implementation  
  - UI Design  



---

## 📜 License  
MIT License. See [LICENSE](LICENSE) for details.  

--- 

Let me know if you need adjustments! 🚀
