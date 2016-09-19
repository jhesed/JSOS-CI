CREATE TABLE songs (
	id			int(5)		unsigned	NOT NULL	auto_increment,
	title		varchar(50)	NOT NULL,
	vocalist		varchar(100),
	composer	varchar(50),
	genre		varchar(50),
	category		varchar(50),
    arranger    varchar(50) default NULL,
    instrumentalists    text default NULL,
    video_presentation  varchar(50),
    youtube_code    text,
    lyrics  text,
	featured	int(1) default 0,
	PRIMARY KEY(id)
);

INSERT INTO songs (title, vocalist, composer, genre, 
    category, arranger, video_presentation, 
    youtube_code, lyrics) 
    
    VALUES('Ititik Mo',
    'Ronald Bolesa, Aileen Blanca, Romeo Alkuino, Zisa Blanca, Lovely Lucero',
    'Jose Tacadena', 'Digital', 
    'Theme song: Bible Art Parade',
    'Jhesed Tacadena',
    'Hannah Tanlangco', 
    'OhaSnhcLC-E',
    
    "Pinagpala Mo ang sangkatauhan <br/>
    Ng Iyong ipasulat ang Iyong Salita <br/>
    Kinasihan Mo mga pili Mong tauhan <br/>
    Sa pagsulat ng kamangha-mangha Mong Diwa <br/><br/>
    
    Ngayon nga ang Salita Mo'y nababasa na <br/>
    Bawat titik ay may himalang halina <br/>
    Nagbabago ng puso, nagpapanday ng buhay <br/>
    Sa tamang landasin tunay na gabay <br/><br/>
    
    Ititik Mo po Salita Mo sa puso namin <br/>
    Aklat Mo sa puso nami'y sisipiin <br/>
    Sa gayon ngalan Mo'y tatatak sa aming gawain <br/>
    Mga buhay na liham Mo kami'y tatawagin <br/>
    ");  

    
INSERT INTO songs (title, vocalist, composer, genre, 
    category, instrumentalists, 
    video_presentation, youtube_code, lyrics)
 VALUES("Sa'Yo Ako'y Mag-aalay",
    'Aileen Blanca, Zisa Blanca',
    'Jose Tacadena', 
    'Solemn', 
    'Offering Song',
    'Keyboard: Ronald Bolesa', 
    'Hannah Tanlangco',
    'joLvJ4NyKKc',
    
    "Sa'Yo ako'y mag-aalay <br/>
    PPagpapalang 'Yong binigay <br/>
    Lahat nama'y pag-aari Mo <br/>
    Katiwala lamang ako <br/><br/>
    
    Ikaw ang Diyos na mapagbigay <br/>
    Sinakripisyo Mo ang Iyong buhay <br/>
    Kaya naman ako rin ay mag-aalay <br/>
    Munting handog sa'Yong kamay <br/><br/>
    
    Lahat ng tinatamasa <br/> 
    Sa'Yong biyaya nagmula <br/>
    Oras, lakas, yama't talino <br/>
    Katiwala lamang ako <br/>"  
    );
    
    
INSERT INTO songs (title, vocalist, composer, genre,
    category, video_presentation, youtube_code, lyrics) 
    VALUES('RIP (Rest in Praise)',
    'Jhesed Tacadena, Aileen Blanca',
    'Jhesed Tacadena', 'Digital', 
    'Theme song: November 2011 PraiseFest',
    'Hannah Tanlangco',
    '2_MhtAlmzpY',
    
    "
    I. <br/>
    Napapagod ka na ba? <br/>
    Sa iyong pagtakbo <br/>
    Hinihingal ka na ba? <br/>
    Sundalo ni Kristo <br/><br/>

    II. <br/>
    Nadarama mo ba? <br/>
    Ang hapdi ng mga sugat <br/>
    Na nakagugulat, 'di masukat <br/>
    Kahit ika'y tapat <br/><br/>

    III. <br/>
    Tubig ng presensya Niya <br/>
    Ang 'yong kailangan <br/>
    Inumin mo na't damhin <br/>
    Ang Kanyang kalakasan <br/><br/>

    IV. <br/>
    'Pagkat papuri <br/>
    Ang 'yong panlaban <br/>
    Sa lahat ng pagod <br/>
    Na 'yong nararanasan <br/><br/>

    KORO: <br/>
    RIP! Rest in Praise! <br/>
    Habang sumasamba, ika'y mamamangha <br/>
    RIP! Rest in Praise! <br/>
    At bawat pagod mo ay mawawala <br/><br/>

    V. <br/>
    'Pagkat ang papuri <br/>
    Ay nagbubunga <br/>
    Ng lakas, <br/>
    At kakaibang saya <br/> <br/>

    VI. <br/>
    Tititigil ang mundo <br/>
    Habang sumasamba <br/>
    Kaluwalhatian ng Diyos<br/>
    Ay makikita nila<br/>
    ");    
	
	    
INSERT INTO songs (title, vocalist, composer, genre,
    category, video_presentation, instrumentalists, youtube_code, featured, lyrics) 
    VALUES('Storms will Cease',
    'Jehannah Tacadena, Aileen Blanca, Zisa Blanca',
    'Jose Tacadena', 'Solemn', 
    'Calamity',
    'Jehannah Tacadena',
	'(Guitar) Jhesed Tacadena',
    'awlsD5HvEaA',
	1,
    
	"
	All storms will be ceasing <br/>
	The sun will be shining <br/>
	Trials and problems will be gone <br/>
	The journey's peaceful in God's Son <br/><br/>
	
	All floods will be dissipating <br/>
	The grounds will be appearing <br/>
	Life's trials will be overcome <br/>
	God's grace for us is just awesome <br/><br/>
	
	When travelling with Jesus <br/>
	Salvation is enormous <br/>
	He's our Rock and Redeemer <br/>
	He's trustworthy forever <br/>	
    ");    
	
	
	    
INSERT INTO songs (title, vocalist, composer, genre,
    category, video_presentation, instrumentalists, youtube_code, lyrics) 
    VALUES('Matatapos ang Bagyo',
    'Jehannah Tacadena',
    'Jose Tacadena', 'Solemn', 
    'Calamity',
    'Jehannah Tacadena',
	'(Guitar) Jhesed Tacadena',
    'MazfZ1R6AAk',
    
	"
	Matatapos ang bagyo <br/>
	Araw ay magliliwanag <br/>
	Problema'y maglalaho <br/>
	Papanatag ang paglalayag <br/><br/>
	
	Mawawala rin ang baha <br/>
	Makikita muli ang lupa <br/>
	Pagsubok tatalunin <br/>
	Biyaya Niya ay kakamtin <br/><br/>
	
	'Pag kasama ay si Kristo <br/>
	Ligtas ang buhay mo <br/>
	Siya ang moog at sandigan <br/>
	Maasahan kailanman <br/>	
    ");    
    
    
INSERT INTO songs (title, vocalist, composer, genre,
    category, video_presentation, instrumentalists, youtube_code, lyrics) 
    VALUES('Sumuko na Tayo',
    'Ronald Bolesa',
    'Jose Tacadena', 'Solemn', 
    'Independence Day',
	'(Guitar) Chester Bayobo',
    'fitomYhxbS8',
    
	"	
    ");    
    