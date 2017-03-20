<?php

/* default/index.html.twig */
class __TwigTemplate_e8b836bec62cb4fc7294bfb72ec9926ffbc7adc015eef55de2ee7de61037e97f extends Twig_Template
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
        $__internal_12781ff664f6260d87c308fda661e5442f745b648b699b271127d0bd49593bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12781ff664f6260d87c308fda661e5442f745b648b699b271127d0bd49593bbe->enter($__internal_12781ff664f6260d87c308fda661e5442f745b648b699b271127d0bd49593bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script language=\"javascript\" src=\"public/js/homepage.js\"></script>



</body>
</html>";
        
        $__internal_12781ff664f6260d87c308fda661e5442f745b648b699b271127d0bd49593bbe->leave($__internal_12781ff664f6260d87c308fda661e5442f745b648b699b271127d0bd49593bbe_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script language=\"javascript\" src=\"public/js/homepage.js\"></script>



</body>
</html>", "default/index.html.twig", "/home/yinliang/testSymfony2/app/Resources/views/default/index.html.twig");
    }
}
