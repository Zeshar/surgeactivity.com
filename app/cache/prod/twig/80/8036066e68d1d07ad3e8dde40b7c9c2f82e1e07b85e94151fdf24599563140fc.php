<?php

/* ZesharCRMCoreBundle:Widget:time.html.twig */
class __TwigTemplate_15638b99677f984d40af9d8e3b081304369351f6e35e335d0c9db884611a538d extends Twig_Template
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
    }

    public function block_widget($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:time.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 58,  78 => 57,  20 => 1,);
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
