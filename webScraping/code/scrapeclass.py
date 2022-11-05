from urllib.request import urlopen
from bs4 import BeautifulSoup

html = urlopen("http://www.pythonscraping.com/pages/warandpeace.html")
bsObj = BeautifulSoup(html)

##Pega os nomes proprios do texto, onde os nomes dos personagens estão em verde
nameList = bsObj.find_all('span', {'class':'green'})
for name in nameList:
    print(name.get_text())