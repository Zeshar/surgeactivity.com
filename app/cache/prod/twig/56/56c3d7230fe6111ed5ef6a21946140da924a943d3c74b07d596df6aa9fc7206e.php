<?php

/* ZesharCRMCallsBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_44b22b3a53487cd58f446040cd56e8b0339fec534c64937a68bd4919cedc7645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "admin_zesharcrm_calls_callreporting_listShow") && ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label", array()) != "Action"))) {
            // line 2
            echo "
    <td class=\"sonata-ba-list-field sonata-ba-list-field-";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()), "html", null, true);
            echo "\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">
        ";
            // line 4
            if (((($this->getAttribute($this->getAttribute(            // line 5
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute(            // line 6
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute(            // line 7
(isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array())))), 1 => (isset($context["object"]) ? $context["object"] : null)), "method")) && $this->getAttribute(            // line 8
(isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array())), "method"))) {
                // line 10
                echo "            <a class=\"sonata-link-identifier\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) ? $context["object"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                // line 11
                $this->displayBlock('field', $context, $blocks);
                // line 12
                echo "</a>
        ";
            } else {
                // line 14
                echo "            ";
                $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"));
                // line 15
                echo "            ";
                $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()));
                // line 16
                echo "
            ";
                // line 17
                if (((isset($context["isEditable"]) ? $context["isEditable"] : null) && (isset($context["xEditableType"]) ? $context["xEditableType"] : null))) {
                    // line 18
                    echo "                ";
                    $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")));
                    // line 19
                    echo "                <span ";
                    $this->displayBlock('field_span_attributes', $context, $blocks);
                    echo ">
                    ";
                    // line 20
                    $this->displayBlock("field", $context, $blocks);
                    echo "
                </span>
            ";
                } else {
                    // line 23
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name", array()), "html", null, true);
                    echo "
                ";
                    // line 24
                    $this->displayBlock("field", $context, $blocks);
                    echo "
            ";
                }
                // line 26
                echo "        ";
            }
            // line 27
            echo "    </td>
";
        }
    }

    // line 11
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
    }

    // line 19
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : null), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCallsBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 19,  92 => 11,  86 => 27,  83 => 26,  78 => 24,  73 => 23,  67 => 20,  62 => 19,  59 => 18,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  44 => 12,  42 => 11,  38 => 10,  36 => 8,  35 => 7,  34 => 6,  33 => 5,  32 => 4,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% if app.request.attributes.get('_route') != 'admin_zesharcrm_calls_callreporting_listShow' and field_description.label != 'Action' %}*/
/* */
/*     <td class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}" objectId="{{ admin.id(object) }}">*/
/*         {% if*/
/*         field_description.options.identifier is defined*/
/*         and field_description.options.route is defined*/
/*         and admin.isGranted(field_description.options.route.name == 'show' ? 'VIEW' : field_description.options.route.name|upper, object)*/
/*         and admin.hasRoute(field_description.options.route.name)*/
/*         %}*/
/*             <a class="sonata-link-identifier" href="{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}">*/
/*                 {%- block field %}{{ value }}{% endblock -%}*/
/*             </a>*/
/*         {% else %}*/
/*             {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/*             {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/*             {% if isEditable and xEditableType %}*/
/*                 {% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) })  %}*/
/*                 <span {% block field_span_attributes %}class="x-editable" data-type="{{ xEditableType }}" data-value="{{ value }}" data-title="{{ field_description.label|trans({}, field_description.translationDomain) }}" data-pk="{{ admin.id(object) }}" data-url="{{ url }}" {% endblock %}>*/
/*                     {{ block('field') }}*/
/*                 </span>*/
/*             {% else %}*/
/*                 {{ field_description.name }}*/
/*                 {{ block('field') }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     </td>*/
/* {% endif %}*/
