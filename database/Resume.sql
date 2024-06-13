CREATE TABLE users (
    userid INT PRIMARY KEY,
    name VARCHAR(50),
    address VARCHAR(100),
    email VARCHAR(100),
    phone_number VARCHAR(20)
    password VARCHAR(255);
    
);

CREATE TABLE user_skills (
    user_id INT,
    skill VARCHAR(50),
    proficiency_level VARCHAR(20),
    experience_years INT,
    FOREIGN KEY (user_id) REFERENCES users(userid)
);


CREATE TABLE work_history (
    user_id INT,
    company_name VARCHAR(100),
    position VARCHAR(50),
    start_date DATE,
    end_date DATE,
    responsibilities TEXT,
    FOREIGN KEY (user_id) REFERENCES users(userid)
);

CREATE TABLE education (
    user_id INT,
    institution VARCHAR(100),
    degree VARCHAR(50),
    start_date DATE,
    end_date DATE,
    gpa DECIMAL(3, 2),
    FOREIGN KEY (user_id) REFERENCES users(userid)
);


CREATE TABLE certifications (
    user_id INT,
    certification_name VARCHAR(100),
    issue_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(userid)
);

CREATE TABLE projects (
    user_id INT,
    project_name VARCHAR(100),
    description TEXT,
    start_date DATE,
    end_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(userid)
);