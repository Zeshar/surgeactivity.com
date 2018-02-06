<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9c6d49c0507696a5eb7cfbba845b29cb44127df3eaef7ed80f673a4a97ba495f extends Twig_Template
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
        $__internal_4465c5c67ae0c6d465b322ab663f65b047f865fba3c78102980aba97fb755765 = $this->env->getExtension("native_profiler");
        $__internal_4465c5c67ae0c6d465b322ab663f65b047f865fba3c78102980aba97fb755765->enter($__internal_4465c5c67ae0c6d465b322ab663f65b047f865fba3c78102980aba97fb755765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4465c5c67ae0c6d465b322ab663f65b047f865fba3c78102980aba97fb755765->leave($__internal_4465c5c67ae0c6d465b322ab663f65b047f865fba3c78102980aba97fb755765_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
