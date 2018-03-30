#!/usr/bin/python
import sys
def addrom():
	user = sys.argv[1];
	from pymongo import MongoClient

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
		d += "<tr>" + "<td>" + s + "</td><td><button type=" + "'button' id = '" + s + "'" + ">remove address</button></td></tr>"
	print d



addrom()
