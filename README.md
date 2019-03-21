# err-rss-feed
ERR rss feed website - takes data from https://www.err.ee/rss saves to DB and caches data and displays it

## Setup
* setup LAMP, WAMP or MAMP
* clone repo to your **var/www/html** folder and make sure you have the premissions to read and write the files there
* run **create.sql** in command line or use **phpmyadmin** to create the table
  * command line: **mysql> source /path/to/file/create.sql**
* change the database name, password, servername in **db_connection.php** if neccesary
  * ![Image of the table] (/instr/connectioninfo.png)
* site url: **localhost/err-rss-feed/index.php**
