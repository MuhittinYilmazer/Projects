import requests
import time
#entering url
url= input("enter a url\n")
time.sleep(1)
#request method
method = input("POST or GET p / g\n")
if method==("p") :
     print("Request send by POST method")
     request = requests.post(url)
elif method==("g"):
     print("Request send by GET method")
     request = requests.get(url)
else:
     print("please enter 'p' or 'g'")
     
time.sleep(2)
#defining 'success' variable to request's status code
success = request.status_code

#if success == 200 it ask to pulling content
if success==200:
     print("Request successful")
     pull = input("Do you want to pull content? y/n\n")
if pull=="y":
     print("Content is pulling")
     #change'file.jpg' to png or something
     with open("file.jpg","wb") as f:
          f.write(request.content)
elif pull=="n":
     print("Content didn't pulled")
                
elif success==404:
     print("Request unsuccessful")
     
#you can download image by pasting the direct url like 
#'www.image.com/images/sea/seapicture3.jpg'
     
     
     


 
    



