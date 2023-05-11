DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(50),
    info_country VARCHAR(50),
    info_state VARCHAR(50),
    info_city VARCHAR(50),
    info_location TEXT,
    info_desc TEXT,
    info_mision TEXT,
    info_vision TEXT,
    info_last VARCHAR(50),
    info_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    info
VALUES
    (
        1,
        'Erazo Brothers',
        'United States',
        'New York',
        'Newburgh, NY',
        '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11952.162265164!2d-74.032010721862!3d41.50339571062848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd2bf1836bd927%3A0xf745d68dec3c106e!2sNewburgh%2C%20Nueva%20York%2012550%2C%20EE.%20UU.!5e0!3m2!1ses!2sec!4v1683840815584!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        'Our experienced team is here to help with the entire process, from initial idea to commissioning, we are here to help you get the design and work you need.',
        "Erazo Brothers is a construction company committed to building high-quality, innovative and sustainable projects, exceeding our clients' expectations. Our mission is to contribute to the growth and development of our community, providing our clients with the best possible construction experience through excellent customer service, professionalism and a commitment to safety and environmental responsibility.",
        "Our vision at Erazo Brothers is to be recognized as a leader in the construction industry, delivering exceptional quality, innovative solutions, and unparalleled customer service. We strive to exceed our clients' expectations by constantly improving our processes, utilizing cutting-edge technology, and fostering a culture of excellence and collaboration among our team members.",
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS user;

CREATE TABLE user (
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(50),
    user_user VARCHAR(50),
    user_pass TEXT,
    user_photo VARCHAR(50) DEFAULT 'default.png',
    user_last VARCHAR(50),
    user_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    user (
        user_id,
        user_name,
        user_user,
        user_pass,
        user_last,
        user_created
    )
VALUES
    (
        1,
        'Administrator',
        'admin',
        'admin',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Root',
        'erazobrothers',
        'ZXa1A%1IC$KtMlb6',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );