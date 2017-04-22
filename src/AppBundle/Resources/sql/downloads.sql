create table downloads
(
	id SERIAL PRIMARY KEY,
    gid VARCHAR NOT NULL
)

ALTER TABLE loader.downloads
    ADD COLUMN "name" varchar(100),
    ADD COLUMN "totalLength" varchar(100),
    ADD COLUMN "infoHash" varchar(100),
    ADD COLUMN "errorCode" int,
    ADD COLUMN "errorMessage" varchar(100),
    ADD COLUMN "dir" varchar(100),
    ADD COLUMN "files" varchar(100);

    
insert into downloads values 
    ( 0,
    '000test000',
    'cestuntest',
    '89', 
    'infohash', 
    000, 'errormessage', 'exemple/dir/',
    'nomdufichier.iso' 
    )