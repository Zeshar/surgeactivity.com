<?php

/* ZesharCRMCoreBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_78c913e813f08df88dd9156d4555cc73e67cc4d129778324846fcf93e8b188e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_list_field_attributes' => array($this, 'block_sonata_list_field_attributes'),
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18b54ba9a89c819af1fbff1f3cb7dea8fa07c98d10b12fe7c74661db794cf474 = $this->env->getExtension("native_profiler");
        $__internal_18b54ba9a89c819af1fbff1f3cb7dea8fa07c98d10b12fe7c74661db794cf474->enter($__internal_18b54ba9a89c819af1fbff1f3cb7dea8fa07c98d10b12fe7c74661db794cf474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:base_list_field.html.twig"));

        // line 11
        echo "
<td";
        // line 12
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute(        // line 14
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(        // line 16
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 24
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 27
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                // line 28
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 29
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 32
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        // line 35
        echo "</td>
";
        
        $__internal_18b54ba9a89c819af1fbff1f3cb7dea8fa07c98d10b12fe7c74661db794cf474->leave($__internal_18b54ba9a89c819af1fbff1f3cb7dea8fa07c98d10b12fe7c74661db794cf474_prof);

    }

    // line 12
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_5599233af13eca0e0c3921b37b8e28f0478df576f5c4ed4164b42f8c2c0525ba = $this->env->getExtension("native_profiler");
        $__internal_5599233af13eca0e0c3921b37b8e28f0478df576f5c4ed4164b42f8c2c0525ba->enter($__internal_5599233af13eca0e0c3921b37b8e28f0478df576f5c4ed4164b42f8c2c0525ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_5599233af13eca0e0c3921b37b8e28f0478df576f5c4ed4164b42f8c2c0525ba->leave($__internal_5599233af13eca0e0c3921b37b8e28f0478df576f5c4ed4164b42f8c2c0525ba_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_fde32f97c841a47b47891a2efef4355d59bddedf3b51ee4c93cd4d1140a4a846 = $this->env->getExtension("native_profiler");
        $__internal_fde32f97c841a47b47891a2efef4355d59bddedf3b51ee4c93cd4d1140a4a846->enter($__internal_fde32f97c841a47b47891a2efef4355d59bddedf3b51ee4c93cd4d1140a4a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_fde32f97c841a47b47891a2efef4355d59bddedf3b51ee4c93cd4d1140a4a846->leave($__internal_fde32f97c841a47b47891a2efef4355d59bddedf3b51ee4c93cd4d1140a4a846_prof);

    }

    // line 28
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_9de8e59676611b684d70e57e494cf7c3cb9f713401bbfa91f6ff683ed2ad44cd = $this->env->getExtension("native_profiler");
        $__internal_9de8e59676611b684d70e57e494cf7c3cb9f713401bbfa91f6ff683ed2ad44cd->enter($__internal_9de8e59676611b684d70e57e494cf7c3cb9f713401bbfa91f6ff683ed2ad44cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_9de8e59676611b684d70e57e494cf7c3cb9f713401bbfa91f6ff683ed2ad44cd->leave($__internal_9de8e59676611b684d70e57e494cf7c3cb9f713401bbfa91f6ff683ed2ad44cd_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 28,  108 => 20,  90 => 12,  82 => 35,  79 => 34,  73 => 32,  67 => 29,  62 => 28,  59 => 27,  57 => 26,  54 => 25,  51 => 24,  48 => 23,  44 => 21,  42 => 20,  38 => 19,  36 => 17,  35 => 16,  34 => 15,  33 => 14,  32 => 13,  28 => 12,  25 => 11,);
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
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if*/
/*             field_description.options.identifier is defined*/
/*         and field_description.options.route is defined*/
/*         and admin.isGranted(field_description.options.route.name == 'show' ? 'VIEW' : field_description.options.route.name|upper, object)*/
/*         and admin.hasRoute(field_description.options.route.name)*/
/*     %}*/
/*         <a class="sonata-link-identifier" href="{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}">*/
/*             {%- block field %}{{ value }}{% endblock -%}*/
/*         </a>*/
/*     {% else %}*/
/*         {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/*         {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/*         {% if isEditable and xEditableType %}*/
/*             {% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) })  %}*/
/*             <span {% block field_span_attributes %}class="x-editable" data-type="{{ xEditableType }}" data-value="{{ value }}" data-title="{{ field_description.label|trans({}, field_description.translationDomain) }}" data-pk="{{ admin.id(object) }}" data-url="{{ url }}" {% endblock %}>*/
/*                 {{ block('field') }}*/
/*             </span>*/
/*         {% else %}*/
/*             {{ block('field') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */
