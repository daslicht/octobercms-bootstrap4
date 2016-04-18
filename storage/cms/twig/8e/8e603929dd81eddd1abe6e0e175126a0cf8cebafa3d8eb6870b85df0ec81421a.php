<?php

/* /Applications/AMPPS/www/october/themes/bootstrap4/pages/contact.htm */
class __TwigTemplate_a22226e5f1c3183184c2fe39854b427d8028cfb6b9af8637dfea8a8b44d93dbf extends Twig_Template
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
        echo "<div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> </div> <form class=\"flexiContactForm\" role=\"form\" data-request=\"";
        echo twig_escape_filter($this->env, (isset($context["SELF"]) ? $context["SELF"] : null), "html", null, true);
        echo "::onMailSent\" data-request-update=\"'";
        echo twig_escape_filter($this->env, (isset($context["SELF"]) ? $context["SELF"] : null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

<div class=\"form-groups\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Enter name\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Enter Email\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Enter Subject\">
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Enter Message\" cols=\"30\" rows=\"10\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Send</button>
</div>
</form>


<script>
(function() {
  \$('.flexiContactForm').on('ajaxSuccess', function(ev, context, data, status, jqXHR) {
      console.log('pling');
    /*if (data.error === true) {
      return console.log(arguments);
    } else {
      return \$('.form-groups').hide(1000);
    }*/
  });

}).call(this);
</script>

";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/themes/bootstrap4/pages/contact.htm";
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
/* <div class="confirm-container"> <!--This will contain the confirmation when the email is successfully sent--> </div> <form class="flexiContactForm" role="form" data-request="{{ SELF }}::onMailSent" data-request-update="'{{ SELF }}::confirm': '.confirm-container'">*/
/* */
/* <div class="form-groups">*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value=""  name="name" placeholder="Enter name">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value="" name="email" placeholder="Enter Email">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value="" name="subject" placeholder="Enter Subject">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <textarea class="form-control" value="" name="body" placeholder="Enter Message" cols="30" rows="10"></textarea>*/
/*     </div>*/
/*     <button type="submit" class="btn btn-primary btn-lg pull-right">Send</button>*/
/* </div>*/
/* </form>*/
/* */
/* */
/* <script>*/
/* (function() {*/
/*   $('.flexiContactForm').on('ajaxSuccess', function(ev, context, data, status, jqXHR) {*/
/*       console.log('pling');*/
/*     /*if (data.error === true) {*/
/*       return console.log(arguments);*/
/*     } else {*/
/*       return $('.form-groups').hide(1000);*/
/*     }*//* */
/*   });*/
/* */
/* }).call(this);*/
/* </script>*/
/* */
/* {#{% component 'contactForm' %}#}*/
