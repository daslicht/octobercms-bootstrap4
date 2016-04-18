<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/pages/blog/blog-post-page.htm */
class __TwigTemplate_9e0f13b98260d8dcfd541262fd5db35aadd57ee37a610ae5e2ea6285cf39bf48 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<hr>
<h2>Comments:</h2>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("forumEmbedTopic"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/pages/blog/blog-post-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% component 'blogPost' %}*/
/* <hr>*/
/* <h2>Comments:</h2>*/
/* {% component 'forumEmbedTopic' %}*/
