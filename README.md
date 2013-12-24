p4.mirinei.biz
==============

Project 4

My application allows people to gain basic knowledge about the Solar System, to
test the knowledge they gained from the application, and to create useful
questions if they want.

It's pretty easy to use this application.  In LECTURE page, people just need to
click on any of the objects shown in the page to get basic astronomical 
information about it.  In TAKING QUIZ page, users can take multiple choice
quetions and receive feedback quickly.  A data table is provided as a hint.  In
MAKING QUIZ page, people can submit interesting questions.  Once a problem is
submitted, one can test the problem immediately by him/herself.

* In Lecture page, the jQuery UI Dialog and mousedown functionalities 
(JavaScript) was used to display astronomical information of the object clicked.

* In TAKING QUIZ page, the jQuery UI Dialog and mousedown functionalities 
(JavaScript) were used to display the summary table.

* In TAKING QUIZ page, the hover, fadeIn, and fadeOut functionalities 
(JavaScript) were used on the text to be clicked.

* In TAKING QUIZ page, one problem is randomly selected from the quiz_bank
database and (correct and incorrect answer) choices will be shuffled randomly.

* In MAKING QUIZ page, people need to complete all fields.  Otherwise, they will
receive a warning.  This is first done with the "required" attribute of 
textarea.  In the unlikely event that black fields can be passed the "required"
attribute, php script will not accept it and request to complete all fields 
(via http://p4.mirinei.biz/quiz/making/error).
