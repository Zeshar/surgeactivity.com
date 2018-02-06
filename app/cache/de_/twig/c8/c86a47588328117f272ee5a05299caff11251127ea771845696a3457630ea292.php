<?php

/* ZesharCRMCoreBundle:ListField:contact_status.html.twig */
class __TwigTemplate_b21d52d9b98d13724c9fb3673f82e9e0a32f408e0cd0326203d79509cde32903 extends Twig_Template
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
        $__internal_22f80b49e8077bb951b9e99754d5d5204ae1c9e6cd7a03483727d9a200c70eae = $this->env->getExtension("native_profiler");
        $__internal_22f80b49e8077bb951b9e99754d5d5204ae1c9e6cd7a03483727d9a200c70eae->enter($__internal_22f80b49e8077bb951b9e99754d5d5204ae1c9e6cd7a03483727d9a200c70eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:contact_status.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"))) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getCallStatusString", array(), "method"))) {
                // line 4
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "Yes")) {
                    // line 5
                    echo "                <span class=\"contact-status yes\">Yes</span>
            ";
                }
                // line 7
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "No")) {
                    // line 8
                    echo "                <span class=\"contact-status no\">No</span>
            ";
                }
                // line 10
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getContactCard", array(), "method"), "getCallStatusString", array(), "method") == "Neglected")) {
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
        
        $__internal_22f80b49e8077bb951b9e99754d5d5204ae1c9e6cd7a03483727d9a200c70eae->leave($__internal_22f80b49e8077bb951b9e99754d5d5204ae1c9e6cd7a03483727d9a200c70eae_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_e6895c48e3177549c7b8b001aaf8b965b1740ce08ce64e112238a2f6e668d4e0 = $this->env->getExtension("native_profiler");
        $__internal_e6895c48e3177549c7b8b001aaf8b965b1740ce08ce64e112238a2f6e668d4e0->enter($__internal_e6895c48e3177549c7b8b001aaf8b965b1740ce08ce64e112238a2f6e668d4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_e6895c48e3177549c7b8b001aaf8b965b1740ce08ce64e112238a2f6e668d4e0->leave($__internal_e6895c48e3177549c7b8b001aaf8b965b1740ce08ce64e112238a2f6e668d4e0_prof);

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
        return array (  71 => 1,  64 => 17,  61 => 16,  57 => 14,  54 => 13,  50 => 11,  47 => 10,  43 => 8,  40 => 7,  36 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
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
