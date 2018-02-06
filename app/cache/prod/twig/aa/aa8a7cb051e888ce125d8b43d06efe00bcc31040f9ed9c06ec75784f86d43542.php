<?php

/* ZesharCRMCoreBundle:ListField:lead_name_phone.html.twig */
class __TwigTemplate_6beedca70614cbb55695146fd4a26223d97bd1637c38c9a13a9d6e595b1fcae6 extends Twig_Template
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
            echo "        <div class=\"name-tel-tab\" style=\"width: auto;\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "getFullName", array(), "method"), "html", null, true);
            echo "
        </div>
        ";
            // line 6
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "phone", array()))) {
                // line 7
                echo "            <div class=\"name-tel-tab ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "dnc";
                } else {
                    echo "make-call";
                }
                echo "\" style=\"width: auto; overflow: visible; ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "cursor:pointer;";
                }
                echo "\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array()), "phone", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 11
            echo "    ";
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
        return "ZesharCRMCoreBundle:ListField:lead_name_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 1,  59 => 12,  56 => 11,  50 => 8,  37 => 7,  35 => 6,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.contactCard is defined %}*/
/*         <div class="name-tel-tab" style="width: auto;">*/
/*             {{ object.contactCard.getFullName() }}*/
/*         </div>*/
/*         {% if object.contactCard.phone is not empty %}*/
/*             <div class="name-tel-tab {% if object.contactCard.phone.getDnc() %}dnc{% else %}make-call{% endif %}" style="width: auto; overflow: visible; {% if not object.contactCard.phone.getDnc() %}cursor:pointer;{% endif %}">*/
/*                 {{ object.contactCard.phone }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */
