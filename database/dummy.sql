INSERT INTO users (name, address, email, phone_number, password)
VALUES 
('John Doe', '123 Main St, Anytown, USA', 'john.doe@example.com', '555-1234', 'password1'),
('Jane Smith', '456 Oak St, Sometown, USA', 'jane.smith@example.com', '555-5678', 'password2'),
('Alice Johnson', '789 Pine St, Anycity, USA', 'alice.johnson@example.com', '555-8765', 'password3'),
('Bob Brown', '321 Elm St, Yourtown, USA', 'bob.brown@example.com', '555-4321', 'password4');

-- Insert dummy data into user_skills table
INSERT INTO user_skills (user_id, skill, proficiency_level, experience_years)
VALUES 
(1, 'JavaScript', 'Advanced', 5),
(1, 'PHP', 'Intermediate', 3),
(2, 'Python', 'Expert', 7),
(3, 'Java', 'Intermediate', 4),
(4, 'C++', 'Beginner', 1);

-- Insert dummy data into work_history table
INSERT INTO work_history (user_id, company_name, position, start_date, end_date, responsibilities)
VALUES 
(1, 'Tech Corp', 'Software Developer', '2019-01-15', '2021-06-30', 'Developed web applications.'),
(2, 'Data Inc.', 'Data Scientist', '2018-03-01', '2020-08-15', 'Analyzed data trends.'),
(3, 'Web Solutions', 'Front-End Developer', '2020-05-20', '2023-03-10', 'Designed user interfaces.'),
(4, 'SoftWorks', 'Intern', '2021-06-01', '2021-12-31', 'Assisted in software development.');

-- Insert dummy data into education table
INSERT INTO education (user_id, institution, degree, start_date, end_date, gpa)
VALUES 
(1, 'State University', 'BSc Computer Science', '2015-09-01', '2019-05-15', 3.8),
(2, 'Tech Institute', 'MSc Data Science', '2016-09-01', '2018-06-15', 3.9),
(3, 'City College', 'BSc Information Technology', '2014-09-01', '2018-05-15', 3.7),
(4, 'Community College', 'AS Software Engineering', '2019-09-01', '2021-05-15', 3.5);

-- Insert dummy data into certifications table
INSERT INTO certifications (user_id, certification_name, issue_date)
VALUES 
(1, 'Certified JavaScript Developer', '2020-02-20'),
(2, 'Professional Data Scientist', '2019-04-15'),
(3, 'Certified Java Developer', '2021-07-30'),
(4, 'Introduction to C++', '2022-01-10');

-- Insert dummy data into projects table
INSERT INTO projects (user_id, project_name, description, start_date, end_date)
VALUES 
(1, 'Web App', 'Developed a full-stack web application.', '2019-03-01', '2019-12-31'),
(2, 'Data Analysis Tool', 'Created a tool for analyzing large datasets.', '2018-07-01', '2019-01-31'),
(3, 'E-commerce Site', 'Built a front-end for an e-commerce platform.', '2020-10-01', '2021-03-31'),
(4, 'Mobile App', 'Assisted in developing a mobile application.', '2021-07-01', '2021-12-31');