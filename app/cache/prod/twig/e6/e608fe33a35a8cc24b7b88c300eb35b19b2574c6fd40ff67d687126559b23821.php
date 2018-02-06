<?php

/* ZesharCRMCoreBundle:ListField:opportunity_lead_type.html.twig */
class __TwigTemplate_474b8dc1a6b01812fcdd7943ea60c7133832daa04e9c1584efdce13617fad9b0 extends Twig_Template
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
        if ( !(null === $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLead", array(), "method"))) {
            // line 3
            echo "        ";
            $context["typeString"] = $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getLead", array(), "method"), "getTypeString", array(), "method");
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context["typeString"] = "Cold";
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Warm")) {
            // line 8
            echo "        <span class=\"tile-type warm\">Warm</span>
    ";
        }
        // line 10
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Cold")) {
            // line 11
            echo "        <span class=\"tile-type cold\">Cold</span>
    ";
        }
        // line 13
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Hot")) {
            // line 14
            echo "        <span class=\"tile-type hot\">Hot</span>
    ";
        }
        // line 16
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
        return "ZesharCRMCoreBundle:ListField:opportunity_lead_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 1,  60 => 16,  56 => 14,  53 => 13,  49 => 11,  46 => 10,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.getLead() is not null %}*/
/*         {% set typeString = object.getLead().getTypeString() %}*/
/*     {% else %}*/
/*         {% set typeString = 'Cold' %}*/
/*     {% endif %}*/
/*     {% if typeString == 'Warm' %}*/
/*         <span class="tile-type warm">Warm</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'Cold' %}*/
/*         <span class="tile-type cold">Cold</span>*/
/*     {% endif %}*/
/*     {% if typeString == 'Hot' %}*/
/*         <span class="tile-type hot">Hot</span>*/
/*     {% endif %}*/
/* </td>*/
/* */
