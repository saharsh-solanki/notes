# Simple Set 
a = {1,2,3,4}
print(type(a))

#Create A EMpty Set
b={}
print(type(b))
# This Will Create A Dictionary  To Cretae A SEmpty Set

# Empty Set
c=set()
print(type(c))

# Methods of sets 

c=set()
c.add(1)
c.add(3)
c.add(4)
c.add((1,2,3,4)) # Can Only Add Tupples can't add dic. & list ( Can Not Add which can be changable  )
print(c)

# print(len(c))
# c.remove(1)
c.pop()
print(c)