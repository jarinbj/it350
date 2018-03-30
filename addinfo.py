#!/usr/bin/python
import sys
def addrom():
	address = sys.argv[1];
	user = sys.argv[2];
	from pymongo import MongoClient
	user = user + "address"
	client = MongoClient('localhost:27017',
	username='root',
	password='itsatrap',
	authSource='admin',
	authMechanism='SCRAM-SHA-1')
	
	db = client.userroms
	db[user].remove({})
	i = 0
	db[user].insert_one({"address": [address]})

	return 0



print addrom()
