CREATE TABLE IF NOT EXISTS User
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    role VARCHAR(255) DEFAULT 'user'
);

CREATE TABLE IF NOT EXISTS Post
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    userId int NOT NULL,
    image TEXT NOT NULL,
    datetime DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS Comment
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content TEXT NOT NULL,
    userId int NOT NULL,
    postId int NOT NULL,
    comId int DEFAULT NULL,
    datetime DATETIME NOT NULL
);
--     userId int NOT NULL, --celui qui écrit le commentaire
--     postId int NOT NULL, --post sur lequel on pose un commentaire
--     comId int DEFAULT NULL, --réponse à un commentaire



ALTER TABLE Post ADD CONSTRAINT FOREIGN KEY (userId) REFERENCES User(id);

ALTER TABLE Comment ADD CONSTRAINT FOREIGN KEY (userId) REFERENCES User(id);

ALTER TABLE Comment ADD CONSTRAINT FOREIGN KEY (postId) REFERENCES Post(id);