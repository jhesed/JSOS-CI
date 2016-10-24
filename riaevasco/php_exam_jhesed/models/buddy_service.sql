CREATE TABLE members (
	m_id		int(10)		unsigned	NOT NULL	auto_increment,
	
	email		varchar(40) 	NOT NULL,	
	username	varchar(25)		NOT NULL,
	password	varchar(20)		NOT NULL,
	fname		varchar(25)		NOT NULL,
	lname		varchar(25)		NOT NULL,

	birthdate	varchar(20),
	cellphone	varchar(20),
	
	PRIMARY KEY(m_id)
);

CREATE TABLE buddies (
	b_id 	int(10)		unsigned NOT NULL auto_increment,
	m_id	int(10),
	fname		varchar(25)		NOT NULL,
	lname		varchar(25)		NOT NULL,

	PRIMARY KEY(b_id),
	FOREIGN KEY(m_id) REFERENCES members(m_id)
);
