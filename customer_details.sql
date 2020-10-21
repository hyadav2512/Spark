CREATE TABLE 'customer_details'(
'account_number integer(20) NOT NULL,
'first_name' varchar(20),
'last_name' varchar(20),
'email_id' varchar(30),
'mobile_number' varchar(10),
'location' varchar(25),
'current_balance' integer(20)
)
INSERT INTO 'customer_details'('account_number','first_name','last_name','email_id','mobile_number','location','current_balance')
VALUES('1234567','palak','singh','palaksingh@gmail.com','0123456789','delhi','34567'),
VALUES(''234567','janvi','yadav','janviyadav@gmail.com','1234567890','noida','16970'),
VALUES('4567890','Krishna','yadav','kyadav@gamil.com','6666777777','Noida','928742'),
VALUES('9992345','Sachin','singh','singhsachin@gmail.com','5656564343','Ghaziabad','87000')
VALUES('3243564','Simar,'sharma','simarsharma@gmail.com','6754674500','Delhi','10000')
VALUES('4500000','komal','singh','komalsingh@gamil.com','2323454599','Noida','3400'),
VALUES('8769025','Sumit','kumar','sumitkumar@gmail.com','5656556900','Noida','4500'),
VALUES('5656000','Sarthak','kumar,'sarthakumar@gmail.com','890000000','Delhi','30000'),
VALUES('Aditya','sharma','adityasharma@gmail.com','5678567800','Ghaziabad','20708'),
VALUES('5600050','Kunal','singh','kunalsingh@gmail.com','60000','70000');
)