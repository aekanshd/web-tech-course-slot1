# Web Tech Class 2018 (Slot 1) - PESU I/O

This is the final assignment of the course. 

You have to write a PHP script that will accept the user credentials that were given to it from your previous AJAX call, validate it and appropriately send a response back to the login webpage.

1. Make a separate PHP page that checks the login, and upon "success" makes a new PHP session with the user ID, and then sends the response code back to the login page.
2. In the login page, modify your code to read the response code and do the appropriate dynamic changes on the website - for example, show error if there is wrong credentials, or redirect the page upon success, etc.
3. Modify the login, and welcome pages to be "PHP"-enabled - the users should NOT be able to see the login page if they're already logged in (redirect them to the welcome page), and the users should NOT be able to see the welcome page if they aren't logged in (redirect them to the login page)
4. Submit the URL of the working website if you've hosted it on 000webhost.
5. ZIP your project files and attach the zip if you've made the local server such that if I unzip and host your files on my local server, I should see a working website.

### Credentials
```yaml
Username: admin@example.com
Password: admin123
```

### Database
```php
$servername = "localhost";
$username = "id4362835_root";
$password = "root123";
$database = "id4362835_webtechproject";
```
```sql
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `webtechproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webtechproject`;
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `property` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
```

Or use the file [webtechproject.sql](webtechproject.sql) to import the database. Make sure you change the settings in the [details.php](details.php) page as well.

### To refer

Use the sample scripts taken from [my website](https://masterakay.000webhostapp.com/) for your references.