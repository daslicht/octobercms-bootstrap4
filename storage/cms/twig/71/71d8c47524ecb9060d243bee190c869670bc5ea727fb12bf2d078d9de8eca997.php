<?php

/* /Applications/AMPPS/www/october/plugins/daslicht/contact/components/contact/default.htm */
class __TwigTemplate_76dcb23d118e346d568a68872320f81f14d0d796108e3c8e9401a31dcab2be69 extends Twig_Template
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
        echo "<p>This is the default markup for component Contact</p>

<small>You can delete this file if you want</small>
<hr>
Mysetting:
";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mysetting"]) ? $context["mysetting"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/plugins/daslicht/contact/components/contact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
/* <p>This is the default markup for component Contact</p>*/
/* */
/* <small>You can delete this file if you want</small>*/
/* <hr>*/
/* Mysetting:*/
/* {{ mysetting }}*/
