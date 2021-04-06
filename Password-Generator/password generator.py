import random

#defining passwords count and length
piece = int(input("How many password do u want to produce: "))
length = int(input("Length?: "))

#index is for which letters will use for the password
index = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()?"

#generating passwords 
for i in range(0,piece):
     print("".join(random.sample(index,length)))
    
#this line provides waiting if you don't run this program from terminal
wait = input()

