<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/layouts/main.htm */
class __TwigTemplate_369684518cdda8e1018d664d391c1efac37d0e26f133996d505b80dbc6d962ff extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
<body>
    <h1>Hello, world!</h1>
    <!-- Fixed navbar -->
    <div class=\"pos-f-t\">";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "        <div class=\"collapse\" id=\"navbar-header\">
            <div class=\"container bg-inverse p-a-1\">
                <h3>Collapsed content</h3>
                <p>Toggleable via the navbar brand.</p>
            </div>
        </div>
        ";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("navigation"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " 
    </div>
    <!-- Begin page content -->
    <div class=\"container\">
        
        <div class=\"jumbotron\">
            <div class=\"container\">
                <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                <p></p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "description", array()), "html", null, true);
        echo "</p>                   
            </div>

        </div>

        
        <div class=\"container\">
            ";
        // line 31
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 32
        echo "        </div>
    
    </div>
    
   ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " 
   
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  74 => 32,  72 => 31,  62 => 24,  58 => 23,  46 => 16,  38 => 10,  34 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* {% partial 'head' %}*/
/* */
/* <body>*/
/*     <h1>Hello, world!</h1>*/
/*     <!-- Fixed navbar -->*/
/*     <div class="pos-f-t">{% component 'session' %}*/
/*         <div class="collapse" id="navbar-header">*/
/*             <div class="container bg-inverse p-a-1">*/
/*                 <h3>Collapsed content</h3>*/
/*                 <p>Toggleable via the navbar brand.</p>*/
/*             </div>*/
/*         </div>*/
/*         {% partial "navigation" %} */
/*     </div>*/
/*     <!-- Begin page content -->*/
/*     <div class="container">*/
/*         */
/*         <div class="jumbotron">*/
/*             <div class="container">*/
/*                 <h1>{{ this.page.title }}</h1>*/
/*                 <p></p>{{ this.page.description }}</p>                   */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         */
/*         <div class="container">*/
/*             {% page %}*/
/*         </div>*/
/*     */
/*     </div>*/
/*     */
/*    {% partial "footer" %} */
/*    */
/* </body>*/
/* */
/* </html>*/
