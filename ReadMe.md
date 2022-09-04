# Supplier Product List Processor - Solution

#### About this project
This repo consists of parser.php file. As the name suggests, its a parser of CSV file
When run on commandline/terminal, The data in the CSV is displayed as individual items
```
-------------
make : 'ACCESSORIZE' (string) - Brand name
model : 'UNIVERSAL 10 INCH TABLET FOLIO CASE - ROSE NAVY' (string) - Model name
condition : 'Brand New' (string) - Condition name
grade : 'Brand New' (string) - Grade name
capacity : 'Not Applicable' (string) - Gb spec name
colour : 'Multicolour' (string) - Colour name
network : 'Not Applicable' (string) - Network name

```

This code is compatible with any type of CSV with header as main field for the data. The unique fature of this file is that it accepts large CSV files as well without any memory limit


#### Requirements to run the file
- Windows with commandline / Linux/OSX with terminal
- PHP v7 and above


#### Instruction to run
Open commandline or terminal and run the code as shown beow
php parser.php --file <INPUT_FILENAME.CSV> --unique-combination=<FILENAME_OUTPUT.CSV>

example
```
php parser.php --file products_comma_separated.csv --unique-combinations=combination_count.csv
```

#### Work in progress
The objective is to produce a CSV file containing unique set of data with count as follows
```
make: 'Apple'
model: 'iPhone 6s Plus'
colour: 'Red'
capacity: '256GB'
network: 'Unlocked'
grade: 'Grade A'
condition: 'Working'
count: 129

```
