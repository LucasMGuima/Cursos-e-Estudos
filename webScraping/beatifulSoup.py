import requests
from bs4 import BeautifulSoup

# GET request
r = requests.get('https://www.geeksforgeeks.org/python-programming-language/')

# Checar o status
print(r)

# Criando o objeto BeautifulSoup
soup = BeautifulSoup(r.content, 'html.parser')

s = soup.find('div', class_='entry-content')
content = s.find_all('p')

for line in content:
    print(line.text)