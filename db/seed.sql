INSERT INTO cats (name)
VALUES
('Laptops'),
('PCs'),
('Mobiles');

INSERT INTO products (name, `desc`, price, pieces_no, img, cat_id)
VALUES
('lenovo ideapad', 'this is dummy description for product', 15000, 10, '1.jpg', 1),
('dell laptop', 'this is dummy description for product', 10000, 10, '2.jpg', 1),
('hp laptop', 'this is dummy description for product', 8000, 8, '3.jpg', 1),
('lenovo thinkpad', 'this is dummy description for product', 13000, 5, '4.jpg', 1),
('pc 123', 'this is dummy description for product', 5000, 3, '5.jpg', 2),
('pc456', 'this is dummy description for product', 6000, 4, '6.jpg', 2),
('pc 789', 'this is dummy description for product', 7000, 2, '7.jpg', 2),
('samsung ay 7aga', 'this is dummy description for product', 5000, 100, '8.jpg', 3),
('oppo ay 7aga', 'this is dummy description for product', 5500, 50, '9.jpg', 3),
('hawaei ay 7aga', 'this is dummy description for product', 5200, 30, '10.jpg', 3);

INSERT INTO admins (name, email, `password`)
VALUES
('noha alaa', 'noha@gmail.com', '$2y$10$PD/qV6q05eaR4hsI.hWCDeAmtLgKI8NREnSJhyCSgEBOO2S4FUkmi');
-- 1234567