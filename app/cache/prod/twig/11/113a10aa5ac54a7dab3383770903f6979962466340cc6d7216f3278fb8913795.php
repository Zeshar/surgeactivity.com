<?php

/* ZesharCRMCoreBundle:ListField:contact_status.html.twig */
class __TwigTemplate_d649fd7cdce0b0d0856b00420dd74d49bf9ad4b340b9542f26016692f316c898 extends Twig_Template
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
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"))) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getCallStatusString", array(), "method"))) {
                // line 4
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "Yes")) {
                    // line 5
                    echo "                <span class=\"contact-status yes\">Yes</span>
            ";
                }
                // line 7
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "No")) {
                    // line 8
                    echo "                <span class=\"contact-status no\">No</span>
            ";
                }
                // line 10
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "Neglected")) {
                    // line 11
                    echo "                <span class=\"contact-status neglect\">Neglected</span>
            ";
                }
                // line 13
                echo "        ";
            } else {
                // line 14
                echo "            <span class=\"contact-status no\">No</span>
        ";
            }
            // line 16
            echo "    ";
        }
        // line 17
        echo "</td>";
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
        return "ZesharCRMCoreBundle:ListField:contact_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 1,  61 => 17,  58 => 16,  54 => 14,  51 => 13,  47 => 11,  44 => 10,  40 => 8,  37 => 7,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.getContactCard() is not empty %}*/
/*         {% if object.getContactCard().getCallStatusString() is not empty %}*/
/*             {% if object.getContactCard().getCallStatusString() == 'Yes' %}*/
/*                 <span class="contact-status yes">Yes</span>*/
/*             {% endif %}*/
/*             {% if object.getContactCard().getCallStatusString() == 'No' %}*/
/*                 <span class="contact-status no">No</span>*/
/*             {% endif %}*/
/*             {% if object.getContactCard().getCallStatusString() == 'Neglected' %}*/
/*                 <span class="contact-status neglect">Neglected</span>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <span class="contact-status no">No</span>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
