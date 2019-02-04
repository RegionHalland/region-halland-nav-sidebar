<?php

	/**
	 * @package Region Halland Nav Sidebar
	 */
	/*
	Plugin Name: Region Halland Nav Sidebar
	Description: Front-end-plugin som returnerar en parent-child-array neråt från den sida där man är
	Version: 1.0.0
	Author: Roland Hydén
	License: Free to use
	Text Domain: regionhalland
	*/

	// Returnerar alla page children
	function get_region_halland_nav_sidebar() {
		
		// Wordpress funktion för aktuell sida
		global $post;

		// Om det inte är en post, returnera ingenting
        if (!is_a($post, 'WP_Post')) {
			return;
		}

		// Hämta alla föräldrar till aktuell post
        $ancestors = get_post_ancestors($post->ID);

        // om det inte finns några föräldrar, returnera false
        if (count($ancestors) <= 0) {
            return false;
        }

        // Hämta alla förälder-sidor
        $parentID = $ancestors[count($ancestors) - 1];
		$pages = get_pages(['child_of' => $parentID]);

		// Skapa parent-child-arrayen
    	$navigationTree = getRegionHallandNavigationTree($pages, $parentID);

    	// Returnera hela parent-child-arrayen
	 	return $navigationTree;		

	}

	function getRegionHallandNavigationTree(array &$posts, $parentId = 0)
    {
		
		// Wordpress funktion för aktuell sida
        global $post;
        
        // Om det inte är en post, returnera ingenting
        if (!is_a($post, 'WP_Post')) {
            return;
        }

        // Hämta sajten front-sida
        $frontpage = (int)get_option('page_on_front');

        return buildRegionHallandNavigationTree($posts, $parentId, $post->ID, $frontpage);
    }

    // Function för att bygga arrayen
    function buildRegionHallandNavigationTree(array &$posts, $parentId = 0, $currentID = 0, $frontpage = 0) 
    {
        
        // Tmp array
        $branch = array();

        // Loopa igenom alla föräldrar
        foreach ($posts as &$post) {
            
            // Sätt aktuell sida som aktiv
            if ($currentID === $post->ID && !isset($post->active)) {
                $post->active = true;
            }

            // Anropa bygg-functionen igen på att skapa parent-child-arrayen
            if ($post->post_parent == $parentId) {
                $children = buildRegionHallandNavigationTree($posts, $post->ID, $currentID);
                if ($children) {
                    $post->children = $children;
                }
                $branch[$post->ID] = $post;
                unset($post);
            }
        }

        // Returnera tmp-arrayen
        return $branch;
    }

	// Metod som anropas när pluginen aktiveras
	function region_halland_nav_sidebar_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_nav_sidebar_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_nav_sidebar_activate');
	
	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_nav_sidebar_deactivate');

?>