-- Step 1: Create the Database
CREATE DATABASE vavuniyauniversity;

-- Step 2: Use the Database
USE vavuniyauniversity;

-- Step 3: Create the 'undergraduate' Table
CREATE TABLE undergraduate (
    id INT(11) NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    course VARCHAR(255),
    skills TEXT,
    projects TEXT,
    github VARCHAR(255),
    linkedin VARCHAR(255),
    profile_image VARCHAR(255),
    PRIMARY KEY (id)
);

-- Step 4: Create the 'employer' Table
CREATE TABLE employer (
    id INT(11) NOT NULL AUTO_INCREMENT,
    company_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);
