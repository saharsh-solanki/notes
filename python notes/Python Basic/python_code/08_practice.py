# def maxi(num1,num2,num3):
#     if num1 >num2:
#         if num1>num3:
#             return num1
#     elif num2 > num3:
#         return num2
#     else:
#         return num3

# print("Gretest number is ",maxi(13,5,1))

# def cels(c):
#     return (c * (9/5) + 32)

# print(cels(0))


# def sss(n):
#     if n==0 or n==1:
#         return 0
#     else:
#         return n+sss(n-1)

# print(sss(5))

# n = 4 
# for i in range(n):
#     print("*"*n)
#     n=n-1

words = "Saharsh"
strings = "            Saharsh is a good youtuber          "
def rm(string,word):
    newStr = string.replace(word,"")
    newStr.strip()
    return newStr

print(rm(strings,words))