<?php

/* ZesharCRMCoreBundle:ListField:company_name_score.html.twig */
class __TwigTemplate_c341c1297e0ccc43ca7d3e1c5567085b879f4f53f676ed3de526d735c1547d2e extends Twig_Template
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
        $__internal_dd8b61406ec569f23e49cfb8a3b4f5d50608b5d663676bf7dd7cd248b689dad3 = $this->env->getExtension("native_profiler");
        $__internal_dd8b61406ec569f23e49cfb8a3b4f5d50608b5d663676bf7dd7cd248b689dad3->enter($__internal_dd8b61406ec569f23e49cfb8a3b4f5d50608b5d663676bf7dd7cd248b689dad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ListField:company_name_score.html.twig"));

        // line 1
        echo "<td";
        $this->displayBlock('sonata_list_field_attributes', $context, $blocks);
        echo ">
    ";
        // line 2
        $context["billingInfo"] = false;
        // line 3
        echo "    ";
        $context["user"] = twig_first($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "users", array()));
        // line 4
        echo "    ";
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 5
            echo "        ";
            $context["billingInfo"] = twig_first($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "billingInfo", array()));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ((isset($context["billingInfo"]) ? $context["billingInfo"] : $this->getContext($context, "billingInfo"))) {
            // line 9
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_billing_info_show", array("id" => $this->getAttribute((isset($context["billingInfo"]) ? $context["billingInfo"] : $this->getContext($context, "billingInfo")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "name", array()), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 11
            echo "        <span class=\"sonata-link-identifier\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "name", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "</td>";
        
        $__internal_dd8b61406ec569f23e49cfb8a3b4f5d50608b5d663676bf7dd7cd248b689dad3->leave($__internal_dd8b61406ec569f23e49cfb8a3b4f5d50608b5d663676bf7dd7cd248b689dad3_prof);

    }

    // line 1
    public function block_sonata_list_field_attributes($context, array $blocks = array())
    {
        $__internal_d8e2aebdaeef77b5bdfe3826eb4e33f9d7d65b0fe4ba5e167f3f167f93dce45a = $this->env->getExtension("native_profiler");
        $__internal_d8e2aebdaeef77b5bdfe3826eb4e33f9d7d65b0fe4ba5e167f3f167f93dce45a->enter($__internal_d8e2aebdaeef77b5bdfe3826eb4e33f9d7d65b0fe4ba5e167f3f167f93dce45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_field_attributes"));

        echo " class=\"sonata-ba-list-field sonata-ba-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo " sonata-list-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        
        $__internal_d8e2aebdaeef77b5bdfe3826eb4e33f9d7d65b0fe4ba5e167f3f167f93dce45a->leave($__internal_d8e2aebdaeef77b5bdfe3826eb4e33f9d7d65b0fe4ba5e167f3f167f93dce45a_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ListField:company_name_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 1,  61 => 13,  55 => 11,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  28 => 2,  23 => 1,);
    }
}
/* <td{% block sonata_list_field_attributes %} class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }} sonata-list-field-{{ field_description.name }}" objectId="{{ admin.id(object) }}"{% endblock %}>*/
/*     {% set billingInfo = false %}*/
/*     {% set user = object.users|first %}*/
/*     {% if user %}*/
/*         {% set billingInfo = user.billingInfo|first %}*/
/*     {% endif %}*/
/* */
/*     {% if billingInfo %}*/
/*         <a class="sonata-link-identifier" href="{{ path('admin_billing_info_show', {'id': billingInfo.id}) }}">{{ object.name }}</a>*/
/*     {% else %}*/
/*         <span class="sonata-link-identifier">{{ object.name }}</span>*/
/*     {% endif %}*/
/* </td>*/
