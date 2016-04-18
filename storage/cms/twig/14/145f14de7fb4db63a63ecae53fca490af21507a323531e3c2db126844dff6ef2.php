<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/pages/forum/forum.htm */
class __TwigTemplate_920a4ca2a34f2aa34ac72d4723d6115fc4e6590475c764789e0276d98a5152d3 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumChannels"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "---
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("forumTopics"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/pages/forum/forum.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% component 'forumChannels' %}*/
/* ---*/
/* {% component 'forumTopics' %}*/
