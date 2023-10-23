# Apache Server Test - Computer Network 

Guide on how to install the dependencies to run the code.

**Install Apache Server**
- Open a terminal and run the following command to install Apache server:

'''bash
$ sudo apt install apache2

'''
- To verify if the installation was successful, go to the address 'http://localhost' in your browser and see if an Apache page is displayed.
- If not, run the following command:

'''bash
$ sudo systemctl start apache

'''

**Install PHP**
- Open a terminal and run the following command to install php:

'''bash
$ sudo apt install php libapache2-mod-php

'''
- To verify if the installation was successful, got the address 'http://localhost/info.php' in your browser and see if PHP info page is displayed.
- If not, run the following commands:

'''bash
$ cd /var/www/html
$ sudo touch info.php

'''
- And in info.php, paste the following code:

'''php
<?php
phpinfo();
?>

'''
**Run info.php code**
- In info.php file, paste the content of this repository or download it inside /var/www/html/
- Change and implement any modifications on this code to display different content and styles.

