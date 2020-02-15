import mysql.connector

mydb = mysql.connector.connect(host="localhost", user="user", passwd="password", database="school")

mycursor = mydb.cursor()

sql = "SELECT * FROM students"
sql = "UPDATE students SET name = 'Matthew' WHERE name = 'Gabe'"

mycursor.execute(sql)

mydb.commit()

print(mycursor.rowcount, "record(s) affected") 