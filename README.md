# Chatterbot

Example of a simple chatterbot for educational purposes.

- Download package: ```composer require tigo/chatterbot```
- MIT license: [License](https://github.com/tigoCaval/chatterbot/blob/main/LICENSE)
- ***Feel free to use this project***. ***Leave a star :star: if you liked!***

*If you found this project useful, consider making a donation to support the developer.* 

[![paypal](https://www.paypalobjects.com/pt_BR/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=ZQRM3T5WG7JL4) 
|
[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif)](https://www.paypal.com/donate?hosted_button_id=9BQYV7FVREN92)

## Introduction
This project is based on question and answers.
Example: a array with the following information 

"Hi"=> ["Hi","Hello"]

Question = "Hi" | random answer = ["Hi","Hello"]

**Using Database**

[![](https://github.com/tigoCaval/images/blob/main/web/table_chatterbot.png)](https://github.com/tigoCaval/chatterbot)

 ### Getting started
 Starting with composer
 1. Install composer
 2. Download package: ```composer require tigo/chatterbot```
 3. PHP >= 7.3;
 4. Update command: ```composer update```  
 
 ```php
 //Somewhere in your project, you may need to use autoload
 include __DIR__ ."/vendor/autoload.php";
 ```
 **Example**
  ```php
   use Tigo\ChatterBot\Bot\BotUniversal; // import class
   use Tigo\ChatterBot\Response; //import class

  $response  = new Response(new BotUniversal);
  
  //using local array data | return string
  print $response->check("Good Afternoon"); // random result = ["Good Afternoon","Hi","Hello"]
  
  //fetching information from a database | return string
  print $response->checkDataBase("Good Afternoon"); // random result = ["Good Afternoon","Hi","Hello"]   
  
 ```
 
 ### Configuration
 
 - To configure the database connection using this modeling example [click here](https://github.com/tigoCaval/crud/blob/main/doc/doc-en.md) (project tigoCaval/crud).
 - It is necessary to create the data tables according to this database modeling.

## Contributors
 - [Tiago A C Pereira](https://github.com/tigoCaval)
 - [List of contributors](https://github.com/tigoCaval/chatterbot/graphs/contributors)
