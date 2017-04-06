CREATE schema dloader authorization downloader
show search_path
set search_path to dloader
-- drop schema dloader

ALTER ROLE downloader SET search_path TO dloader

ALTER TABLE dloader.downloads
    ADD COLUMN "name" varchar(100),
    ADD COLUMN "totalLength" varchar(100),
    ADD COLUMN "infoHash" varchar(100),
    ADD COLUMN "errorCode" int,
    ADD COLUMN "errorMessage" varchar(100),
    ADD COLUMN "dir" varchar(100),
    ADD COLUMN "files" varchar(100);