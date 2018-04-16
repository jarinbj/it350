require "mysql"    # if needed

@db_host  = "localhost"
@db_user  = "root"
@db_pass  = "itsatrap"
@db_name = "coolroms"

begin
	db = Mysql.real_connect("localhost", "root", "itsatrap", "coolroms")
rescue
puts "false"
exec("python logsqlfailure.py false")
end
puts "true"
exec("python logsqlfailure.py true")
