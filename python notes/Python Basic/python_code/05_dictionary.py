student = {
                   "key" : "value",
                   "name":"saharsh",
                   "email":"sola@gmail.x=com",
                   "marks":[1,2,3,4],
                   "another":{"fname":"arun"}
              }


# print(student['name'])
# print(student['marks'])
# print(student['another']['fname'])

# Methods Of Dictionary 

# print(student.keys())
# print(list(student.keys()))
# print(student.values())
# print(student.items())


#Update A Dictionary 
updated={
    "Paeag": "Freinds",
    "What": "C****ya"
}

student.update(updated)

print(student.items())