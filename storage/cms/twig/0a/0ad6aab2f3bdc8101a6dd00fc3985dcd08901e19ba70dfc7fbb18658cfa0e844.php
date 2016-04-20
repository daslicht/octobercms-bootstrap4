<?php

/* /Applications/AMPPS/www/october/plugins/daslicht/contact/components/contact/result.htm */
class __TwigTemplate_6233eb1527f539f85081ce003663d546a762bbba4331fbd9b076cfbaa11422e0 extends Twig_Template
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
        echo "<div>Ajax Result: ";
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : null), "html", null, true);
        echo " </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/plugins/daslicht/contact/components/contact/result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div>Ajax Result: {{test}} </div>*/
