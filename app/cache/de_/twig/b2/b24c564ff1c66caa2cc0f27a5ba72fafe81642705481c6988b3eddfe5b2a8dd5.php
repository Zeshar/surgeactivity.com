<?php

/* ZesharCRMCoreBundle:ListField:lead_phone.html.twig */
class __TwigTemplate_aea65ea981f3318caf920525b904cb8f47f4cc5245aec2f0711831eaeca62783 extends Twig_Template
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
        $__internal_a964659762482b599aaa58c0304fd99297cdfddac36d164d755eebf65daac792 = $this->env->getExtension("native_profiler");
        $__internal_a964659762482b599aaa58c0304fd99297cdfddac36d164d755eebf65daac792->enter($__internal_a964659762482b599aaa58c0304fd99297cdfddac36d164d755eebf65daac792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:lead_phone.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", true, true)) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()))) {
                // line 4
                echo "            <div class=\"name-tel-tab ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "dnc";
                } else {
                    echo "make-call";
                }
                echo "\" style=\"width: auto; overflow: visible; ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "getDnc", array(), "method")) {
                    echo "cursor:pointer;";
                }
                echo "\">
                ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "phone", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 8
            echo "    ";
        }
        // line 9
        echo "</td>";
        
        $__internal_a964659762482b599aaa58c0304fd99297cdfddac36d164d755eebf65daac792->leave($__internal_a964659762482b599aaa58c0304fd99297cdfddac36d164d755eebf65daac792_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_ce04026733dd883d194bee8942342ff4a640aba853b3186459b5295bd2a5cb1a = $this->env->getExtension("native_profiler");
        $__internal_ce04026733dd883d194bee8942342ff4a640aba853b3186459b5295bd2a5cb1a->enter($__internal_ce04026733dd883d194bee8942342ff4a640aba853b3186459b5295bd2a5cb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_ce04026733dd883d194bee8942342ff4a640aba853b3186459b5295bd2a5cb1a->leave($__internal_ce04026733dd883d194bee8942342ff4a640aba853b3186459b5295bd2a5cb1a_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:lead_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  55 => 9,  52 => 8,  46 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% if object.contactCard is defined %}*/
/*         {% if object.contactCard.phone is not empty %}*/
/*             <div class="name-tel-tab {% if object.contactCard.phone.getDnc() %}dnc{% else %}make-call{% endif %}" style="width: auto; overflow: visible; {% if not object.contactCard.phone.getDnc() %}cursor:pointer;{% endif %}">*/
/*                 {{ object.contactCard.phone }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
