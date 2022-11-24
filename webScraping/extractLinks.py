import requests
from bs4 import BeautifulSoup

# GET request
r = requests.get('https://www.geeksforgeeks.org/python-programming-language/')

# Criando o objeto BeautifulSoup
soup = BeautifulSoup(r.content, 'html.parser')

# Encontra todas as tags anchor com 'href'
for link in soup.find_all('a'):
    print(link.get('href'))