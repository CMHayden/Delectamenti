CREATE TABLE `cmh1`.`Food_Category` (
	food_category_id INT(10) PRIMARY KEY,
	food_category_name VARCHAR(50),
	category_image VARCHAR(10)
)ENGINE=INNODB;

CREATE TABLE `cmh1`.`Recipe` (
    recipe_id INT(10) PRIMARY KEY,
    food_category_id INT(10),
        FOREIGN KEY (food_category_id)
        REFERENCES Food_Category(food_category_id),
    recipe_name VARCHAR(50) NOT NULL,
    recipe_description VARCHAR(300) NOT NULL,
    recipe_image VARCHAR(50) NOT NULL
)ENGINE=INNODB;

CREATE TABLE `cmh1`.`Ingredients` (
    ingredient_id INT(10) PRIMARY KEY,
		recipe_id INT(10),
				FOREIGN KEY (recipe_id)
				REFERENCES Recipe(recipe_id),
    ingredient_name VARCHAR(50)
)ENGINE=INNODB;

CREATE TABLE `cmh1`.`Recipe_Steps` (
    step_id INT(10) PRIMARY KEY,
    recipe_id INT(10),
        FOREIGN KEY (recipe_id)
        REFERENCES Recipe(recipe_id),
    step_number INT(10),
    step_description VARCHAR(10000)
)ENGINE=INNODB;

CREATE TABLE `cmh1`.`Users` (
    usser_id INT(10) PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(50),
    email VARCHAR(50),
    passwd VARCHAR(50),
		secret_answer VARCHAR(50)
)ENGINE=INNODB;
