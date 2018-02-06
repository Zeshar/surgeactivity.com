<?php

/* ZesharCRMCoreBundle:ListField:opportunity_lead_priority.html.twig */
class __TwigTemplate_542783682e46f8449f0fc94abc4e949416136ae29906e43028349b8febad631d extends Twig_Template
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
        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        $context["typeString"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getPriorityString", array(), "method");
        // line 3
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Low")) {
            // line 4
            echo "        <span class=\"tile-type low\">Low</span>
    ";
        }
        // line 6
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Medium")) {
            // line 7
            echo "        <span class=\"tile-type medium\">Medium</span>
    ";
        }
        // line 9
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "High")) {
            // line 10
            echo "        <span class=\"tile-type high\">High</span>
    ";
        }
        // line 12
        echo "</td>
";
    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\"";
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
        return array (  53 => 1,  48 => 12,  44 => 10,  41 => 9,  37 => 7,  34 => 6,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
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
