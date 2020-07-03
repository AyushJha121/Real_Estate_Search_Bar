# Search-Algorithm
This shows the search algorithm on Mexican Data Set of Real Estates
## Installation
First things first we need to have xampp installed on our desktop, for which you can refer to this tutorial:

[![IMAGE ALT TEXT HERE](https://img.youtube.com/vi/-f8N4FEQWyY/0.jpg)](https://www.youtube.com/watch?v=-f8N4FEQWyY)

Now when you have installed xampp launch it and start the Apache and SQL server.
It should look something like this:

![alt text](https://github.com/Chamber-of-Product/Search-Algorithm/blob/master/images/xampp.PNG?raw=true)

## Setup

Now go to your browser and type localhost and press enter.
The localhost dashboard appears Now go to the upper right corner to open phpMyAdmin.

Click on new on the left hand side to create a new database:

![alt text](https://github.com/Chamber-of-Product/Search-Algorithm/blob/master/images/new%20database.PNG)

Type the name 
>property_data

and create the database

Now go to the import button and import from the data.sql file given in resources folder.

Choose the file data.sql from your desktop keep other values constant and click on Go.

Once the import is complete go to the left side panel and select the newly created database and select the dataset 
>properati-mx-2016-11-01-properties-sell

![alt text](https://github.com/Chamber-of-Product/Search-Algorithm/blob/master/images/dataset.PNG)

Now the table shows up for the data set.

![alt text](https://github.com/Chamber-of-Product/Search-Algorithm/blob/master/images/table.PNG)

## Implementation

Now we are done with the setup we can move on to complete the search algorithm 

First go to
>C:/xampp/htdocs/

and create a folder named 
>auto_comp

Then inside the folder copy the 3 codes provided in the repository's code folder
After this open your browser and type

>localhost/auto_comp

A search page will appear try searching villa house or any name of city in mexico.

![alt text](https://github.com/Chamber-of-Product/Search-Algorithm/blob/master/images/searchbar.PNG)

Bingo! we have sucessfully achieved our goal to create a search algorithm based on a Real Estate DataSet.

### Caution
It is important to note that the names of files and folders are done in relevance with code. 

If at any point you need to modify the name of files, folders or the database you need to change the same in the codes as well.
