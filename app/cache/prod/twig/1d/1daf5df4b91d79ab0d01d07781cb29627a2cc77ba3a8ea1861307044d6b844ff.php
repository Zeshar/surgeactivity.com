<?php

/* ZesharCRMCoreBundle:CRUD:list_orm_many_to_one_custom.html.twig */
class __TwigTemplate_2503ec0ab751a8086ea6cd9cea64b250dc9c702458f7e24c4d43937a28b5a1a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"), "ZesharCRMCoreBundle:CRUD:list_orm_many_to_one_custom.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "attr", array(), "any", true, true)) {
                // line 17
                echo "            <div class=\"dropdown\">
        ";
            } else {
                // line 19
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "attr", array()), "data", array()) == "phone")) {
                    // line 20
                    echo "                <div class=\"dropdown name-tel-tab ";
                    if ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "phone", array()), "getDnc", array(), "method")) {
                        echo "dnc";
                    }
                    echo "\">
            ";
                }
                // line 22
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "attr", array()), "data", array()) == "email")) {
                    // line 23
                    echo "                <div class=\"dropdown email-tab ";
                    if ($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                        echo "marked-dne";
                    }
                    echo "\">
            ";
                }
                // line 25
                echo "        ";
            }
            // line 26
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : null)), "method"))) {
                // line 27
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), 1 => (isset($context["value"]) ? $context["value"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 29
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "
        ";
            }
            // line 31
            echo "        ";
            if ($this->getAttribute((isset($context["enable_bundles"]) ? $context["enable_bundles"] : null), "ZesharCRMCallsBundle", array(), "any", true, true)) {
                // line 32
                echo "            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li>
                    <span class=\"call\" data-contact=\"";
                // line 35
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
            // line 45
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:list_orm_many_to_one_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  90 => 35,  85 => 32,  82 => 31,  76 => 29,  68 => 27,  65 => 26,  62 => 25,  54 => 23,  51 => 22,  43 => 20,  40 => 19,  36 => 17,  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value %}*/
/*         {% if field_description.options.attr is not defined %}*/
/*             <div class="dropdown">*/
/*         {% else %}*/
/*             {% if field_description.options.attr.data == 'phone' %}*/
/*                 <div class="dropdown name-tel-tab {% if object.phone.getDnc() %}dnc{% endif %}">*/
/*             {% endif %}*/
/*             {% if field_description.options.attr.data == 'email' %}*/
/*                 <div class="dropdown email-tab {% if object.getEmail().getDonotEmail() %}marked-dne{% endif %}">*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if field_description.hasAssociationAdmin and field_description.associationadmin.hasRoute('edit') and field_description.associationadmin.isGranted('EDIT', value) %}*/
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
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
