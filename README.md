<a name="readme-top"></a>
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

# :books: Site WEB - METWEB

Ceci est le TD/TP de Javascript de l'IUT de velizy visant a cree un site usant du parallaxe

Pour ce faire j'ai utiliser le Framework Angular et pour le deployement une instance firebase

## :gear: Compilation en local

En premier lieu il faut installer node.js :
https://nodejs.org/en/download/

Pour lancer et tester le projet en local il faut faire les commandes suivantes :

```
git clone https://github.com/amarc-sudo/amarc-sudo.github.io.git
cd amarc-sudo.github.io
npm install
npm run watch
```

## :walking: Marche a suivre pour le test
Adresse du site en sur FireBase :
https://metweb-amarc.web.app/

Adresse du site en local :
http://localhost:4200

## :gear: Comprendre le code 

Angular est un framework monopage qui integre un systeme de composant, les composant sont des sous modules
Pour cree ce site j'ai cree deux composant principal, menu et information.

Chaque composant est compose de la maniere suivante :

* dossier-menu
  * menu.componement.css - le css specifique au composant
  * menu.componement.ts - le typescript specifique au composant
  * menu.componement.spec.ts - fichier generer qui nous interesse pas ici
  * menu.componement.html - l'html specifique au composant

Le typescript est une version typer et ameliorer du Javascript qui permet une meilleure robustese du code

Toutes les fonctions JS et JQuerry marche en TS

Pour creer l'effet de parallaxe j'ai effectuer du full css
Pour l'effet d'apparition au scroll j'ai rajouter une listenner sur le scroll qui detecte quand on arriver a une section specifique
- see information.componement.ts > la fonction scroll = (event: events): void => {}

Le menu est fait avec du CSS et du TS

## Built With

[![Angular][Angular.io]][Angular-url]



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/amarc-sudo/amarc-sudo.github.io.svg?style=for-the-badge
[contributors-url]: https://github.com/amarc-sudo/amarc-sudo.github.io/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/amarc-sudo/amarc-sudo.github.io.svg?style=for-the-badge
[forks-url]: https://github.com/amarc-sudo/amarc-sudo.github.io/network/members
[stars-shield]: https://img.shields.io/github/stars/amarc-sudo/amarc-sudo.github.io.svg?style=for-the-badge
[stars-url]: https://github.com/amarc-sudo/amarc-sudo.github.io/stargazers
[issues-shield]: https://img.shields.io/github/issues/amarc-sudo/amarc-sudo.github.io.svg?style=for-the-badge
[issues-url]: https://github.com/amarc-sudo/amarc-sudo.github.io/issues
[license-shield]: https://img.shields.io/github/license/amarc-sudo/amarc-sudo.github.io.svg?style=for-the-badge
[license-url]: https://github.com/amarc-sudo/amarc-sudo.github.io/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://www.linkedin.com/in/aurelien-marc-dev/
[product-screenshot]: images/screenshot.png
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
