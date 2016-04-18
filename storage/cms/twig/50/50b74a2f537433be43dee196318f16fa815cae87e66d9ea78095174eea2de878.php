<?php

/* /Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/pagination.htm */
class __TwigTemplate_f0d57ccc04252a6bb25c27d62ee18e70754e3a7773c2fe467d28f468ed4a74a7 extends Twig_Template
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
        $context["paginationEnabled"] = ((($this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "currentPage", array()) > 1) || ($this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "lastPage", array()) > 1)) || ($this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "lastPage", array()) > $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "currentPage", array())));
        // line 2
        echo "
<div class=\"row forum-pagination ";
        // line 3
        echo (((isset($context["paginationEnabled"]) ? $context["paginationEnabled"] : null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = (isset($context["topics"]) ? $context["topics"] : null)        ;
        echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::pagination-list")        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topics"]) ? $context["topics"] : null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  34 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set paginationEnabled = topics.currentPage > 1 or topics.lastPage > 1 or topics.lastPage > topics.currentPage %}*/
/* */
/* <div class="row forum-pagination {{ paginationEnabled ? "enabled" : "disabled" }}">*/
/*     <div class="col-md-8">*/
/*         {% partial __SELF__ ~ "::pagination-list" records=topics %}*/
/*     </div>*/
/*     <div class="col-md-4 text-right posts-total-summary">*/
/*         <p>{{ topics.firstItem }}-{{ topics.lastItem }} of {{ topics.total }}</p>*/
/*     </div>*/
/* </div>*/
/* */
