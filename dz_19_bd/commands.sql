CREATE TABLE `client`(
                         `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                         `name` CHAR(255) NOT NULL,
                         `email` CHAR(255) NOT NULL UNIQUE,
                         `telephone` INT(8) NOT NULL UNIQUE,
                         `deleted_at` TIMESTAMP DEFAULT NULL,
                         `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                         `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB CHARACTER SET utf8;

CREATE TABLE `product`(
                          `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                          `title` CHAR(255) NOT NULL,
                          `price` INT NOT NULL,
                          `description` VARCHAR(500) NOT NULL ,
                          `deleted_at` TIMESTAMP DEFAULT NULL,
                          `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                          `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB CHARACTER SET utf8;

CREATE TABLE `cart` (
                        `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                        `client_id` INT UNSIGNED NOT NULL,
                        `product_id` INT UNSIGNED NOT NULL,
                        `quantity` INT NOT NULL DEFAULT 1,
                        `deleted_at` TIMESTAMP DEFAULT NULL,
                        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        FOREIGN KEY (`client_id`) REFERENCES `client`(`id`),
                        FOREIGN KEY (`product_id`) REFERENCES `product`(`id`)
) ENGINE=InnoDB CHARACTER SET utf8;

INSERT INTO `client` (`name`, `email`, `telephone`)
VALUES
    ('John Doe', 'john@gmail.com', 12345678),
    ('Jane Smith', 'jane@gmail.com', 98765432),
    ('Alex Johnson', 'alex@gmail.com', 11112222),
    ('Emily Davis', 'emily@gmail.com', 33334444),
    ('Michael Wilson', 'michael@gmail.com', 55556666);

-- Inserting data into the 'product' table
INSERT INTO `product` (`title`, `price`, `description`)
VALUES
    ('Laptop', 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum neque nec mi varius, at interdum tortor cursus. Nulla facilisi. Integer id dui quis odio rhoncus elementum.'),
    ('Smartphone', 500, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum neque nec mi varius, at interdum tortor cursus. Nulla facilisi. Integer id dui quis odio rhoncus elementum.'),
    ('Headphones', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum neque nec mi varius, at interdum tortor cursus. Nulla facilisi. Integer id dui quis odio rhoncus elementum.'),
    ('Fitness Tracker', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum neque nec mi varius, at interdum tortor cursus. Nulla facilisi. Integer id dui quis odio rhoncus elementum.'),
    ('Coffee Maker', 200, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum neque nec mi varius, at interdum tortor cursus. Nulla facilisi. Integer id dui quis odio rhoncus elementum.');


SELECT * FROM `client`;

INSERT INTO `client` (`name`, `email`, `telephone`)
VALUES ('Alice Johnson', 'alice@example.com', 0993356158);

INSERT INTO cart (client_id, product_id, quantity)
VALUES (1, 3, 2);

SELECT * FROM `cart`;

UPDATE cart
SET quantity = 3
WHERE client_id = 1 AND product_id = 2;

UPDATE client
SET name = 'Jane Doe'
WHERE id = 2;

INSERT INTO cart (client_id, product_id, quantity)
VALUES (3, 1, 4);

DELETE FROM cart WHERE client_id = 3 AND product_id = 1;

DELETE FROM client WHERE id = 4;