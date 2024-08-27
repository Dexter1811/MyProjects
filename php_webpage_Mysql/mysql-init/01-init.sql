Create schema users;
CREATE TABLE users.customer (
    id varchar(50) PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
	lockcount int default 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	UNIQUE KEY unique_order (username, id)
);

INSERT INTO users.customer (id, username, password) VALUES
('1', '123456' , 'default'),
('2', 'Morkel' , 'default'),
('3', 'Adam' , 'default' ),
('4', 'Max' , 'default'),
('5', 'Kelvin' , 'default'),
('6', 'Roger' , 'default' );