<?php

/* /Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/title.htm */
class __TwigTemplate_6595b8754b924c0bfaacc958c76ddf3768dafc2224704f0f39a06ff857b6dd39 extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-12\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("method" => "get")));
        echo "
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, input("search"));
        echo "\">
            </div>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/* */
/*     <div class="col-md-12">*/
/*         {{ form_open({ method: 'get' })}}*/
/*             <div class="search-box">*/
/*                 <input type="text" name="search" class="form-control" placeholder="Search topics" value="{{ input('search')|e }}">*/
/*             </div>*/
/*         {{ form_close() }}*/
/*     </div>*/
/* */
/* </div>*/
/* */
