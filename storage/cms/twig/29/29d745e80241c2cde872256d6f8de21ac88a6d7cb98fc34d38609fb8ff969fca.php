<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/partials/footer.htm */
class __TwigTemplate_5437527a172c2988fadbf7c93a74b1c4cdc74b800bb56937aef8f1c161892d38 extends Twig_Template
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
        echo "<footer class=\"footer\">
    <div class=\"container\">
        <span class=\"text-muted\">Place sticky footer content here.</span>
    </div>
</footer>


<script src=\"https://www.atlasestateagents.co.uk/javascript/tether.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js\" 
    integrity=\"sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7\" crossorigin=\"anonymous\"></script>

";
        // line 12
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  32 => 12,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <span class="text-muted">Place sticky footer content here.</span>*/
/*     </div>*/
/* </footer>*/
/* */
/* */
/* <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" */
/*     integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>*/
/* */
/* {% framework extras %}*/
/* {% scripts %}*/
