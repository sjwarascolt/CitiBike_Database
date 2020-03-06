MySQL Database Project.
Created by: Peyton Waterman, Bryant Pinto, and Sergio Hernandez

Go to this website to test out the program using SQL commands: http://blue.cs.sonoma.edu/~bpinto/1/PBSProject.php

What to expect: The link to the website provided my be disfunctional due to the age of the url.
		If this is the case look at the PBSProject.php file to understand the backend 
		used for linking MySQL and the data to the website.

1. The data used in this project is provided by the city of New York keeping track of different statistics in regards to
   the use of their public bike transportation system. The Citi Bike data for every month starting September 2013 is freely 
   available to download on https://www.citibikenyc.com/system-data.

2. The data my team used is located in 201809-citibike-tripdate.csv.zip located on their website.

3.   The following is my team's strategy for normalizing the data provide:
	Our strategy for normalization started with looking at the data and finding the functional dependencies with the 
	given relation. After finding all of the the functional dependencies we worked through all of them to discard any 
	repetition by breaking it down into canonical form. After getting the canonical form of all of the dependencies we 
	moved on to putting the FD’s into tables by decomposition. To check that our tables were correct, we started working 
	on implementing our tables with the given queries to check if the tables needed to be reworked. 

4. The following are challenges my team faced during the implementation of this project:
	Challenges we faced as a group were figuring out how to connect our PHP functions to the database, working on the 
	queries in order to get a proper output, and decomposing our tables into 3NF. Ways that we have overcome these 
	challenges were by working together on researching for solutions to connect to the database, submitting questions on Piazza 
	for peer help, and by going to office hours to get a better understanding on certain topics such as how to properly decompose 
	functional dependencies into 3NF and not forgetting that the key to the relation gets its own table. 

5. The DROP command in MySQL is disabled on our website to avoid any disruption of usable data provided.

