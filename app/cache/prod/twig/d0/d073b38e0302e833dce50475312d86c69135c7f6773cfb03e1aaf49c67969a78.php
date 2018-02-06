<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig */
class __TwigTemplate_44e8606b55d553be25fc52ebc27edb45b2be15580a988da5d594ac9992bb990c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 5
            echo "        ";
            if ( !twig_test_empty($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"))) {
                // line 6
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"), "getDonotEmail", array(), "method")) {
                    // line 7
                    echo "                <span class=\"email-contact-tab\">
                                <a href=\"#\" class=\"send-email\" title=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"), "html", null, true);
                    echo "</a>
                            </span>
            ";
                } else {
                    // line 11
                    echo "                <span class=\"email-contact-tab marked-dne\">
                                ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getEmail", array(), "method"), "html", null, true);
                    echo "
                            </span>
            ";
                }
                // line 15
                echo "        ";
            }
            // line 16
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  59 => 15,  53 => 12,  50 => 11,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% if value %}*/
/*         {% if object.getEmail() is not empty %}*/
/*             {% if not object.getEmail().getDonotEmail() %}*/
/*                 <span class="email-contact-tab">*/
/*                                 <a href="#" class="send-email" title="{{ object.getEmail() }}">{{ object.getEmail() }}</a>*/
/*                             </span>*/
/*             {% else %}*/
/*                 <span class="email-contact-tab marked-dne">*/
/*                                 {{ object.getEmail() }}*/
/*                             </span>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
