import requests
from bs4 import BeautifulSoup

# GET request
r = requests.get('https://www.geeksforgeeks.org/python-programming-language/')

# Criando o objeto BeautifulSoup
soup = BeautifulSoup(r.content, 'html.parser')

img_list = []

imgs = soup.find_all('img')
for img in imgs:
    src = img.get('src')
    alt = img.get('alt')
    img_list.append({'src':src, 'alt':alt})

for img in img_list:
    print(img)