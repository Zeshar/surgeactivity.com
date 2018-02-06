<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_8919c8ff36935f3f4c1cff75ef5dee722dcacc923d5536b45eced1b210a1f58c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fd3b7d0db95fa17e64805a017104d2536b5c7abec312fc0ca78c816d143cc3 = $this->env->getExtension("native_profiler");
        $__internal_07fd3b7d0db95fa17e64805a017104d2536b5c7abec312fc0ca78c816d143cc3->enter($__internal_07fd3b7d0db95fa17e64805a017104d2536b5c7abec312fc0ca78c816d143cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fd3b7d0db95fa17e64805a017104d2536b5c7abec312fc0ca78c816d143cc3->leave($__internal_07fd3b7d0db95fa17e64805a017104d2536b5c7abec312fc0ca78c816d143cc3_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d2d5baba9550e623e6a281251b7f7a539f4f426570395874265f31f8ee507271 = $this->env->getExtension("native_profiler");
        $__internal_d2d5baba9550e623e6a281251b7f7a539f4f426570395874265f31f8ee507271->enter($__internal_d2d5baba9550e623e6a281251b7f7a539f4f426570395874265f31f8ee507271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_d2d5baba9550e623e6a281251b7f7a539f4f426570395874265f31f8ee507271->leave($__internal_d2d5baba9550e623e6a281251b7f7a539f4f426570395874265f31f8ee507271_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */
