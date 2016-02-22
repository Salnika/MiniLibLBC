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
- date
- Image
- titre
- categorie
- lieux
- prix
