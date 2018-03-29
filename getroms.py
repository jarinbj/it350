#!/usr/bin/python
import sys
import json
def addrom():
	user = sys.argv[1];
	from pymongo import MongoClient

	client = MongoClient('localhost:27017',
	username='root',
	password='itsatrap',
	authSource='admin',
	authMechanism='SCRAM-SHA-1')

	db = client.userroms

	dubcheck = list(db[user].find({},{"_id" : 0}))
	dubcheck = json.dumps(dubcheck)
	return dubcheck



print addrom()
