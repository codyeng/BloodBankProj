create table Donor_Data (
ID int not null unique, #Donor ID
Name varchar(100) not null unique,
PhoneNumber varchar(100) default null,
Address varchar(100) default null,
ssn varchar(100) default null,
birthdate datetime default null,
bloodtype varchar(50) not null,
primary key(Name,ID)
);

create table Blood_Bank (
BloodBank varchar(100) default null,
Address varchar(100) not null,
PhoneNumber varchar(100) not null,
DonorNames varchar(100) not null,
primary key(Address,DonorNames),
constraint bloodName foreign key(DonorNames) references Donor_Data(Name) on delete cascade
);

create table Patient_Data (
ID int not null, #patient ID
Name varchar(100) default null,
PhoneNumber varchar(100) default null,
Address varchar(100) default null,
ssn varchar(100) default null,
birthdate datetime default null,
bloodtype varchar(50) default null,
primary key(ID)
);

create table Blood_Data (
BloodType varchar(50) not null,
Disease varchar(100) not null,
BID int not null,
primary key(BID),
constraint BloodID foreign key(BID) references Donor_Data(ID) on delete cascade
);
