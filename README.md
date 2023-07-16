# Web Medic

## Project Description
*Web Medic* is a web software developed as part of a web course during my first year of IT engineering at Polytech Paris-Saclay. The project aimed to create a website using a technology of our choice, and I decided to use PHP due to its simplicity of setup. The inspiration for this project came from my previous personal project, *Oesto Data*. The key functionalities integrated into *Web Medic* include:

- Simplicity of use
- Easy setup
- Clean design
- Patient management
- Consultation management

## Project Installation
To run this project, you will need a PHP server and a MySQL database. Inside this repository, you will find a file named "sql-install-plus-data.sql" that contains the database structure and several example rows. Here is a **short tutorial** using MAMP:

1. Download MAMP from [here](https://www.mamp.info/en/downloads/) (choose MAMP & MAMP PRO for your platform).
2. Run the installer and deselect MAMP PRO and Apple Bonjour during the installation process.
3. Locate the htdocs folder in the MAMP installation directory (e.g., C/ProgrammFiles/MAMP/htdocs).
4. Clone the repository into the htdocs folder.
5. In your browser, enter `http://localhost/` to see a page with the title "Index of" and the repository name.
6. Click on the repository name to access the Web Medic home page.
7. Launch MAMP and click on the "Open WebStart page" button.
8. In the top menu, click on "TOOLS" and then select "PHPMYADMIN".
9. Click on the add database icon in the left-hand menu.
10. Fill in the database name field with `osteobdd` and click "Create".
11. On the redirected page, click on the "SQL" tab in the top menu.
12. Copy the content of the "sql-install-plus-datas.sql" file into the text field and click the "Go" button at the bottom left.
13. Go back to the *Web Medic* front page, and you should be able to log in using the test account with the username `Admin` and the password `test`.

*Note that this web software would typically be set up on a remote server and used by clients.*

## Project Usage
The top menu of *Web Medic* includes two key features:

### List of Patients
A summary of patient information is displayed on a single line. Clicking on a line will show all the details for that patient. You can use the "Modify patient" button to edit their information and the "Save modification" button to save any changes made. The red "Delete patient" button allows you to remove the patient from the list. To add a consultation related to a patient, fill in the date, reason, and treatment fields, and click the "Add consultation" button.

### Adding a Patient
Fill in the desired information about a new patient. The only required field is the patient's last name. Press the "Add patient" button to save the new entry.

You can log out from *Web Medic* using the "Log out" button in the top menu.

## Future Improvements
Here are some functionalities that I would like to add in the future:

- User account creation
- User account management
- User account deletion
- Password change functionality
- Password recovery via email
- Login safety features like attempt counters and CAPTCHA
- Data encryption in the database
- Easy translated languages choices

This project is currently on hold, but I welcome any contributions.

## Credits
I would like to thank the Polytech Paris-Saclay web development course for its role in this project.

## License
This project is licensed under the GNU General Public License v3.0.

## Contact Information
If you have any questions, you can reach me via email at `maxime.fromont0@gmail.com`.
