# cpsc455

Cirjeffrey Baldomero
cirjeffrey@csu.fullerton.edu
894395060

Bank Account Web Application

The purpose of this application is to allow the login of a user which directs them to a page that displays their bank account info. 
Through this page, the user can withdraw, deposit or transfer money to their other accounts. Should the user not have a login, they may 
create one using the sign up page.

User data is collected and store in a text file. Reading and writing data uses json strings in order to allow correct parsing. Data is read into a json array during initialization. When a login is attempted, the user and password are checked against the array to see if the account exists and if the data matches.

The main method of defense I would like to implement is to scrape any input from the user and run it through a santizer checker that detects if any malicious code (scripts and other unwanted inputs) is added. Should the checker detect anything suspicious, it would run a function that would either delete or change the input to make it harmless. 


Issues I ran into:

I ran into a lot of problems trying to get the data from the text file to be usable as a data structure. Getting the user input data to be authenticated against my textfile was also somewhere i got stuck so in the end, i was unable to get to fully complete the assignment.
