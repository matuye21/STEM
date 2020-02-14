import mysql.connector

mydb = mysql.connector.connect(host="localhost", user="user", passwd="password", db="school")

mycursor = mydb.cursor()

name='Gabe'
age = 15
grade = 11
sql = "INSERT INTO students (name, age, gradeLevel) VALUES ('Gabe', 15, 11)"

mycursor.execute(sql)

mydb.commit()

print(mycursor.rowcount, "record inserted.")