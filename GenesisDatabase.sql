DROP table if  exists user_inform, like_dislike_songs, playlist_songs, genre, survey;

create table user_inform(
Username text,
User_ID VARCHAR(5), 
primary key(User_ID)
);

create table like_dislike_songs(
User_ID VARCHAR(5),  /* if user hits this number send */ 
Song_ID VARCHAR(4), /* could this be a integer */
Song_name text, /* to print out the song name */
Artist_name text,
Album_name text, 
Genre_name text, 
Artist_ID integer, 
Album_ID integer, 
Genre_ID integer,
reaction boolean,  /* user have two options true = like or false = dislike */ 
primary key(Song_ID), 
foreign key(User_ID) references user_inform(User_ID)
); 

create table playlist_songs(
User_ID VARCHAR(5),
Song_ID VARCHAR(4),  /* could this be a integer */
Artist_ID integer,
Album_ID integer,
Genre_ID integer,  
primary key(Song_ID), 
foreign key(User_ID) references user_inform(User_ID)
);

create table genre(
User_ID VARCHAR(5),
Genre_ID integer, 
primary key(Genre_ID),
foreign key(User_ID) references user_infom(User_ID)
);

create table survey(
User_ID VARCHAR(5),
reaction boolean,  /* did the user take the survey true = yes or false = no*/
primary key(User_ID),
foreign key(User_ID) references user_inform(User_ID) 
);

INSERT INTO user_inform(User_ID, Username) VALUES
(67930, 'Serge Dominique'),
(59372, 'Kimberley DuBois');

INSERT INTO like_dislike_songs(User_ID, Song_ID, Song_Name, Artist_Name, Album_Name,Genre_Name,Artist_ID, Album_ID,Genre_ID,reaction) VALUES 
(67930, 1390, 'Needed', 'Brent Faiyaz', 'Sonder Son' , 'R&B' , 1, 18, 4, true), 
(67930, 1378, 'L.A', 'Brent Faiyaz','Sonder Son', 'R&B', 1, 18, 4, false),
(67930, 3495, 'Home Invasion', 'YNW Melly', 'I Am You','Hip-Hop', 4, 7, 76, false),
(59372, 4903, 'Chosen', 'Blood Orange', 'Cupid Deluxe', 'Alternative', 2, 20, 9, false),
(59372, 9506, 'WTS', 'PnB Rock', 'Catch These Vibes','Hip-Hop', 6, 23, 2, true);

INSERT INTO playlist_songs(User_ID, Song_ID, Artist_ID, Album_ID, Genre_ID) VALUES
(67930, 1390, 1, 18, 4),
(67930, 1378, 1, 18, 4),
(59372, 4903, 2, 20, 9),
(59372, 9506, 6, 23, 2);

INSERT INTO genre(User_ID, Genre_ID) VALUES 
(67930, 4),
(59372, 9);

INSERT INTO survey(User_ID, reaction) VALUES
(67930, true);

select * from user_inform;
select * from like_dislike_songs, user_inform;
select username, user_id, song_id from like_dislike_songs, user_inform Where reaction = false && user_id = 67930; 
select * from like_dislike_songs Where reaction = true; 
select * from playlist_songs;
select * from genre; 
select * from survey;