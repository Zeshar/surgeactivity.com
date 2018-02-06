<?php

/* ZesharCRMGoalsBundle:Goal:goal_show.html.twig */
class __TwigTemplate_0ce518d46f54bacbcd09aa7ce0cd580bf43a9c186ad0e3a9cd19f64d3f4b3aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle::sonata_layout.html.twig", "ZesharCRMGoalsBundle:Goal:goal_show.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle::sonata_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    <li><a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        echo "</a></li>
    <li class=\"active\">Goal Page</li>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th colspan=\"4\">
                 Portfolio
            </th>
            <th colspan=\"4\">
                User Goals
            </th>
        </tr>
        <tr>
        <th>Item</th>
        <th>Points</th>
        <th>Target Items</th>
        <th>Total Points</th>
        <th>Growth Desired</th>
        <th>Items in Force</th>
        <th>Total Points</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 30
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 31
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 32
                echo "                <tr class=\"sonata-ba-view-container\">
                    <td>
                        ";
                // line 34
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "points", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prev", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 43
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "prev", array()) * $this->getAttribute($context["item"], "points", array())), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "percent", array()), "html", null, true);
                echo " %
                    </td>
                    <td>
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "estimated", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 52
                echo twig_escape_filter($this->env, ($this->getAttribute($context["item"], "estimated", array()) * $this->getAttribute($context["item"], "points", array())), "html", null, true);
                echo "
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        }
        // line 57
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:Goal:goal_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  125 => 56,  115 => 52,  109 => 49,  103 => 46,  97 => 43,  91 => 40,  85 => 37,  79 => 34,  75 => 32,  70 => 31,  68 => 30,  45 => 9,  42 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle::sonata_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ url('sonata_admin_dashboard') }}">{% trans %}Dashboard{% endtrans %}</a></li>*/
/*     <li class="active">Goal Page</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr>*/
/*             <th colspan="4">*/
/*                  Portfolio*/
/*             </th>*/
/*             <th colspan="4">*/
/*                 User Goals*/
/*             </th>*/
/*         </tr>*/
/*         <tr>*/
/*         <th>Item</th>*/
/*         <th>Points</th>*/
/*         <th>Target Items</th>*/
/*         <th>Total Points</th>*/
/*         <th>Growth Desired</th>*/
/*         <th>Items in Force</th>*/
/*         <th>Total Points</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% if result %}*/
/*             {% for key, item in result %}*/
/*                 <tr class="sonata-ba-view-container">*/
/*                     <td>*/
/*                         {{ key }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.points }}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.prev}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.prev*item.points}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.percent}} %*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.estimated}}*/
/*                     </td>*/
/*                     <td>*/
/*                         {{ item.estimated*item.points}}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
/* */
/* */
