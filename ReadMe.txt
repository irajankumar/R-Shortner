Installation Guide:

1. Download the latest version of script from https://github.com/rkking/R-Shortner/ and uzip it all.

2. Login to your host account.

3. Create a DataBase into your Database account with name rshornter.

4. Now open confing.php file of rshortner, which you just unzipped.

5. Now find the lines:

define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'password');
define('MYSQL_DB', 'rshortner');
define('MYSQL_HOST', 'localhost');

replace root with your database username. It is given by your hosting provider. 

replace password with your Databse password. It is given by your hosting provider.

replace localhost with your database host. It is given by your hosting provider.

6. Now, find the line:

define('PAGE_TITLE', 'R Shortner');


Replace R shotrtner with the name which you want to give to your site.

7. Save everything.

8. Now, Let's get back to your databse which you created with name rshortner. Go there select import option.

9. Upload the file. rshortner.sql

10. Now, you have created Database. Let's set up the rest. 

11. upload the all files except rshortner.sql to your file browser or site.

12. Now, visit your site. you'll see a working page of Your site.

