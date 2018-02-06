<?php

/* ZesharCRMCoreBundle:Widget:time.html.twig */
class __TwigTemplate_702bf3b3b019d62de115bd7172cf6aaf2da378ae29e98df8d22072eaf4f23864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbb961bf3c0ce1b1b6cda3e2ecc15500d13d28c2eca0a6d79f95676536d28f16 = $this->env->getExtension("native_profiler");
        $__internal_cbb961bf3c0ce1b1b6cda3e2ecc15500d13d28c2eca0a6d79f95676536d28f16->enter($__internal_cbb961bf3c0ce1b1b6cda3e2ecc15500d13d28c2eca0a6d79f95676536d28f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:time.html.twig"));

        // line 1
        echo "<style>
    .clock {
        width:100%;
        height: 100%;
        margin:0px auto;
        padding: 10px 0;
        color:#fff;
        background: #000000;
    }

    .Date {
        font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif;
        font-size:14px;
        text-align:center;
        text-shadow:0 0 5px #00c6ff;
    }

    .clock ul {
        width:100%;
        margin:0 auto;
        padding:0px;
        list-style:none;
        text-align:center;
    }

    .clock ul li {
        display:inline;
        font-size:14px;
        text-align:center;
        font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif;
        text-shadow:0 0 5px #00c6ff;
    }

    .point {
        position:relative;
        -moz-animation:mymove 1s ease infinite;
        -webkit-animation:mymove 1s ease infinite;
        padding-left:10px;
        padding-right:10px;
    }

    @-webkit-keyframes mymove
    {
        0% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }
        50% {opacity:0;text-shadow:none;}
        100% {opacity:1.0;text-shadow:0 0 20px #00c6ff;}
    }

    @-moz-keyframes mymove
    {
        0% { opacity:1.0; text-shadow:0 0 20px #00c6ff; }
        50% { opacity:0;text-shadow:none;}
        100% {  opacity:1.0;text-shadow:0 0 20px #00c6ff;}
    }

</style>
";
        // line 57
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_cbb961bf3c0ce1b1b6cda3e2ecc15500d13d28c2eca0a6d79f95676536d28f16->leave($__internal_cbb961bf3c0ce1b1b6cda3e2ecc15500d13d28c2eca0a6d79f95676536d28f16_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_f629002ce8d5437e476559f8ebc3a594dd0ea3ec79d3664fd5544728e60c8ff6 = $this->env->getExtension("native_profiler");
        $__internal_f629002ce8d5437e476559f8ebc3a594dd0ea3ec79d3664fd5544728e60c8ff6->enter($__internal_f629002ce8d5437e476559f8ebc3a594dd0ea3ec79d3664fd5544728e60c8ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 58
        echo "    <div class=\"clock\">
        <div class=\"Date\">
        </div>
        <ul>
            <li class=\"hours\"> </li>
            <li class=\"point\">:</li>
            <li class=\"min\"> </li>
            <li class=\"point\">:</li>
            <li class=\"sec\"> </li>
        </ul>
    </div>

";
        
        $__internal_f629002ce8d5437e476559f8ebc3a594dd0ea3ec79d3664fd5544728e60c8ff6->leave($__internal_f629002ce8d5437e476559f8ebc3a594dd0ea3ec79d3664fd5544728e60c8ff6_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 58,  81 => 57,  23 => 1,);
    }
}
/* <style>*/
/*     .clock {*/
/*         width:100%;*/
/*         height: 100%;*/
/*         margin:0px auto;*/
/*         padding: 10px 0;*/
/*         color:#fff;*/
/*         background: #000000;*/
/*     }*/
/* */
/*     .Date {*/
/*         font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif;*/
/*         font-size:14px;*/
/*         text-align:center;*/
/*         text-shadow:0 0 5px #00c6ff;*/
/*     }*/
/* */
/*     .clock ul {*/
/*         width:100%;*/
/*         margin:0 auto;*/
/*         padding:0px;*/
/*         list-style:none;*/
/*         text-align:center;*/
/*     }*/
/* */
/*     .clock ul li {*/
/*         display:inline;*/
/*         font-size:14px;*/
/*         text-align:center;*/
/*         font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif;*/
/*         text-shadow:0 0 5px #00c6ff;*/
/*     }*/
/* */
/*     .point {*/
/*         position:relative;*/
/*         -moz-animation:mymove 1s ease infinite;*/
/*         -webkit-animation:mymove 1s ease infinite;*/
/*         padding-left:10px;*/
/*         padding-right:10px;*/
/*     }*/
/* */
/*     @-webkit-keyframes mymove*/
/*     {*/
/*         0% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }*/
/*         50% {opacity:0;text-shadow:none;}*/
/*         100% {opacity:1.0;text-shadow:0 0 20px #00c6ff;}*/
/*     }*/
/* */
/*     @-moz-keyframes mymove*/
/*     {*/
/*         0% { opacity:1.0; text-shadow:0 0 20px #00c6ff; }*/
/*         50% { opacity:0;text-shadow:none;}*/
/*         100% {  opacity:1.0;text-shadow:0 0 20px #00c6ff;}*/
/*     }*/
/* */
/* </style>*/
/* {% block widget %}*/
/*     <div class="clock">*/
/*         <div class="Date">*/
/*         </div>*/
/*         <ul>*/
/*             <li class="hours"> </li>*/
/*             <li class="point">:</li>*/
/*             <li class="min"> </li>*/
/*             <li class="point">:</li>*/
/*             <li class="sec"> </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
