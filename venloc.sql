create table user1(
	UserID varchar (50),
	Fname varchar(50),
	Lname varchar(50),
	Phone varchar (50),
	Email varChar (50),
	password varchar (50),
	primary key (UserID)
);



create table vendor(
	UserID varchar(50),
	Street varchar(50),
	City varChar (50),
	primary key (UserID),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade
	);


create table customer(
	UserID varchar (50),
	primary key (UserID),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade
	);


create table Produce (
	ProID varchar (50),
	ProduceName varchar (50),
	Quantity varchar(9),
	primary key (ProId)
	);


create table supplies(
	UserID varchar(50),
	ProID varchar (50),
	Price decimal (8,2),
	ProDate date,
	primary key(UserID,ProID),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade,
	foreign key(ProID) references Produce(ProId) on update cascade on delete cascade
);



create table fruit(
	ProID varchar (50),
	primary key (ProId),
	foreign key(ProID) references Produce(ProId) on update cascade on delete cascade
);

create table Vegetable(
	ProID varchar (50),
	primary key (ProId),
	foreign key(ProID) references Produce(ProId) on update cascade on delete cascade
);

create table GroundProvision(
	ProID varchar (50),
	primary key (ProId),
	foreign key(ProID) references Produce(ProId) on update cascade on delete cascade
);


create table library (
	LibraryID varchar(50),
	Itemname varchar (50),
	primary key(LibraryID)
);

create table uses(
	UserID varchar (50),
	LibraryID varchar(50),
	primary key(UserID,LibraryID),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade,
    foreign key(LibraryID) references library(LibraryID) on update cascade on delete cascade

);






create table GPS(
	LocationID varchar (50),
	Location varChar (50),
	primary key (LocationID)
);

create table Located_via(
	UserID varchar (50),
	LocationID varchar (50),
	primary key(UserID,LocationID),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade,
	foreign key(LocationID) references GPS(LocationID) on update cascade on delete cascade
);


create table commment(
	comID varchar(50),
	Content varchar (900),
	primary key(comID)
);




create table cart (
cartId varchar(50),
CartName varchar(50),
primary key(cartId)
);

create table hasincart (
	UserID varchar (50),
	ProID varchar (50),
	cartId varchar (50),
	foreign key(UserID) references user1(UserID) on update cascade on delete cascade,
	foreign key(ProID) references Produce(ProID) on update cascade on delete cascade,
	foreign key(cartId) references cart(cartId) on update cascade on delete cascade
);

create table post (
	comID varchar (50),
	ProID varchar (50),
	rating varchar (1),
	created date,
	username varChar(50) ,
	primary key (comID,ProID),
	foreign key(comID) references commment(comID) on update cascade on delete cascade,
	foreign key(ProID) references Produce(ProID) on update cascade on delete cascade
);
