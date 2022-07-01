# PRE-REQUISITE: To get started with this project.
1. You must be acquainted with the tools below .
>>XAMPP control panel.
>>>Visual Studio Code Text Editor.

## CREATE A DATABAE
1. navigate to your browser i prefer you use `` google chrome ``.
2. type `` localhost/phpmyadmin ``
3. Then create a database called `` database_search `` .

### On the sql page in the localhost/phpmyadmin, to create the TABLE needed for this project .
1. type the code below on the sql page
CREATE TABLE articles (
		a_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    	a_title text not null,
    	a_text text not null ,
    	a_author varchar(256) not null,
    	a_date datetime not null
);

## To insert data into the table columns 
1. type the code below on the sql page.

INSERT INTO `articles` (`a_title`, `a_text`, `a_author`, `a_date`) VALUES(`Nine ways to become rich.`,`which involves focusing ,deligence,relationship,programming etc.`,`Admin`,`2022-06-30 06:44:20`);


INSERT INTO `articles` (`a_title`, `a_text`, `a_author`, `a_date`) VALUES(`Most recent humans on earth to become rich.`,`which involves ,Alpheus Godswill Umanah ,Alpheus Umanah,Alphi,excercising etc.`,`Alpheus_Godswill`,`2022-05-30 07:34:20`);

INSERT INTO `articles` (`a_title`, `a_text`, `a_author`, `a_date`) VALUES(`How to take quality pictures and look nice in them.`,`which involves ,steady hands on camera,confidence of the photographer,smiling at the camera etc.`,'Admin_rep',`2021-03-02 08:21:10`);


