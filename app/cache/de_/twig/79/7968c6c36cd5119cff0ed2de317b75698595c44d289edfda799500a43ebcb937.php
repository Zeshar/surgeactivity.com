<?php

/* ZesharCRMCoreBundle:ListField:lead_email.html.twig */
class __TwigTemplate_ad2bd6700a273534a511401afaa5a09c8cb70b675ffdb06f3ac17d4b063fcadf extends Twig_Template
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
        $__internal_dd55c092dd6da05dfdb18705940b5672f9e489e3c59b8be603eb007e1adefe14 = $this->env->getExtension("native_profiler");
        $__internal_dd55c092dd6da05dfdb18705940b5672f9e489e3c59b8be603eb007e1adefe14->enter($__internal_dd55c092dd6da05dfdb18705940b5672f9e489e3c59b8be603eb007e1adefe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:lead_email.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", true, true)) {
            // line 3
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "contactCard", array(), "any", false, true), "getEmail", array(), "method", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getEmail", array(), "method")))) {
                // line 4
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                    // line 5
                    echo "                <span class=\"email-tab\">
                    <a href=\"#\" class=\"send-email\" title=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 9
                    echo "                <span class=\"email-tab marked-dne\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "contactCard", array()), "getEmail", array(), "method"), "html", null, true);
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
        
        $__internal_dd55c092dd6da05dfdb18705940b5672f9e489e3c59b8be603eb007e1adefe14->leave($__internal_dd55c092dd6da05dfdb18705940b5672f9e489e3c59b8be603eb007e1adefe14_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_9c451de103ec751e56ad6ecd882f7dd2e028708ef4e3aa009c574f58987221c7 = $this->env->getExtension("native_profiler");
        $__internal_9c451de103ec751e56ad6ecd882f7dd2e028708ef4e3aa009c574f58987221c7->enter($__internal_9c451de103ec751e56ad6ecd882f7dd2e028708ef4e3aa009c574f58987221c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_9c451de103ec751e56ad6ecd882f7dd2e028708ef4e3aa009c574f58987221c7->leave($__internal_9c451de103ec751e56ad6ecd882f7dd2e028708ef4e3aa009c574f58987221c7_prof);

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
        return array (  70 => 1,  62 => 15,  59 => 14,  56 => 13,  50 => 10,  47 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
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
