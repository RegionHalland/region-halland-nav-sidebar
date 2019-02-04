# Hämta alla parent-child-sidor neråt från den sida där man är

## Hur man använder Region Hallands plugin "region-halland-nav-sidebar"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-current-nav-sidbar".


## Användningsområde

Denna plugin skapar en array() med alla parent-child-sidor neråt från den sida där man är


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-nav-sidebar.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-nav-sidebar.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-nav-sidebar": "1.0.0"
},
```


## Versionhistorik

### 1.0.1
- Uppdaterat readme

### 1.0.0
- Första version


