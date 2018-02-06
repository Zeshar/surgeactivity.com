<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_show.html.twig */
class __TwigTemplate_192c507da035a060b2dbe598b50aff1a68f8bdd87490ccb29d947b5444cdb92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<li>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-show\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_show", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
<li>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     <a href="{{ admin.generateObjectUrl('show', object) }}">*/
/*         <i class="glyphicon glyphicon-show"></i>*/
/*         {{ 'action_show'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* <li>*/
