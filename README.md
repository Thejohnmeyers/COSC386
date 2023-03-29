# COSC386

Job Fair Database

<div align="center">
<img src="database.png" alt="Welcome Screen" width="600" height="300">
</div>


Description:
This database will keep track of all of the companies that will be at job fairs within
Salisbury's campus. This database will also track what jobs each company is offering and the
majors that they are hiring. We will be implementing a LAMP(Linux, Apache, MySQL, PHP)
database for companies, the jobs and majors they are hiring. Our database’s customers would be
career services at Salisbury so they can have a database that they can send out to students instead
of making an excel sheet for every job fair. But besides career services our database will also aim
to assist the companies at every job fair by making an easily accessible database that will assist
students in finding a company that would fit their needs. If a company wants to provide contact
information so that students can reach them easier we will allow the company to provide that and
will display it alongside their jobs they are hiring. As of right now alot of marketing and
advertisements are made for each job fair but the students don't know for sure if they want to
attend because the companies and the jobs they offer aren’t readily available until a few days
prior to the job fair. Our database will work to help the students and lessen the advertisements
needed per job fair because as the companies RSVP for the job fair they can be added to the
database and help students to realize if they want to attend or not.
We will create an admin login for the database that allows anyone who has access to will
be able to adjust a company's data, any of the data for the job fair, and add or remove companies
from the job fair. It is important to keep the interface clean so that the job fairs data and the
company’s data can be clearly visualized so that students will be able to access the data easily. If
the data isn’t easily viewable by the students or modifiable by the admins then it is likely that
both parties will find it easier to just revert back to the old ways of sending out the data(i.e.
Spreadsheets and excel). For a few other excess features we will keep track of student
participation and are hopeful to be able to include a section for student feedback as well as
company feedback so that career services will be able to look at the feedback and improve the
job fair year after year. Overall we are hoping that our job fair database will be a powerful and
useful tool for the job seekers and companies to be able to easily access and manage job
information. We believe that by centralizing this data all into one place it will streamline thepdf
recruitment process and help to ensure the job fair is a success for all involved.


Group Members:
John Meyers
Gavin Beauchamp
Sean Berndlmaier
Luke Scott

Dr. Jing
COSC 386-001
2/28/2023


Requirements:
The database is centered around the Company entity set.
For each company, we will record the name of the company as well as the address.
Connected to the Company entity set will be 3 more entity sets (Job Fair, Contact Info, and Job
Post) to help keep specific details of each company for students to access.
Job Fair will hold information from past Job Fairs, (date, location).
Contact Info will be available for students to get into contact with a select company or their
representative if applicable. This entity set will keep track of phone number, email, social
media, and websites of the company.
Job Post will be a weak entity set, supported by Company through the Offers relation. The
database will hold information about jobs available (job id, title, salary, hours/flexibility,
requirements, major hiring, and work mode {in-person, hybrid, remote}).
There will be two subclasses underneath Job Post. Fulltime, will keep track of benefits and
Internship will keep track of time frame.


Relationship Schema:
Company (Name, Address);
Job Fair (Date, Location);
Contact Info (Phone Number, Email, Social Media, Website);
Job Post ( Major, Job Id, Job Mode, Requirements, Title, Salary, Hours, Cname, Caddress
F.K. (Cname, Caddress) references Company (Name, Address));
Full-Time (Benefits, Major, Job Id, Job Mode, Cname, Caddress
F.K. (Major, Job Id, Job Mode) references Job Post (Major, JobID, Job Mode)
F.K (Cname, Caddress) references Company (Name, Address));
Internship (Time Frame, Major, Job Id, Job Mode, Cname, Caddress
F.K. (Major, Job Id, Job Mode) references Job Post (Major, JobID, Job Mode)
F.K (Cname, Caddress) references Company (Name, Address));
Attended (Date, Location, Cname, Caddress
F.K. (Date, Location) references Job Fair (Date, Location)
F.K. (Cname, Caddress) references Company (Name, Address));
Has (Phone Number, Email, Cname, Caddress
F.K. (Phone Number, Email) references Contact Info (Phone Number, Email)
F.K. (Cname, Caddress) references Company(Name, Address));

