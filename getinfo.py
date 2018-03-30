#!/usr/bin/python
import sys
def addrom():
	user = sys.argv[1];
	from pymongo import MongoClient
	user = user + "address"
	client = MongoClient('localhost:27017',
	username='root',
	password='itsatrap',
	authSource='admin',
	authMechanism='SCRAM-SHA-1')

	db = client.userroms
	dubcheck = db[user].find({},{"_id" : 0})
	i = 0
	d = ""
	for duplicate in dubcheck:
		s = str(duplicate["address"])
		s = s[2:]
		s = s.replace("[", "")
		s = s.replace("]", "")
		s = s.replace("'", "")
		d += "<tr><td>Current account:</td><td>" + s + "</td></tr>"
	print d



addrom()
