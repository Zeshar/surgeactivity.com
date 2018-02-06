<?php

/* ZesharCRMCoreBundle:ListField:log_history_operation_type.html.twig */
class __TwigTemplate_30b6e27882795487ce323096dd877e39083dfe442b305c8e19d21b0b07591651 extends Twig_Template
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
        $context["typeString"] = $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getTypeString", array(), "method");
        // line 3
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Login")) {
            // line 4
            echo "        Login
    ";
        }
        // line 6
        echo "    ";
        if (((isset($context["typeString"]) ? $context["typeString"] : null) == "Logout")) {
            // line 7
            echo "        Logout
    ";
        }
        // line 9
        echo "</td>";
    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        echo " class=\"sonata-ba-list-field sonata-ba-list-field-text sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\"";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:log_history_operation_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,  41 => 9,  37 => 7,  34 => 6,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-text sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% set typeString = object.getTypeString() %}*/
/*     {% if typeString == 'Login' %}*/
/*         Login*/
/*     {% endif %}*/
/*     {% if typeString == 'Logout' %}*/
/*         Logout*/
/*     {% endif %}*/
/* </td>*/
