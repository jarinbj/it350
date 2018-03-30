#!/usr/bin/python
import sys
import json
def getroms():
	user = sys.argv[1];
	from pymongo import MongoClient

	client = MongoClient('localhost:27017',
	username='root',
	password='itsatrap',
	authSource='admin',
	authMechanism='SCRAM-SHA-1')
	d = ""
	db = client.userroms
	dubcheck = (db[user].find({},{"_id" : 0}))
	for duplicate in dubcheck:
		s = str(duplicate["romname"])
		s = s[2:]
		s = s.replace("[", "")
		s = s.replace("]", "")
		s = s.replace("'", "")
		d += "<tr>" + "<td>" + s + "</td><td><button type=" + "'button'" + ">Download</button></td></tr>"
	print d


getroms()
