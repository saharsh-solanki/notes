# rwad a file
# f = open('g:/notes/python notes/Python Basic/python_code/sample_file.txt',"r")
# data=f.read()
# print(data)

#write a file
# f = open('g:/notes/python notes/Python Basic/python_code/write_file.txt',"a")
# data=f.write("Hekllo I am ")
# f.close()

with  open('g:/notes/python notes/Python Basic/python_code/write_file.txt',"r") as f:
    print(f.read()) 