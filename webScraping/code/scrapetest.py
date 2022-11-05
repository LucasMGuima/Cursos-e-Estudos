from urllib.request import urlopen
from bs4 import BeautifulSoup

html = urlopen("http://pythonscraping.com/pages/page1.html")
#Cria um objeto BeatifulSoup com base no html coletado
bsObj = BeautifulSoup(html.read())

print(bsObj.h1)