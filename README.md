# N-Tier Laravel

This repo made for implementation of N-Tier architecture to Laravel. All neccesary folders created under app folder.

## Entites
This folder contains Laravel model files. We will use this files for database connection, table configurations and relationships.
## Models
This folder contains classes for each file in Entites folder. Every class must inherit related Entity class. We will create objects from these classes to send data to blade view. This approach provides us clean code on view files.
## DataAccessLayer
This folder will manage database processes, like CRUD or reporting functions. This folder forces us to implentation of Single Responsibility Principle. We will use classes which is inside of that folder, to send data to Business layer. 
## BusinessLayer
This folder contains logical classes. In this layer we access datas from Data Access Layer and, use them in methods.
## Abstracts
In this file we have some core abstract classes and interfaces for N-Tier Architecture

