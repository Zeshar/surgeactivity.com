<?php

/* ZesharCRMCoreBundle:ListField:lead_email.html.twig */
class __TwigTemplate_ab0e9d1052852029ddc73ac16eccc2ee293216e2e1df6904b1c848712655a00f extends Twig_Template
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
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", true, true)) {
            // line 3
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", false, true), "getEmail", array(), "method", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getEmail", array(), "method")))) {
                // line 4
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                    // line 5
                    echo "                <span class=\"email-tab\">
                    <a href=\"#\" class=\"send-email\" title=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 9
                    echo "                <span class=\"email-tab marked-dne\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
                    echo "
                </span>
            ";
                }
                // line 13
                echo "        ";
            }
            // line 14
            echo "    ";
        }
        // line 15
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
        return "ZesharCRMCoreBundle:ListField:lead_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 1,  59 => 15,  56 => 14,  53 => 13,  47 => 10,  44 => 9,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.contactCard is defined %}*/
/*         {% if (object.contactCard.getEmail() is defined) and (object.contactCard.getEmail() is not empty) %}*/
/*             {% if not object.contactCard.getEmail().getDonotEmail() %}*/
/*                 <span class="email-tab">*/
/*                     <a href="#" class="send-email" title="{{ object.contactCard.getEmail() }}">{{ object.contactCard.getEmail() }}</a>*/
/*                 </span>*/
/*             {% else %}*/
/*                 <span class="email-tab marked-dne">*/
/*                     {{ object.contactCard.getEmail() }}*/
/*                 </span>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */
