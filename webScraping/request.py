import requests

r = requests.get('https://www.geeksforgeeks.org/python-programming-language/')

# Checa o status da resposta recebida
# success code - 200
print(r)

# Imprime o conteudo do request
print(r.content)