#!/usr/bin/python
import os;
import shutil

os.system("mysqldump coolroms --password=itsatrap --user=root --single-transaction > /var/www/html/mysqlbackup.sql")
shutil.rmtree("/var/www/html/mongodbbackup")
os.system("mongodump -o /var/www/html/mongodbbackup -u root -p itsatrap --authenticationDatabase admin")
