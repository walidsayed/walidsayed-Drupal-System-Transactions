<?php 

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 
 *   'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="
<?php print $language->language; ?>" lang="
<?php print $language->language; ?>" dir="
<?php print $language->dir; ?>">
<head>
  <?php global $base_path; global $base_root; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:
  200,300,400,600,700,900,200italic,300italic,400italic,600italic,
  700italic,900italic|Dosis:200,300,400,500,600,700,800|Abel|
  Droid+Sans:400,700|Lato:100,300,400,700,900,100italic,300italic,
  400italic,700italic,900italic|Lora:400,700,400italic,
  700italic|PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700
  |Quicksand:300,400,700|Ubuntu:300,400,500,700,300italic,400italic,500italic,
  700italic|Lobster|Ubuntu+Condensed|Oxygen:400,300,700|Oswald:700,400,300
  |Open+Sans+Condensed:300,700,300italic|Roboto+Condensed:300italic,400italic,
  700italic,400,700,300|Open+Sans:300italic,400italic,600italic,700italic,
  800italic,800,700,400,600,300|Prosto+One|Francois+One|Comfortaa:700,300,400
  |Raleway:300,600,900,500,400,100,800,200,700|Roboto:300,700,500italic,900,
  300italic,400italic,900italic,100italic,100,500,400,700italic|Roboto+Slab:300,
  700,100,400|Share:700,700italic,400italic,400' rel='stylesheet' type='text/css'
>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
  rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"
  rel="stylesheet">

  
  <!--[if lte IE 8]> <link type="text/css" rel="stylesheet" href="<?php 
  print $base_root . $base_path . path_to_theme() ?>
  /css/lte-ie8.css" /> <![endif]-->
  <?php print $styles; ?>
  <?php print $scripts; ?>

  <?php 
    define('__ROOT__', dirname(__FILE__));
    require_once __ROOT__ . '/../css/style_setting.css';
  ?>

  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<body class="<?php print $classes;?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
</head>

