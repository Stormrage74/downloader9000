CREATE schema dloader authorization downloader
show search_path
set search_path to dloader
-- drop schema dloader

ALTER ROLE downloader SET search_path TO dloader