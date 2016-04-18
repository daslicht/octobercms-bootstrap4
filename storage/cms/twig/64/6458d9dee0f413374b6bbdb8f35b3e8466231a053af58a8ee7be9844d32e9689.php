<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/partials/navigation.htm */
class __TwigTemplate_7f168a287d20fa5790105723ad609849b6f961b58a94357ea637f194cac18210 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-light navbar-static-top bg-faded\">
            <div class=\"container\">
                
                <button class=\"navbar-toggler hidden-sm-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#exCollapsingNavbar2\">
                    ☰
                </button>
                
                <div class=\"collapse navbar-toggleable-xs\" id=\"exCollapsingNavbar2\">
                    
                    <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">logo</a>
                    
                    <ul class=\"nav navbar-nav\">
                        
                        <li class=\"nav-item ";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Home</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->env->getExtension('CMS')->pageFilter("about");
        echo "\">About</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "music")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("music");
        echo "\">Music</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 26
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "contact")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"/contact\">Contact</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 30
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "blog")) {
            echo " active ";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"/blog\">Blog</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "forum")) {
            echo "active";
        }
        echo "\">
                            <a class=\"nav-link\" href=\"/forum\">Forum</a>
                        </li>
                        
                        <li class=\"nav-item ";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "account")) {
            echo "active";
        }
        echo " pull-xs-right\">
                            <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\">Account</a>
                        </li>
                                                
                    </ul>
                </div>
                
            </div>
        </nav>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  100 => 38,  91 => 34,  82 => 30,  73 => 26,  67 => 23,  61 => 22,  55 => 19,  49 => 18,  43 => 15,  37 => 14,  30 => 10,  19 => 1,);
    }
}
/* <nav class="navbar navbar-light navbar-static-top bg-faded">*/
/*             <div class="container">*/
/*                 */
/*                 <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">*/
/*                     ☰*/
/*                 </button>*/
/*                 */
/*                 <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">*/
/*                     */
/*                     <a class="navbar-brand" href="{{ 'home'|page }}">logo</a>*/
/*                     */
/*                     <ul class="nav navbar-nav">*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'home' %}active{% endif %}">*/
/*                             <a class="nav-link" href="{{ 'home'|page }}">Home</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'about' %}active{% endif %}">*/
/*                             <a class="nav-link" href="{{ 'about'|page }}">About</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'music' %}active{% endif %}">*/
/*                             <a class="nav-link" href="{{ 'music'|page }}">Music</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'contact' %}active{% endif %}">*/
/*                             <a class="nav-link" href="/contact">Contact</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'blog' %} active {% endif %}">*/
/*                             <a class="nav-link" href="/blog">Blog</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'forum' %}active{% endif %}">*/
/*                             <a class="nav-link" href="/forum">Forum</a>*/
/*                         </li>*/
/*                         */
/*                         <li class="nav-item {% if this.page.id == 'account' %}active{% endif %} pull-xs-right">*/
/*                             <a class="nav-link" href="{{ 'account'|page }}">Account</a>*/
/*                         </li>*/
/*                                                 */
/*                     </ul>*/
/*                 </div>*/
/*                 */
/*             </div>*/
/*         </nav>*/
