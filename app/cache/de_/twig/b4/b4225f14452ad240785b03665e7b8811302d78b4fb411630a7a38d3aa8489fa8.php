<?php

/* ZesharCRMCoreBundle:ListField:opportunity_lead_priority.html.twig */
class __TwigTemplate_c901f00849bebc66c92023e5b77a000bc99d9e59e20358475acaf1c799479089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_list_field_attributes' => array($this, 'block_sonata_list_field_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9b00a1bfb52383a88d040d3f35a10c4299d6b820728c35eed57706b528806d3 = $this->env->getExtension("native_profiler");
        $__internal_f9b00a1bfb52383a88d040d3f35a10c4299d6b820728c35eed57706b528806d3->enter($__internal_f9b00a1bfb52383a88d040d3f35a10c4299d6b820728c35eed57706b528806d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:opportunity_lead_priority.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        $context["typeString"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getPriorityString", array(), "method");
        // line 3
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Low")) {
            // line 4
            echo "        <span class=\"tile-type low\">Low</span>
    ";
        }
        // line 6
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "Medium")) {
            // line 7
            echo "        <span class=\"tile-type medium\">Medium</span>
    ";
        }
        // line 9
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : $this->getContext($context, "typeString")) == "High")) {
            // line 10
            echo "        <span class=\"tile-type high\">High</span>
    ";
        }
        // line 12
        echo "</td>
";
        
        $__internal_f9b00a1bfb52383a88d040d3f35a10c4299d6b820728c35eed57706b528806d3->leave($__internal_f9b00a1bfb52383a88d040d3f35a10c4299d6b820728c35eed57706b528806d3_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_19c91824bff0c1951b6e44309e0a97f23556c498b4f87c0a13248a87afc98e29 = $this->env->getExtension("native_profiler");
        $__internal_19c91824bff0c1951b6e44309e0a97f23556c498b4f87c0a13248a87afc98e29->enter($__internal_19c91824bff0c1951b6e44309e0a97f23556c498b4f87c0a13248a87afc98e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_19c91824bff0c1951b6e44309e0a97f23556c498b4f87c0a13248a87afc98e29->leave($__internal_19c91824bff0c1951b6e44309e0a97f23556c498b4f87c0a13248a87afc98e29_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:opportunity_lead_priority.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 1,  51 => 12,  47 => 10,  44 => 9,  40 => 7,  37 => 6,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% set typeString = object.getPriorityString() %}*/
/*     {% if typeString == 'Low' %}*/
/*         <span class="tile-type low">Low</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'Medium' %}*/
/*         <span class="tile-type medium">Medium</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'High' %}*/
/*         <span class="tile-type high">High</span>*/
/*     {% endif %}*/
/* </td>*/
/* */
