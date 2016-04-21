# Database table:


Table name: Customers;

<table>
  <tbody><tr>
    <th>CustomerID</th>
    <th>CustomerName</th>
    <th>ContactName</th>
    <th>Address</th>
    <th>City</th>
    <th>PostalCode</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>1<br><br></td>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Obere Str. 57</td>
    <td>Berlin</td>
    <td>12209</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Ana Trujillo Emparedados y helados</td>
    <td>Ana Trujillo</td>
    <td>Avda. de la Constitución 2222</td>
    <td>México D.F.</td>
    <td>05021</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Antonio Moreno Taquería</td>
    <td>Antonio Moreno</td>
    <td>Mataderos 2312</td>
    <td>México D.F.</td>
    <td>05023</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>4<br><br></td>
    <td>Around the Horn</td>
    <td>Thomas Hardy</td>
    <td>120 Hanover Sq.</td>
    <td>London</td>
    <td>WA1 1DP</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Berguvsvägen 8</td>
    <td>Luleå</td>
    <td>S-958 22</td>
    <td>Sweden</td>
  </tr>
</tbody></table>


# SQL Statments:
Examples:
* SQL is NOT case sensitive: select is the same as SELECT


     SELECT * FROM Customers;

# SQL SELECT syntax:

    SELECT column_name, column_name FROM table_name;

and

    SELECT * FROM table_name;

Example:

    SELECT CustomerName, City From Customers;


# SQL SELECT DISTINCT Syntax:
In a table, a column may contain many duplicate values; and sometimes you only want to list the different (distinct) values.

Syntax:

    SELECT DISTINCT column_name, column_name FROM table_name;

Example:

    SELECT DISTINCT City FROM Customers;


# SQL WHERE syntax:
The WHERE clause is used to extract only those records that fulfill a specified criterion.

Syntax:

    SELECT column_name,column_name
    FROM table_name
    WHERE column_name operator value;

Example:

    SELECT * FROM Customers
    WHERE Country='Mexico';


# SQL UPDATE syntax:
The UPDATE statement is used to update existing records in a table.

Syntax:

    UPDATE table_name
    SET column1=value1,column2=value2,...
    WHERE some_column=some_value;
    

Example:

    UPDATE Customers
    SET ContactName='Alfred Schmidt', City='Hamburg'
    WHERE CustomerName='Alfreds Futterkiste';





# SQL AND & OR Operators:
The AND operator displays a record if both the first condition AND the second condition are true.

The OR operator displays a record if either the first condition OR the second condition is true.

Example (OR):

    SELECT * FROM Customers
    WHERE City='Berlin'
    OR City='München';


Example (AND):

    SELECT * FROM Customers
    WHERE Country='Germany'
    AND (City='Berlin' OR City='München');

# SQL ORDER BY Syntax:
The ORDER BY keyword sorts the records in ascending order by default. To sort the records in a descending order, you can use the DESC keyword.

Syntax:

    SELECT column_name, column_name
    FROM table_name
    ORDER BY column_name ASC|DESC, column_name ASC|DESC;

Example:

    // Order by several columns
    SELECT * FROM Customers
    ORDER BY Country DESC;

    // ORDER by Multiple columns
    SELECT * FROM Customers
    ORDER BY Country ASC, CustomerName DESC;
