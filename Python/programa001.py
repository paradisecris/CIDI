from selenium import webdriver
import time
import os,time

driver = webdriver.Chrome(executable_path=r"C:\xampp\htdocs\CIDI\Python\chromedriver.exe")

driver.get("https://web.whatsapp.com/")
time.sleep(10)

driver.close()
