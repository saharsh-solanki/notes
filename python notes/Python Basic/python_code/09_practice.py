ms_word=["donkey","p\ink"]

with open("g:/notes/python notes/Python Basic/python_code/write_file.txt") as f:
    content = f.read()

for ms_word in ms_word:
    content=content.replace(ms_word,"$*$#/")

with open("g:/notes/python notes/Python Basic/python_code/write_file.txt",'w') as f:
    f.write(content)