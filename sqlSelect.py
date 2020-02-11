import mysql.connector
db = mysql.connector.connect(host="192.168.0.131", user="matuye21", passwd="uyezu", db="matuye21")

cur = db.cursor()

sql = "SELECT * FROM students"
cur = db.cursor(dictionary=True)
cur.execute(sql)

rows = cur.fetchall()

for row in rows:
	  print(row['name'] + " " + str(row['age']) + " " + str(row['gradeLevel']))


cur.close()
db.close()  
