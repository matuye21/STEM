import mysql.connector
db = mysql.connector.connect(host="192.168.0.131", user="matuye21", passwd="uyezu", db="matuye21")
#create cursor
cursor = db.cursor()

cur = db.cursor(dictionary=True)

name='Gabe'
age = 15
grade = 11
#create table as per requirement
sql = "INSERT INTO students (name, age, gradeLevel) VALUES ('Gabe', 15, 11)"

cur.execute(sql)

#rows = cur.fetchall()
sql = "SELECT * FROM students"

cur.execute(sql)

rows = cur.fetchall()

for row in rows:
    print(row['name'] + " " + str(row['age']) + " " + str(row['gradeLevel']))

db.close()
cursor.close()
