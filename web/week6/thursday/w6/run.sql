-- DROP
DROP TABLE w6_comment;
DROP TABLE w6_note;
DROP TABLE w6_course;
DROP TABLE w6_student;

-- CREATE
CREATE TABLE w6_course
( id     SERIAL      PRIMARY KEY     NOT NULL
, name   VARCHAR(80)                 NOT NULL
, number VARCHAR(10)                 NOT NULL UNIQUE
);

CREATE TABLE w6_student
( id   SERIAL        PRIMARY KEY     NOT NULL
, name VARCHAR(100)                  NOT NULL UNIQUE
);

CREATE TABLE w6_note
( id         SERIAL   PRIMARY KEY    NOT NULL
, course_id  INT                     NOT NULL REFERENCES w6_course(id)
, student_id INT                     NOT NULL REFERENCES w6_student(id)
, title      TEXT                    NOT NULL
, content    TEXT                    NOT NULL
, date       DATE                    NOT NULL
, time       TEXT                    NOT NULL
);

CREATE TABLE w6_comment
( id           SERIAL   PRIMARY KEY  NOT NULL
, student_id   INT                   NOT NULL REFERENCES w6_student(id)
, note_id      INT                   NOT NULL REFERENCES w6_note(id)
, content      TEXT                  NOT NULL
, date         DATE                  NOT NULL
, time         TEXT                  NOT NULL
);

INSERT INTO w6_course(name, number) VALUES ('Web Engineering II'              , 'CS 313' );
INSERT INTO w6_course(name, number) VALUES ('Object-oriented Programming'     , 'CS 165' );
INSERT INTO w6_course(name, number) VALUES ('Programming Building Blocks'     , 'CSE110' );
INSERT INTO w6_course(name, number) VALUES ('Programming with Functions'      , 'CSE111' );
INSERT INTO w6_course(name, number) VALUES ('JavaScript Language'             , 'CSE121B');
INSERT INTO w6_course(name, number) VALUES ('Programming with Classes'        , 'CSE210' );
INSERT INTO w6_course(name, number) VALUES ('Programming with Data Structures', 'CSE212' );
INSERT INTO w6_course(name, number) VALUES ('Applied Programming'             , 'CSE310' );

