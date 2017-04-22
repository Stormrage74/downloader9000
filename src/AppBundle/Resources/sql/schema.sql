CREATE DATABASE dbloader
 create role downloader WITH PASSWORD 'Down9loader0' LOGIN
CREATE schema loader authorization downloader
show search_path
set search_path to loader
-- drop schema loader

ALTER ROLE downloader SET search_path TO loader

