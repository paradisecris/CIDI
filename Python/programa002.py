from selenium import webdriver
import time
import os,time

driver = webdriver.Chrome(executable_path=r"C:\xampp\htdocs\CIDI\Python\chromedriver.exe")

driver.get("https://web.whatsapp.com")
time.sleep(3)


celular= "525585542040"
mensaje="Hola pinche puto ya voy a salir del closet"

driver.get("https://wa.me/"+celular+"?text="+mensaje)
time.sleep(3)

btn = driver.find_elements_by_xpath("//*[@id='action-button']")[0]
btn.click()
time.sleep(3)
btn = driver.find_elements_by_xpath("//*[@id='fallback_block']/div/div/a")[0]
btn.click()
time.sleep(3)

#boton Enviar
btn = driver.find_elements_by_xpath("//*[@id='main']/footer/div[1]/div[3]")[0]
btn.click()
time.sleep(1)

driver.close()
