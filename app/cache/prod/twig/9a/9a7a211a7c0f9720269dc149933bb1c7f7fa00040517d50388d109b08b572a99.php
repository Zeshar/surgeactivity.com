<?php

/* ZesharCRMCoreBundle:ListField:opportunity_lead_score.html.twig */
class __TwigTemplate_acb7a4a0675dc723dd6533d0f265bef30a28cf127a6f57146333975ba139c11b extends Twig_Template
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
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            // line 2
            echo "    <td";
            $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
            echo ">
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "%
    </td>
";
        } else {
            // line 6
            echo "    <td></td>
";
        }
    }

    // line 2
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
        return "ZesharCRMCoreBundle:ListField:opportunity_lead_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  33 => 6,  27 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% if value is not empty %}*/
/*     <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*         {{ value }}%*/
/*     </td>*/
/* {% else %}*/
/*     <td></td>*/
/* {% endif %}*/
