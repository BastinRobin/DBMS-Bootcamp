# SQL INSERT INTO Syntax
It is possible to write the INSERT INTO statement in two forms.
The first form does not specify the column names where the data will be inserted, only their values:

First:

    INSERT INTO table_name
    VALUES (value1,value2,value3,...);

Second:

    INSERT INTO table_name (column1,column2,column3,...)
    VALUES (value1,value2,value3,...);

Example:

    /* Insert Data Only in Specified Columns */
    INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
    VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway');

    /* Insert Data Only in Specified Columns */
    INSERT INTO Customers (CustomerName, City, Country)
    VALUES ('Cardinal', 'Stavanger', 'Norway');



# SQL UPDATE Syntax:
The UPDATE statement is used to update existing records in a table.

Example:


    UPDATE table_name
    SET column1=value1,column2=value2,...
    WHERE some_column=some_value;



Syntax:

    UPDATE Customers
    SET ContactName='Alfred Schmidt', City='Hamburg'
    WHERE CustomerName='Alfreds Futterkiste';


Be careful when updating records. If we had omitted the WHERE clause, in the example above, like this:

    UPDATE Customers
    SET ContactName='Alfred Schmidt', City='Hamburg';


# SQL DELETE Syntax
The DELETE statement is used to delete rows in a table.

Syntax:nin


    DELETE FROM table_name
    WHERE some_column=some_value;

Example:

    DELETE FROM Customers
    WHERE CustomerName='Alfreds Futterkiste' AND ContactName='Maria Anders';

    /** DELETE ALL */
    DELETE * FROM table_name;
