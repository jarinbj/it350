#!/usr/bin/python
import sys
def addrom():
	address = sys.argv[1];
	user = sys.argv[2];
	from pymongo import MongoClient

	client = MongoClient('localhost:27017',
	username='root',
	password='itsatrap',
	authSource='admin',
	authMechanism='SCRAM-SHA-1')

	db = client.userroms

	dubcheck = db[user].find({"address" : [address]})
	i = 0
	for duplicate in dubcheck:
		if i == 0:
			return 1
		i = i + 1



	db[user].insert_one({"address": [address]})

	return 0



print addrom()
