class Game:
    comp = "Google"
    def ShwoDetail(self):
        print("This Is Game Class")


class Employee(Game):
    def __init__(self):
        print("Intializing Contructor")
    comp = "Google"
    def ShwoDetails(self):
        print("This Is Emplyee Class")


class Programmer(Employee):
    comp = "MicroSoft"
    @property
    def Salery(self):
        return self.comp

    def GetLang(self):
        super().__init__()
        # super().ShwoDetails()
        print("This Is Programmer  Class")


c1 = Employee()
c1.ShwoDetails()

c2 = Programmer()
print(c2.Salery)