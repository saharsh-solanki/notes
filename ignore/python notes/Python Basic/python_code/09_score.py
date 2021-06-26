def game(score):
    with open('g:/notes/python notes/Python Basic/python_code/score.txt',"r") as f:
        highscore=f.read()
        if(score > int(highscore)):
            with open('g:/notes/python notes/Python Basic/python_code/score.txt',"w") as d:
                d.write(str(score))
            hc="Congrates !! You Have Made New High Score"
        else:
            hc="Ohoo !! No High Score Keep Trying"     
    return hc  

print(game(10))