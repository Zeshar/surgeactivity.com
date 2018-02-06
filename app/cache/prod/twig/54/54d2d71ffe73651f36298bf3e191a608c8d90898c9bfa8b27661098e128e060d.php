<?php

/* ZesharCRMCoreBundle:ListField:billing_status.html.twig */
class __TwigTemplate_fcf175df607d1180d3a9ac2589f040eb8d3eadd8082ee62d831e35119ac794ad extends Twig_Template
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
        // line 3
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "billingStatus", array(), "method") == "Active")) {
            // line 4
            echo "        <span class=\"contact-status yes\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "billingStatus", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "billingStatus", array()) == "Inactive")) {
            // line 7
            echo "        <span class=\"contact-status no\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "billingStatus", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 9
        echo "
</td>";
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
        return "ZesharCRMCoreBundle:ListField:billing_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 1,  43 => 9,  37 => 7,  34 => 6,  28 => 4,  26 => 3,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/* */
/*     {% if object.billingStatus() == 'Active' %}*/
/*         <span class="contact-status yes">{{ object.billingStatus() }}</span>*/
/*     {% endif %}*/
/*     {% if object.billingStatus == 'Inactive' %}*/
/*         <span class="contact-status no">{{ object.billingStatus }}</span>*/
/*     {% endif %}*/
/* */
/* </td>*/
