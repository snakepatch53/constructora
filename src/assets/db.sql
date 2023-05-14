DROP TABLE IF EXISTS info;

CREATE TABLE info (
    info_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    info_name VARCHAR(50),
    info_country VARCHAR(50),
    info_state VARCHAR(50),
    info_city VARCHAR(50),
    info_whatsapp VARCHAR(20),
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
        '+1 845-219-3871',
        '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2988.054286150355!2d-74.02387432310792!3d41.50309838880862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd3203a0e548c9%3A0xda06f18ce34c05f4!2s322%201st%20St%2C%20Newburgh%2C%20NY%2012550%2C%20EE.%20UU.!5e0!3m2!1ses!2sec!4v1683904817084!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
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

DROP TABLE IF EXISTS slider;

CREATE TABLE slider (
    slider_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    slider_img VARCHAR(150),
    slider_title VARCHAR(50),
    slider_desc TEXT,
    slider_last VARCHAR(50),
    slider_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    slider
VALUES
    (
        1,
        '1.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        '2.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        '3.png',
        '',
        '',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS contacts;

CREATE TABLE contacts (
    contact_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    contact_name VARCHAR(50),
    contact_value VARCHAR(50),
    contact_link TEXT,
    contact_icon VARCHAR(50),
    contact_color VARCHAR(50),
    contact_type ENUM('contact', 'social') DEFAULT 'contact',
    contact_last VARCHAR(50),
    contact_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    contacts
VALUES
    (
        1,
        'Phone',
        '+1 845-219-3871',
        'tel:+1 845-219-3871',
        'fas fa-phone-alt',
        '#0d6efd',
        'contact',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Email',
        'admin@erazobrothersllc.com',
        'mailto:admin@erazobrothersllc.com',
        'fas fa-envelope',
        '#0d6efd',
        'contact',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Address',
        '322 first st newburgh ny 12550',
        'https://goo.gl/maps/6oQxHiLhJex82nck9?coh=178573&entry=tt',
        'fas fa-map-marker-alt',
        '#0d6efd',
        'contact',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'Facebook',
        '@erazobrothers',
        'https://www.facebook.com/erazobrothers',
        'fab fa-facebook',
        '#0d6efd',
        'social',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        'Instagram',
        '@erazobrothers',
        'https://www.instagram.com/erazobrothers',
        'fab fa-instagram',
        '#833ab4',
        'social',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        'Twitter',
        '@erazobrothers',
        'https://www.twitter.com/erazobrothers',
        'fab fa-twitter',
        '#00acee',
        'social',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS qualities;

CREATE TABLE qualities (
    quality_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    quality_title VARCHAR(50),
    quality_desc TEXT,
    quality_img VARCHAR(50),
    quality_last VARCHAR(50),
    quality_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    qualities
VALUES
    (
        1,
        'Innovation',
        'Find the best details and always look up to date',
        '1.jpg',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Commitment',
        "You'll have our guarantee in quality and punctuality",
        '2.jpg',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Elegance',
        'Up to date with all current aesthetic details',
        '3.jpg',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS services;

CREATE TABLE services (
    service_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    service_title VARCHAR(50),
    service_desc TEXT,
    service_img VARCHAR(50),
    service_wtsp_msg TEXT,
    service_last VARCHAR(50),
    service_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    services
VALUES
    (
        1,
        'Patios',
        'We remodel and fix your outdoor spaces to give you a different and lively style.',
        '1.jpg',
        'Hello, I would like to know more about the patio construction service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Retaining Walls',
        'A retaining wall is important and needs to be very well built, we guarantee it.',
        '2.jpg',
        'Hello, I would like to know more about the retaining wall construction service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Sidewalks',
        'Give your home a better presentation by building beautiful and elegant sidewalks.',
        '3.jpg',
        'Hello, I would like to know more about the sidewalk construction service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'Lawn Care',
        'Your lawn also deserves to have a good presentation, keep it trimmed and well cared for.',
        '4.jpg',
        'Hello, I would like to know more about the lawn care service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        5,
        'Mulch',
        'Apply the best organic material to your plots and give it life and color for longer.',
        '5.jpg',
        'Hello, I would like to know more about the mulch service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        6,
        'Trimming',
        'Apply beautifiers and make your house have a different touch from the others.',
        '6.jpg',
        'Hello, I would like to know more about the trimming service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        7,
        'Roofing',
        'We repair and build roofs, we have the best materials and the best prices.',
        '7.jpg',
        'Hello, I would like to know more about the roofing service.',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    );

DROP TABLE IF EXISTS projects;

CREATE TABLE projects (
    project_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    project_title VARCHAR(50),
    project_desc TEXT,
    project_img VARCHAR(50),
    project_link TEXT,
    project_origin VARCHAR(50) DEFAULT 'website',
    project_last VARCHAR(50),
    project_created VARCHAR(50),
    service_id INT,
    FOREIGN KEY (service_id) REFERENCES services(service_id)
) ENGINE INNODB;

INSERT INTO
    projects
VALUES
    (
        1,
        'Project 1',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '1.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        3
    ),
    (
        2,
        'Project 2',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '2.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        6
    ),
    (
        3,
        'Project 3',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '3.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        3
    ),
    (
        4,
        'Project 4',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '4.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        1
    ),
    (
        5,
        'Project 5',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '5.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        4
    ),
    (
        6,
        'Project 6',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '6.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        7
    ),
    (
        7,
        'Project 7',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '7.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        1
    ),
    (
        8,
        'Project 7',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '8.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        1
    ),
    (
        9,
        'Project 9',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '9.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        3
    ),
    (
        10,
        'Project 10',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '9.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        3
    ),
    (
        11,
        'Project 11',
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
        '11.jpg',
        '',
        'website',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00',
        5
    );

DROP TABLE IF EXISTS mailbox;

CREATE TABLE mailbox (
    mail_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    mail_name VARCHAR(50),
    mail_email VARCHAR(50),
    mail_phone VARCHAR(50),
    mail_subject VARCHAR(50),
    mail_location VARCHAR(50),
    mail_message TEXT,
    mail_last VARCHAR(50),
    mail_created VARCHAR(50)
) ENGINE INNODB;

DROP TABLE IF EXISTS customers;

CREATE TABLE customers (
    customer_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    customer_name VARCHAR(50),
    customer_link TEXT,
    customer_logo VARCHAR(50) DEFAULT 'default.png',
    customer_last VARCHAR(50),
    customer_created VARCHAR(50)
) ENGINE INNODB;

INSERT INTO
    customers
VALUES
    (
        1,
        'Moronanet',
        'https://moronanet.com/',
        '1.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        2,
        'Learnidea',
        'https://ideasoft.learnidea.site/',
        '2.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        3,
        'Ideasoft',
        'https://ideasoft.site/',
        '3.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    ),
    (
        4,
        'Leap Estudio',
        'https://leapestudio.com/',
        '4.png',
        '2023-01-01 00:00:00',
        '2023-01-01 00:00:00'
    )