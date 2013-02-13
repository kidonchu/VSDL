CREATE TABLE logs (
   	id 		BIGINT      	NOT NULL auto_increment,
    	time		TIMESTAMP   	NOT NULL,
    	log 		TEXT        	NOT NULL,
	category	VARCHAR(255)	NOT NULL,
	PRIMARY KEY (id)
);
