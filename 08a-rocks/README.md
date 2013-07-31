# Rocks
## I picks ’em up, I gives ’em away.

This is a demo database-driven app. It does a few very basic things with a mySQL database:

1. Create a record
2. List (read) records
3. Update a record
4. Delete a record

There also are some things it doesn't do, like:

1. Displaying records in a specific order (ORDER BY)
2. Filtering records (WHERE)
3. Actually creating the table and columns. This would normally be done as part of a setup procedure, but instead, let's use phpMyAdmin.

The database, called rock_collector, needs to contain a table called "rock". it needs the following columns:
- id (INT, PRIMARY KEY, AUTO_INCREMENT): A unique id for each entry. The db assigns this number automatically when it creates a record.
- whereFound (varchar): The name of the park where the rock was found.
- who (varchar): Who I plan to give the rock to.
- diameter (int): How big is the rock?
- color (varchar): What colour is the rock?
- given (tinyint): Have I given it away yet? This value is either 0 or 1, emulating boolean true and false.

If you want to pursue this further, you can get a lot of good info [here](http://www.tizag.com/mysqlTutorial/index.php).