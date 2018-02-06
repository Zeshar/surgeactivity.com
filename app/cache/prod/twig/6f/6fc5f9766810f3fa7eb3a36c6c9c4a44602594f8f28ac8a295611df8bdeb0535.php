<?php

/* ZesharCRMLeadsRegenerationBundle:CrossSell:crosssell.html.twig */
class __TwigTemplate_407ff9c9ee33d1297c8d11438bee4baed7f3d01b04f791d72e2d3d54ee359692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "ZesharCRMLeadsRegenerationBundle:CrossSell:crosssell.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
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
    <li class=\"active\">X-Sell Page</li>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <h1>X-Sell Page</h1>
    <table class=\"table table-bordered\">
        <thead>
        <tr class=\"sonata-ba-view-title\">
            <th colspan=\"2\">
                Product:
            </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "            <tr class=\"sonata-ba-view-container\">
                <td>
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "
                </td>
                <td>
                    <a class=\"btn btn-sm btn-default\" title=\"Win-Back Product\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_crosssell_leadgenerate", array("product" => $this->getAttribute($context["item"], "id", array()), "card" => (isset($context["card"]) ? $context["card"] : null))), "html", null, true);
            echo "\">Create lead</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMLeadsRegenerationBundle:CrossSell:crosssell.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  71 => 25,  65 => 22,  61 => 20,  57 => 19,  45 => 9,  42 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     <li><a href="{{ url('sonata_admin_dashboard') }}">{% trans %}Dashboard{% endtrans %}</a></li>*/
/*     <li class="active">X-Sell Page</li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>X-Sell Page</h1>*/
/*     <table class="table table-bordered">*/
/*         <thead>*/
/*         <tr class="sonata-ba-view-title">*/
/*             <th colspan="2">*/
/*                 Product:*/
/*             </th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for item in product %}*/
/*             <tr class="sonata-ba-view-container">*/
/*                 <td>*/
/*                     {{ item.title }}*/
/*                 </td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-default" title="Win-Back Product" href="{{ url('sonata_admin_crosssell_leadgenerate',{'product': item.id,'card':card})  }}">Create lead</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
