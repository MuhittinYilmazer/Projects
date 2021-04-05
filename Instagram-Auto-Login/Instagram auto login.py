from selenium import webdriver
import time

#defining webdriver and opening instagram page
browser = webdriver.Chrome("#driver's path")
browser.get("https://instagram.com")

#waiting for 1 second
time.sleep(1)

#finding username and password input place by element name
username = browser.find_element_by_name("username")
password = browser.find_element_by_name("password")

#sending username and password values
username.send_keys("#your username")
password.send_keys("#your password")

#finding login button by xpath
login = browser.find_element_by_xpath("/html/body/div[1]/section/main/article/div[2]/div[1]/div/form/div[4]/button")
login.click()
