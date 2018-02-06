<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_0d966ad90878bfed72801b77ee84add1f9ca1ae9b8e5d0043b59fd73a06e4b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab344cfab56cee49551ab64b05fa3396b1d9c4ab0cd068059f03504dce393d8a = $this->env->getExtension("native_profiler");
        $__internal_ab344cfab56cee49551ab64b05fa3396b1d9c4ab0cd068059f03504dce393d8a->enter($__internal_ab344cfab56cee49551ab64b05fa3396b1d9c4ab0cd068059f03504dce393d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab344cfab56cee49551ab64b05fa3396b1d9c4ab0cd068059f03504dce393d8a->leave($__internal_ab344cfab56cee49551ab64b05fa3396b1d9c4ab0cd068059f03504dce393d8a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7557df8abe5dc3308f064150cd193a3c12db8fd40ca8ab3a0f2ad044d76675c0 = $this->env->getExtension("native_profiler");
        $__internal_7557df8abe5dc3308f064150cd193a3c12db8fd40ca8ab3a0f2ad044d76675c0->enter($__internal_7557df8abe5dc3308f064150cd193a3c12db8fd40ca8ab3a0f2ad044d76675c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_7557df8abe5dc3308f064150cd193a3c12db8fd40ca8ab3a0f2ad044d76675c0->leave($__internal_7557df8abe5dc3308f064150cd193a3c12db8fd40ca8ab3a0f2ad044d76675c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */
