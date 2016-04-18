<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/partials/head.htm */
class __TwigTemplate_1f2b9a1cc32c1c8dc8c01fe0ef3fafccc8e34c52e1d45e125277d76a49825939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <!-- Required meta tags always come first -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css\" integrity=\"sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/sticky-footer-navbar.css"));
        echo "\" rel=\"stylesheet\">
    ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
</head>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  40 => 12,  36 => 11,  28 => 8,  19 => 1,);
    }
}
/* <head>*/
/*     <!-- Required meta tags always come first -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">*/
/*     <meta http-equiv="x-ua-compatible" content="ie=edge">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/*     <title>{{ this.theme.site_name }} - {{ this.page.title }}</title>*/
/*     <!-- Bootstrap CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">*/
/*     <link href="{{ ['assets/css/sticky-footer-navbar.css']|theme }}" rel="stylesheet">*/
/*     {% styles %}*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/* </head>*/
