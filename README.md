# MiniLibLBC
Fonctions de Parsing pour Leboncoin

# Utilisation

Créer Une requête avec un url:
```
$request = new LBCRequest($url, $options);
```

Parser la requête:
```
$result = $request->parseRequest();
```
(Retourne du code HTML à afficher directement)

# Options:

Permet d'afficher tel ou tel element :

- date -> 'date'
- image -> 'image'
- titre -> 'title'
- categorie -> 'category'
- lieux -> 'placement'
- prix -> 'price'
