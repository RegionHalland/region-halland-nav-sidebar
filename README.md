# Hämta alla sidor i första nivån i en sid-taxonomi

## Hur man använder Region Hallands plugin "region-halland-tree-first-level"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-tree-first-level".


## Användningsområde

Denna plugin skapar en array() med alla sidor som har parent = 0 i en sid-taxonomi


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-tree-first-level.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-tree-first-level.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-tree-first-level": "1.0.0"
},
```


## Loopa ut "sidorna" via "Blade"

```sh
@php($first_level_pages = get_region_halland_tree_first_level())	
    @if(isset($first_level_pages) && !empty($first_level_pages))
        @foreach($first_level_pages as $first_level_page)
            @if($first_level_page->active === true)
                <a class="active" href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
            @else
                <a href="{{ $first_level_page->url }}">{{ $first_level_page->post_title }}</a>
            @endif
        @endforeach
    @endif
@endif
```
        

## Exempel på hur arrayen kan se ut

```sh
array (size=3)
  0 => 
    object(WP_Post)[8847]
      public 'ID' => int 7
      public 'post_author' => string '1' (length=1)
      public 'post_date' => string '2018-03-13 10:14:31' (length=19)
      public 'post_date_gmt' => string '2018-03-13 10:14:31' (length=19)
      public 'post_content' => string '' (length=0)
      public 'post_title' => string 'Lorem Ipsum' (length=16)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'lorem-ipsum' (length=15)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2018-11-06 15:14:31' (length=19)
      public 'post_modified_gmt' => string '2018-11-06 13:14:31' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?page_id=7' (length=25)
      public 'menu_order' => int 7
      public 'post_type' => string 'page' (length=4)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'url' => string 'http://exempel.se/lorem-ipsum/' (length=38)
  1 => 
    object(WP_Post)[8849]
      public 'ID' => int 11
      public 'post_author' => string '1' (length=1)
      public 'post_date' => string '2018-03-13 10:15:01' (length=19)
      public 'post_date_gmt' => string '2018-03-13 10:15:01' (length=19)
      public 'post_content' => string '' (length=0)
      public 'post_title' => string 'Aldu integer' (length=19)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'aldu-integer' (length=18)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2018-11-01 15:48:03' (length=19)
      public 'post_modified_gmt' => string '2018-11-01 13:48:03' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?page_id=11' (length=26)
      public 'menu_order' => int 2
      public 'post_type' => string 'page' (length=4)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'url' => string 'http://exempel.se/aldu-integer/' (length=41)
  2 => 
    object(WP_Post)[8851]
      public 'ID' => int 17
      public 'post_author' => string '2' (length=1)
      public 'post_date' => string '2018-03-13 10:15:37' (length=19)
      public 'post_date_gmt' => string '2018-03-13 10:15:37' (length=19)
      public 'post_content' => string '' (length=0)
      public 'post_title' => string 'Aliquam eros elit' (length=21)
      public 'post_excerpt' => string '' (length=0)
      public 'post_status' => string 'publish' (length=7)
      public 'comment_status' => string 'closed' (length=6)
      public 'ping_status' => string 'closed' (length=6)
      public 'post_password' => string '' (length=0)
      public 'post_name' => string 'aliquam-eros-elit' (length=21)
      public 'to_ping' => string '' (length=0)
      public 'pinged' => string '' (length=0)
      public 'post_modified' => string '2018-11-06 20:34:26' (length=19)
      public 'post_modified_gmt' => string '2018-11-06 18:34:26' (length=19)
      public 'post_content_filtered' => string '' (length=0)
      public 'post_parent' => int 0
      public 'guid' => string 'http://exempel.se/?page_id=17' (length=26)
      public 'menu_order' => int 3
      public 'post_type' => string 'page' (length=4)
      public 'post_mime_type' => string '' (length=0)
      public 'comment_count' => string '0' (length=1)
      public 'filter' => string 'raw' (length=3)
      public 'url' => string 'http://exempel.se/aliquam-eros-elit/' (length=44)
```

## Versionhistorik

### 1.0.0
- Första version