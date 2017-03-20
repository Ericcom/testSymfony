<?php

/* base.html.twig */
class __TwigTemplate_d473fe96d79d4c48dcde7afa3c3d7d876b0655789a9f09a58127fd4f1240b875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a5f7d35d29d91b1c7493a19540a43464add5c5b89dd25f9dca4cce70c875ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5f7d35d29d91b1c7493a19540a43464add5c5b89dd25f9dca4cce70c875ec6->enter($__internal_2a5f7d35d29d91b1c7493a19540a43464add5c5b89dd25f9dca4cce70c875ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2a5f7d35d29d91b1c7493a19540a43464add5c5b89dd25f9dca4cce70c875ec6->leave($__internal_2a5f7d35d29d91b1c7493a19540a43464add5c5b89dd25f9dca4cce70c875ec6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72930d12f6ff8cff2287e2ff4ec52b37d45fbb35cdd85a27f72beb55f70fe2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72930d12f6ff8cff2287e2ff4ec52b37d45fbb35cdd85a27f72beb55f70fe2d8->enter($__internal_72930d12f6ff8cff2287e2ff4ec52b37d45fbb35cdd85a27f72beb55f70fe2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_72930d12f6ff8cff2287e2ff4ec52b37d45fbb35cdd85a27f72beb55f70fe2d8->leave($__internal_72930d12f6ff8cff2287e2ff4ec52b37d45fbb35cdd85a27f72beb55f70fe2d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f78c79b451206de6ce7dff680abc20bbc796cda97f73c9d004db9491a9a9890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f78c79b451206de6ce7dff680abc20bbc796cda97f73c9d004db9491a9a9890->enter($__internal_1f78c79b451206de6ce7dff680abc20bbc796cda97f73c9d004db9491a9a9890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f78c79b451206de6ce7dff680abc20bbc796cda97f73c9d004db9491a9a9890->leave($__internal_1f78c79b451206de6ce7dff680abc20bbc796cda97f73c9d004db9491a9a9890_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_252a26afa0c737f4d26b31262354265abadce41fe0e45d5ed253faa7b4685cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252a26afa0c737f4d26b31262354265abadce41fe0e45d5ed253faa7b4685cf0->enter($__internal_252a26afa0c737f4d26b31262354265abadce41fe0e45d5ed253faa7b4685cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_252a26afa0c737f4d26b31262354265abadce41fe0e45d5ed253faa7b4685cf0->leave($__internal_252a26afa0c737f4d26b31262354265abadce41fe0e45d5ed253faa7b4685cf0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edfd1f368f5ece72dee5c4d92a21a3610fdbe9ddcf6f8e2176e3b650fb358ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfd1f368f5ece72dee5c4d92a21a3610fdbe9ddcf6f8e2176e3b650fb358ab8->enter($__internal_edfd1f368f5ece72dee5c4d92a21a3610fdbe9ddcf6f8e2176e3b650fb358ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_edfd1f368f5ece72dee5c4d92a21a3610fdbe9ddcf6f8e2176e3b650fb358ab8->leave($__internal_edfd1f368f5ece72dee5c4d92a21a3610fdbe9ddcf6f8e2176e3b650fb358ab8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/yinliang/testSymfony2/app/Resources/views/base.html.twig");
    }
}
