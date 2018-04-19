#!/usr/bin/python
import os
import sys
import datetime
status = sys.argv[1]
date = str(datetime.date.today())
#date = date.replace(".", " ")
string = "curl -XPOST 'http://localhost:9200/status/doc?pretty&pretty' -H 'Content-Type: application/json' -d '{\"status\" : \"" + status + "\",\"date\" : \"" + date + "\"}'"
date = date.replace(" ","")
os.system("curl -XPOST 'http://localhost:9200/status/doc?pretty&pretty' -H 'Content-Type: application/json' -d '{\"status\" : \"" + status + "\",\"date\" : \"" + date + "\"}'")
