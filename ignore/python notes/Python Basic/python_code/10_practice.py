# class Programmer:
#     comp="Microsoft"
    
#     def __init__(self,name,lang):
#         self.name=name
#         self.lang=lang
#         print("Programmer Details Added !!")
    
#     def Store(self):
#         print(f"Congrates !! {self.name} Your Language {self.lang} Is Sotred Susscffully")


# p1=Programmer("Parag","Django")
# p1.Store()


# Second Problem 

# class Calculate:
#     def __init__ (self,num):
#         self.num=num

#     def squre(self):
#         print(f"Squre of {self.num} is "+(num*num))

# cal=Calculate("4")
# cal.squre()


# class Calculator:
#     comp="Microsoft"
    
#     def Getsqure(self,num):
#         print(f"The Squre Of {num} is {num*num}")
    
#     def Getcube(self,num):
#         print(f"The Cube Of {num} is {num*num*num}")

#     @staticmethod
#     def Greet():
#         print("hello !! Welcome To The Best Calculator Of World ")


# p1=Calculator()
# p1.Greet()



class Train:
    def BookTicket(self):
        if (self.seats>0):
            print(f"Ticket Booked!! Ticket No Is {self.seats}")
            self.seats = self.seats - 1
        else:
            print("no Seats Are Available")

    def __init__(self,name, fare ,seats):
        self.name = name
        self.fare = fare
        self.seats = seats
    def GetInfo(self):
        print(f"Train {self.name} is Available And Have Fare Of Rs{self.fare} and AVailable Seats Are  :  {self.seats}")


Tr = Train("Rajdhani Enterprice : 50303",33,3)
Tr.BookTicket()
Tr.BookTicket()
Tr.BookTicket()
Tr.BookTicket()
