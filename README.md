# posts-blogger-assignment (Migration | Seeds | Query Builder)
<!-- [Live Link](https://bmi-calculator-ostad.netlify.app) -->

The posts-blogger-assignment is a simple Laravel project. Migration | Seeds | Query Builder.

And it's assignment projects of PHP and Larvel of OSTAD.

![Laravel Properly Installed](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/wellcome.png)

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Demo](#demo)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Laravel Query Builder](#Laravel-Query-Builder)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Description

The posts-blogger-assignment is a simple Laravel project and updated versioin. I include Migration | Seeds | Query Builder.

## Features
| Key Features                | Description                                                  |
| ---------------------------| ------------------------------------------------------------ | 
|  Migration  | create new table, add new column, drop column |
|  Query Builer    | ... |
|  Seeders    | real data added with custom json file, add faker fake data |


## Demo
Project Home Page

[![Demo Video](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/wellcome.png)](https://youtu.be/RYAh3rSyWHs)

## Technologies Used

List the technologies, libraries, frameworks, or languages that you used to build your project. You can also provide links to their official websites or documentation.

- Laravel
- MYSQL
## Installation

Clone the repository to your local machine

bash

    git clone https://github.com/ahmmedsabbirbd/posts-blogger-assignment.git

Open Project folder:

bash

     cd posts-blogger-assignment

Install the necessary dependencies by running the following command in the project directory:

bash

     composer install

This will install all the required packages and dependencies needed to run the project.
Create a .env file in the root of the project and add the required environment variables. These variables may include database credentials, API keys, and other configuration details. You can find the list of required environment variables in the project's README.md file.
Start the development server by running the following command:

bash

    php artisan serve

This will start the server and the application will be available at http://localhost:8000/.

Note: If you encounter any issues while installing or running the project locally, please refer to the project's documentation or reach out to the project maintainers for assistance.

## Laravel Query Builder

1. ## Questions 1:
     `Create a new Laravel project named "posts-blogger-assignment" using the Laravel command-line interface.`

     Laravel query builder is a powerful and flexible tool for interacting with databases in laravel applications. it supports crud operations, provides built-in protection against sql injection, and seamlessly integrates with laravel's orm. it offers a fluent and intuitive syntax, promoting code readability and maintainability. additionally, it can work with multiple databases, enabling developers to switch between different database systems effortlessly. this flexibility is particularly beneficial for building applications that need to interact with diverse data sources.

2. ## Questions 2:
     `Write the code to retrieve the "excerpt" and "description" columns from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.`

     ![query builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-2.png)
     ![query builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-postman-2.png)

3. ## Questions 3:
     `Describe the purpose of the distinct() method in Laravel's query builder. How is it used in conjunction with the select() method?`

     ![query builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-3.png)
     select()
          return all recored
     distinct()
          return all recored but dulicate record not return // only uniqc value return


4. ## Questions 4:
     `Write the code to retrieve the first record from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the "description" column of the $posts variable.`

     ![add new column](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-4.png)
     ![add new column](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-web-4.png)

5. ## Questions 5:
     `Write the code to retrieve the "description" column from the "posts" table where the "id" is 2 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.`
     
     ![add new column](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-5.png)

6. ## Questions 6:
     `Explain the difference between the first() and find() methods in Laravel's query builder. How are they used to retrieve single records?`

     ![migration](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-6.png)
     first()
               $user = DB::table('users')
               ->where('active', true)
               ->orderBy('created_at')
               ->first();
          this case:
          return 1 record but where 'users' active this users table, all users which inedex 0 then return it

     find()
          provide id
          it's primary key
          return 1 recored of this table

7. ## Questions 7:
     `Write the code to retrieve the "title" column from the "posts" table using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-7.png)
     ![crate CLI laravel project](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-web-7.png)

8. ## Questions 8:
     `.Write the code to insert a new record into the "posts" table using Laravel's query builder. Set the "title" and "slug" columns to 'X', and the "excerpt" and "description" columns to 'excerpt' and 'description', respectively. Set the "is_published" column to true and the "min_to_read" column to 2. Print the result of the insert operation.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-8_1.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-8_2.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-8_3.png)

9. ## Questions 9:
     `Write the code to update the "excerpt" and "description" columns of the record with the "id" of 2 in the "posts" table using Laravel's query builder. Set the new values to 'Laravel 10'. Print the number of affected rows.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-9_1.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-9_2.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-9_3.png)
10. ## Questions 10:
     `10.Write the code to delete the record with the "id" of 3 from the "posts" table using Laravel's query builder. Print the number of affected rows.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-10.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-9_3.png)
11. ## Questions 11:
     `Explain the purpose and usage of the aggregate methods count(), sum(), avg(), max(), and min() in Laravel's query builder. Provide an example of each.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-11.png)
     count()
          all users record count and return
     sum()
          post read total time return 
     avg()
          post read avarage time return 
     max()
          post read max time return 
     min()
          post read min time return 
12. ## Questions 12:
     `Describe how the whereNot() method is used in Laravel's query builder. Provide an example of its usage.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-12.png)
     whereNot()
          all users recored return 
          only 'korim ali' this user not return 
          post read min time return 
13. ## Questions 13:
     `.Explain the difference between the exists() and doesntExist() methods in Laravel's query builder. How are they used to check the existence of records?`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-13.png)
     exists()
          check record or column database table
          if have then is true
     doesntExit()
          check record or column database table
          if did not exit then is return true
14. ## Questions 14:
     `Write the code to retrieve records from the "posts" table where the "min_to_read" column is between 1 and 5 using Laravel's query builder. Store the result in the $posts variable. Print the $posts variable.`

     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-14_1.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-14_2.png)
15. ## Questions 15:
     `Write the code to increment the "min_to_read" column value of the record with the "id" of 3 in the "posts" table by 1 using Laravel's query builder. Print the number of affected rows.`
     
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-15_1.png)
     ![qurey builder](https://raw.githubusercontent.com/ahmmedsabbirbd/posts-blogger-assignment/main/public/assets/documentation/task-subline-15_2.png)
     

## Usage

### Getting Started
To get started with posts-blogger-assignment, you will need to follow the installation instructions in the previous section.

## API Documentation
Did not Provide any API

## Contributing

Contributions to our project are welcome and encouraged! To get started, please read our CONTRIBUTING.md file, which outlines our guidelines for contributing, reporting issues, and suggesting new features.

1. ### In general, contributors can help by:
    Reporting bugs or issues they encounter.
    Fixing bugs or implementing new features.
    Providing feedback and suggestions for improving the project.
    Writing tests and improving documentation.

2. ### To contribute to the project, please follow these steps:
    Fork the repository on GitHub.
    Create a new branch with a descriptive name for your contribution.
    Make your changes and test them thoroughly.
    Create a pull request to merge your changes back into the main branch of the project.
    Wait for your changes to be reviewed and merged.

    Please note that all contributions are subject to our code of conduct, and we ask that all contributors follow our guidelines for contributing. If you have any questions or concerns, please don't hesitate to reach out to the project maintainers.

    We appreciate your interest in contributing to our project and look forward to working with you!

## License
Any one use it

## Contact

If you have any questions, feedback, or suggestions, feel free to contact us using the following methods:

- Email: ahmmedsabbirbd@gmail.com
- Linkdin: [ahmmedsabbirbd](https://www.linkedin.com/in/ahmmedsabbirbd/)
- Website: [Portfolio](https://sabbir-me.netlify.app)

We appreciate your interest in our project and look forward to hearing from you!