INSERT INTO w6_student(name) VALUES ('Emma');
INSERT INTO w6_student(name) VALUES ('Olivia');
INSERT INTO w6_student(name) VALUES ('Ava');
INSERT INTO w6_student(name) VALUES ('Isabella');
INSERT INTO w6_student(name) VALUES ('Sophia');
INSERT INTO w6_student(name) VALUES ('Charlotte');
INSERT INTO w6_student(name) VALUES ('Mia');
INSERT INTO w6_student(name) VALUES ('Amelia');
INSERT INTO w6_student(name) VALUES ('Harper');
INSERT INTO w6_student(name) VALUES ('Evelyn');
INSERT INTO w6_student(name) VALUES ('Abigail');
INSERT INTO w6_student(name) VALUES ('Emily');
INSERT INTO w6_student(name) VALUES ('Elizabeth');
INSERT INTO w6_student(name) VALUES ('Mila');
INSERT INTO w6_student(name) VALUES ('Ella');
INSERT INTO w6_student(name) VALUES ('Avery');
INSERT INTO w6_student(name) VALUES ('Sofia');
INSERT INTO w6_student(name) VALUES ('Camila');
INSERT INTO w6_student(name) VALUES ('Aria');
INSERT INTO w6_student(name) VALUES ('Scarlett');
INSERT INTO w6_student(name) VALUES ('Victoria');
INSERT INTO w6_student(name) VALUES ('Madison');
INSERT INTO w6_student(name) VALUES ('Luna');
INSERT INTO w6_student(name) VALUES ('Grace');
INSERT INTO w6_student(name) VALUES ('Chloe');
INSERT INTO w6_student(name) VALUES ('Penelope');
INSERT INTO w6_student(name) VALUES ('Layla');
INSERT INTO w6_student(name) VALUES ('Riley');
INSERT INTO w6_student(name) VALUES ('Zoey');
INSERT INTO w6_student(name) VALUES ('Nora');
INSERT INTO w6_student(name) VALUES ('Lily');
INSERT INTO w6_student(name) VALUES ('Eleanor');
INSERT INTO w6_student(name) VALUES ('Hannah');
INSERT INTO w6_student(name) VALUES ('Lillian');
INSERT INTO w6_student(name) VALUES ('Addison');
INSERT INTO w6_student(name) VALUES ('Aubrey');
INSERT INTO w6_student(name) VALUES ('Ellie');
INSERT INTO w6_student(name) VALUES ('Stella');
INSERT INTO w6_student(name) VALUES ('Natalie');
INSERT INTO w6_student(name) VALUES ('Zoe');
INSERT INTO w6_student(name) VALUES ('Leah');
INSERT INTO w6_student(name) VALUES ('Hazel');
INSERT INTO w6_student(name) VALUES ('Violet');
INSERT INTO w6_student(name) VALUES ('Aurora');
INSERT INTO w6_student(name) VALUES ('Savannah');
INSERT INTO w6_student(name) VALUES ('Audrey');
INSERT INTO w6_student(name) VALUES ('Brooklyn');
INSERT INTO w6_student(name) VALUES ('Bella');
INSERT INTO w6_student(name) VALUES ('Claire');
INSERT INTO w6_student(name) VALUES ('Skylar');
INSERT INTO w6_student(name) VALUES ('Liam');
INSERT INTO w6_student(name) VALUES ('Noah');
INSERT INTO w6_student(name) VALUES ('William');
INSERT INTO w6_student(name) VALUES ('James');
INSERT INTO w6_student(name) VALUES ('Oliver');
INSERT INTO w6_student(name) VALUES ('Benjamin');
INSERT INTO w6_student(name) VALUES ('Elijah');
INSERT INTO w6_student(name) VALUES ('Lucas');
INSERT INTO w6_student(name) VALUES ('Mason');
INSERT INTO w6_student(name) VALUES ('Logan');
INSERT INTO w6_student(name) VALUES ('Alexander');
INSERT INTO w6_student(name) VALUES ('Ethan');
INSERT INTO w6_student(name) VALUES ('Jacob');
INSERT INTO w6_student(name) VALUES ('Michael');
INSERT INTO w6_student(name) VALUES ('Daniel');
INSERT INTO w6_student(name) VALUES ('Henry');
INSERT INTO w6_student(name) VALUES ('Jackson');
INSERT INTO w6_student(name) VALUES ('Sebastian');
INSERT INTO w6_student(name) VALUES ('Aiden');
INSERT INTO w6_student(name) VALUES ('Matthew');
INSERT INTO w6_student(name) VALUES ('Samuel');
INSERT INTO w6_student(name) VALUES ('David');
INSERT INTO w6_student(name) VALUES ('Joseph');
INSERT INTO w6_student(name) VALUES ('Carter');
INSERT INTO w6_student(name) VALUES ('Owen');
INSERT INTO w6_student(name) VALUES ('Wyatt');
INSERT INTO w6_student(name) VALUES ('John');
INSERT INTO w6_student(name) VALUES ('Jack');
INSERT INTO w6_student(name) VALUES ('Luke');
INSERT INTO w6_student(name) VALUES ('Jayden');
INSERT INTO w6_student(name) VALUES ('Dylan');
INSERT INTO w6_student(name) VALUES ('Grayson');
INSERT INTO w6_student(name) VALUES ('Levi');
INSERT INTO w6_student(name) VALUES ('Isaac');
INSERT INTO w6_student(name) VALUES ('Gabriel');
INSERT INTO w6_student(name) VALUES ('Julian');
INSERT INTO w6_student(name) VALUES ('Mateo');
INSERT INTO w6_student(name) VALUES ('Anthony');
INSERT INTO w6_student(name) VALUES ('Jaxon');
INSERT INTO w6_student(name) VALUES ('Lincoln');
INSERT INTO w6_student(name) VALUES ('Joshua');
INSERT INTO w6_student(name) VALUES ('Christopher');
INSERT INTO w6_student(name) VALUES ('Andrew');
INSERT INTO w6_student(name) VALUES ('Theodore');
INSERT INTO w6_student(name) VALUES ('Caleb');
INSERT INTO w6_student(name) VALUES ('Ryan');
INSERT INTO w6_student(name) VALUES ('Asher');
INSERT INTO w6_student(name) VALUES ('Nathan');
INSERT INTO w6_student(name) VALUES ('Thomas');
INSERT INTO w6_student(name) VALUES ('Leo');


INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (6, 28, 'Note for test 1', 'What is Lorem Ipsum?', '03/03/2019', '02:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (6, 91, 'Note for test 2', 'Lorem Ipsum is simply dummy text of the printing', '03/04/2019', '03:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 81, 'Note for test 3', 'and typesetting industry. Lorem Ipsum has been', '03/05/2019', '05:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (7, 28, 'Random note from class ', 'the industrys standard dummy text ever since the', '03/06/2019', '12:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (3, 10, 'Random note from class about databases', '1500s, when an unknown printer took a galley of', '03/07/2019', '02:03:33');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (8, 23, 'Stuff about php', 'type and scrambled it to make a type specimen book.', '03/08/2019', '03:03:00');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (3, 55, 'More php', 'It has survived not only five centuries, but also', '03/09/2019', '05:03:23');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (8, 33, 'Seriously, php', 'the leap into electronic typesetting, remaining essentially unchanged.', '03/10/2019', '12:03:16');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (4, 95, 'Note for test 1', 'It was popularised in the 1960s with the release of', '03/11/2019', '02:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (5, 49, 'Note for test 2', 'Letraset sheets containing Lorem Ipsum passages, and more recently with', '03/12/2019', '03:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (3, 17, 'Note for test 3', 'desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '03/13/2019', '05:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (4, 81, 'Random note from class ', 'Why do we use it?', '03/14/2019', '12:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (4, 20, 'Random note from class about databases', 'It is a long established fact that a reader will be distracted', '03/15/2019', '02:03:33');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 19, 'Stuff about php', 'by the readable content of a page when looking at its layout. The', '03/16/2019', '03:03:00');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 72, 'More php', 'point of using Lorem Ipsum is that it has a more-or-less normal', '03/17/2019', '05:03:23');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 36, 'Seriously, php', 'distribution of letters, as opposed to using Content here, content here,', '03/18/2019', '12:03:16');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (8, 99, 'Note for test 1', 'making it look like readable English. Many desktop publishing packages', '03/19/2019', '02:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (2, 3, 'Note for test 2', 'and web page editors now use Lorem Ipsum as their default model text, and a search for', '03/20/2019', '03:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 68, 'Note for test 3', 'lorem ipsum will uncover many web sites still in their infancy. Various versions', '03/21/2019', '05:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (3, 89, 'Random note from class ', 'have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '03/22/2019', '12:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (6, 71, 'Random note from class about databases', 'Where does it come from?', '03/23/2019', '02:03:33');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (3, 58, 'Stuff about php', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has', '03/24/2019', '03:03:00');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (7, 8, 'More php', 'roots in a piece of classical Latin literature from 45 BC, making it over', '03/25/2019', '05:03:23');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 3, 'Seriously, php', '2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney', '03/26/2019', '12:03:16');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (7, 25, 'More php', 'College in Virginia, looked up one of the more obscure Latin words, consectetur,', '03/27/2019', '02:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (1, 79, 'Seriously, php', 'from a Lorem Ipsum passage, and going through the cites of the word in', '03/28/2019', '03:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (5, 57, 'Note for test 1', 'classical literature, discovered the undoubtable source. Lorem Ipsum comes', '03/29/2019', '05:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (5, 42, 'Note for test 2', 'rom sections 1.10.32 and 1.10.33 of de Finibus Bonorum et Malorum (The Extremes of Good and Evil)', '03/30/2019', '12:03:04');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (5, 19, 'Note for test 3', 'by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular', '03/31/2019', '02:03:33');
INSERT INTO W6_note (course_id, student_id, title, content, date, time) VALUES (6, 26, 'Random note from class ', 'during the Renaissance. The first line of Lorem Ipsum, Lorem ipsum dolor sit amet.., comes from a line in section 1.10.32.', '04/01/2019', '03:03:00');