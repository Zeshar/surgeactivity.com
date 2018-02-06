<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_6c6a21eba99a07b66b636ae58469b91924a055d69033612ca4bd09e552af13bf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc74b323c2c6dd8d46e3d27cc1ab8a2d27e08b21054f154a97531d5302e4edc = $this->env->getExtension("native_profiler");
        $__internal_8dc74b323c2c6dd8d46e3d27cc1ab8a2d27e08b21054f154a97531d5302e4edc->enter($__internal_8dc74b323c2c6dd8d46e3d27cc1ab8a2d27e08b21054f154a97531d5302e4edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc74b323c2c6dd8d46e3d27cc1ab8a2d27e08b21054f154a97531d5302e4edc->leave($__internal_8dc74b323c2c6dd8d46e3d27cc1ab8a2d27e08b21054f154a97531d5302e4edc_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_28896ec5c6d482cf7410664dd1b09375971cd0501568b167406d2f620dacc360 = $this->env->getExtension("native_profiler");
        $__internal_28896ec5c6d482cf7410664dd1b09375971cd0501568b167406d2f620dacc360->enter($__internal_28896ec5c6d482cf7410664dd1b09375971cd0501568b167406d2f620dacc360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_28896ec5c6d482cf7410664dd1b09375971cd0501568b167406d2f620dacc360->leave($__internal_28896ec5c6d482cf7410664dd1b09375971cd0501568b167406d2f620dacc360_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */
