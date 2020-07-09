# N-Tier Laravel

This repo made for implementation of N-Tier architecture to Laravel. All neccesary folders created under app folder.

## Entites
This folder contains Laravel model files. We will use this files for database connection, table configurations and relationships.
## Models
This folder contains classes for each file in Entites folder. Every class must inherit related Entity class. We will create objects from these classes to send data to blade view. This approach provides us clean code on view files.
## BusinessLayer
This folder contains logical classes. In this layer we access datas from Eloquent ORM or Query Builder and, use them in methods.
### Abstracts
In this file we have some core abstract classes and interfaces for Concrete classes. This approach helps us to implenting Interface Segregation and Dependency Inversion.

### Concretes
In this folder we create logical classes which implements Interfaces or/and Abstract classes from Abstracts folder.

# Routes 
If you don't use RouteServiceProvider I recommend you to create folders for each module in your application under the routes folder. In that way your web.php file will remain more clean.