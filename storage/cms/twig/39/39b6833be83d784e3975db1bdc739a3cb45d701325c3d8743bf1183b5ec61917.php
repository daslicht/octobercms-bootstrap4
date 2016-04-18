<?php

/* /Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/topics.htm */
class __TwigTemplate_cf9ff11a96127ab23c0a1df6d855783f0d48342bcfb617880c2bca6ace8715ab extends Twig_Template
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
        echo "<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"channel-column\">Channel</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 9
            echo "        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator ";
            // line 11
            echo ((((isset($context["member"]) ? $context["member"] : null) && $this->getAttribute($context["topic"], "hasNew", array()))) ? ("has-new") : (""));
            echo "\"></div>
            </td>
            <td>
                <h5>
                    ";
            // line 15
            if ($this->getAttribute($context["topic"], "sticky", array())) {
                echo "<strong>Sticky:</strong>";
            }
            // line 16
            echo "                    ";
            if ($this->getAttribute($context["topic"], "locked", array())) {
                echo "<strong>Locked:</strong>";
            }
            // line 17
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "subject", array()), "html", null, true);
            echo "</a>
                </h5>
            </td>
            <td>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "channel", array()), "title", array()), "html", null, true);
            echo "</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "user", array()), "avatarThumb", array(0 => 24), "method"), "html", null, true);
            echo "\" class=\"member-avatar\" />
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "last_post_member", array()), "username", array()), "html", null, true);
            echo "</a>
                    posted
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "url", array()), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "last_post_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["topic"], "last_post_at", array()), "diffForHumans", array()), "html", null, true);
            echo "</a>
                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        if ( !twig_length_filter($this->env, (isset($context["topics"]) ? $context["topics"] : null))) {
            // line 35
            echo "        <tr>
            <td colspan=\"100\">There are no latest posts in any topics.</td>
        </tr>
    ";
        }
        // line 39
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/october/plugins/rainlab/forum/components/topics/topics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 39,  100 => 35,  98 => 34,  95 => 33,  80 => 28,  73 => 26,  69 => 25,  62 => 21,  52 => 17,  47 => 16,  43 => 15,  36 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <table class="forum-table">*/
/*     <tr>*/
/*         <th colspan="2">Topic</th>*/
/*         <th class="channel-column">Channel</th>*/
/*         <th class="activity-column">Last post</th>*/
/*     </tr>*/
/* */
/*     {% for topic in topics %}*/
/*         <tr class="forum-topic">*/
/*             <td class="indicator-column">*/
/*                 <div class="topic-indicator {{ member and topic.hasNew ? 'has-new' }}"></div>*/
/*             </td>*/
/*             <td>*/
/*                 <h5>*/
/*                     {% if topic.sticky %}<strong>Sticky:</strong>{% endif %}*/
/*                     {% if topic.locked %}<strong>Locked:</strong>{% endif %}*/
/*                     <a href="{{ topic.url }}">{{ topic.subject }}</a>*/
/*                 </h5>*/
/*             </td>*/
/*             <td>*/
/*                 <p>{{ topic.channel.title }}</p>*/
/*             </td>*/
/*             <td class="activity-column">*/
/*                 <p>*/
/*                     <img src="{{ topic.last_post_member.user.avatarThumb(24) }}" class="member-avatar" />*/
/*                     <a href="{{ topic.last_post_member.url }}">{{ topic.last_post_member.username }}</a>*/
/*                     posted*/
/*                     <a href="{{ topic.url }}?page=last#post-{{ topic.last_post_id }}">{{ topic.last_post_at.diffForHumans }}</a>*/
/*                 </p>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* */
/*     {% if not topics|length %}*/
/*         <tr>*/
/*             <td colspan="100">There are no latest posts in any topics.</td>*/
/*         </tr>*/
/*     {% endif %}*/
/* </table>*/
