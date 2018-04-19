#!/usr/bin/python
import os;
result = os.system("curl -XGET 'http://localhost:9200/_cluster/health?pretty=true'")

print result
