<?php

/* ZesharCRMCoreBundle:ListField:company_name_score.html.twig */
class __TwigTemplate_dbae67181eaec764037d82ecb5c08b9d1878928a3d7f2c54af568c5c38be16ab extends Twig_Template
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
        $context["billingInfo"] = false;
        // line 3
        echo "    ";
        $context["user"] = twig_first($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "users", array()));
        // line 4
        echo "    ";
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 5
            echo "        ";
            $context["billingInfo"] = twig_first($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "billingInfo", array()));
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if ((isset($context["billingInfo"]) ? $context["billingInfo"] : null)) {
            // line 9
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_billing_info_show", array("id" => $this->getAttribute((isset($context["billingInfo"]) ? $context["billingInfo"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "name", array()), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 11
            echo "        <span class=\"sonata-link-identifier\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "name", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
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
        return "ZesharCRMCoreBundle:ListField:company_name_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,  58 => 13,  52 => 11,  44 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  20 => 1,);
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
