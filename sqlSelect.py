import mysql.connector
db = mysql.connector.connect(host="localhost", user=user", passwd="password", db="school")

cur = db.cursor()

sql = "SELECT * FROM students"
cur = db.cursor(dictionary=True)
cur.execute(sql)

rows = cur.fetchall()

for row in rows:
	  print(row['name'] + " " + str(row['age']) + " " + str(row['gradeLevel']))


cur.close()
db.close()  
