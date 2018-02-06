<?php

/* ZesharCRMCoreBundle:CRUD:show_orm_many_to_one_custom.html.twig */
class __TwigTemplate_591199ccec4a831444fe2240e4e9c8808f44cf948936bdcf787f9479e9122ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "ZesharCRMCoreBundle:CRUD:show_orm_many_to_one_custom.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 16
            echo "        <div class=\"dropdown\">
        ";
            // line 17
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), 1 => (isset($context["value"]) ? $context["value"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
        ";
            }
            // line 22
            echo "        ";
            if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCallsBundle", array(), "any", true, true)) {
                // line 23
                echo "            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <span class=\"call\" data-contact=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "id", array()), "html", null, true);
                echo "\" data-number=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" >Call ";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "</span>
                </li>
                <li>
                    <span class=\"hangup\" style=\"display: none\">Hangup</span>
                </li>
                <li>
                    <span class=\"key\" style=\"display: none\">Press key</span>
                </li>
            </ul>
        ";
            }
            // line 36
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:show_orm_many_to_one_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  61 => 26,  56 => 23,  53 => 22,  47 => 20,  39 => 18,  37 => 17,  34 => 16,  31 => 15,  28 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value %}*/
/*         <div class="dropdown">*/
/*         {% if field_description.hasAssociationAdmin and field_description.associationadmin.hasRoute('edit') and field_description.associationadmin.isGranted('EDIT') %}*/
/*             <a href="{{ field_description.associationadmin.generateObjectUrl(field_description.options.route.name, value, field_description.options.route.parameters) }}">{{ value|render_relation_element(field_description) }}</a>*/
/*         {% else %}*/
/*             {{ value|render_relation_element(field_description) }}*/
/*         {% endif %}*/
/*         {% if enable_bundles.ZesharCRMCallsBundle is defined %}*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>*/
/*             <ul class="dropdown-menu">*/
/*                 <li>*/
/*                     <span class="call" data-contact="{{ value.id }}" data-number="{{ value }}" >Call {{ value }}</span>*/
/*                 </li>*/
/*                 <li>*/
/*                     <span class="hangup" style="display: none">Hangup</span>*/
/*                 </li>*/
/*                 <li>*/
/*                     <span class="key" style="display: none">Press key</span>*/
/*                 </li>*/
/*             </ul>*/
/*         {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
